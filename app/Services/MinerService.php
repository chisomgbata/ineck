<?php

namespace App\Services;

use App\Models\Ledger;

class MinerService
{
    public function mine()
    {
        // Fetch the latest mined block
        $lastMinedBlock = Ledger::whereNotNull('hash')->latest('id')->first();

        $previousHash = $lastMinedBlock?->hash;

        // Get all unmined blocks in order
        $pendingBlocks = Ledger::whereNull('hash')->orderBy('id')->get();

        foreach ($pendingBlocks as $block) {
            info('Mining block ' . $block->id);
            $data = $block->data;
            $data['previous_hash'] = $previousHash;

            $nonce = 0;
            do {
                $nonce++;
                $data['nonce'] = $nonce;
                $hash = hash('sha256', json_encode($data));
            } while (rand(0, 1) === 0);

//            check if the previous hash is already used in the blockchain
            $isPreviousHashUsed = Ledger::where('hash', $previousHash)->exists();
            if (!$isPreviousHashUsed) {
                info('Previous hash is not used in the blockchain');
                continue;
            }

            // Update the block with mined values
            $block->update([
                'previous_hash' => $previousHash,
                'hash' => $hash,
                'nonce' => $nonce,
            ]);

            // Set the current block's hash as the new previous hash
            $previousHash = $hash;
            info('Block ' . $block->id . ' mined');
        }
    }
}
