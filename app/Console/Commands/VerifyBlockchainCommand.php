<?php

namespace App\Console\Commands;

use App\Models\Ledger;
use Illuminate\Console\Command;

class VerifyBlockchainCommand extends Command
{
    protected $signature = 'verify:blockchain';

    protected $description = 'Command description';

    public function handle(): void
    {
        $genesis = Ledger::first();
        $current = Ledger::where('previous_hash', $genesis->hash)->first();

        do {
            // Find the next block in the chain
            $next = Ledger::where('previous_hash', $current->hash)->first();

            // Validate the current block's integrity
            $dataToHash = $current->data;
            $dataToHash['previous_hash'] = $current->previous_hash;
            $dataToHash['nonce'] = $current->nonce;


            $calculatedHash = hash('sha256', json_encode($dataToHash));
            if ($calculatedHash !== $current->hash) {
                $this->error('Blockchain is invalid at block ' . $current->id . '. Hash verification failed.');
                return;
            }

            // Validate the connection to the next block
            if ($next && $current->hash !== $next->previous_hash) {
                $this->error('Blockchain is invalid at block ' . $next->id . '. Hash mismatch.');
                return;
            }

            // Move to the next block
            $current = $next;

        } while ($current);

        $this->info('Blockchain is valid');

    }
}
