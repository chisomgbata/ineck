<?php

namespace App\Console\Commands;

use App\Models\Ledger;
use Illuminate\Console\Command;
use function Laravel\Prompts\error;

class VerifyBlockchainCommand extends Command
{
    protected $signature = 'verify:blockchain';

    protected $description = 'Command description';

    public function handle(): void
    {
        \Laravel\Prompts\info('Verifying Blockchain');
        $genesis = Ledger::first();
        $current = $genesis;
        $next = Ledger::where('previous_hash', $current->hash)->first();
        while ($next) {
            if ($current->hash !== $next->previous_hash) {
                error('Blockchain is invalid');
                return;
            }

//            check the hash of the data and the nonce
            $data = $next->data;
            $data['nonce'] = $next->nonce;
            $data['previous_hash'] = $next->previous_hash;

            $hash = hash('sha256', json_encode($data));
            if ($hash !== $next->hash) {
                error('Blockchain is invalid');
                return;
            }


            $current = $next;
            $next = Ledger::where('previous_hash', $current->hash)->first();
        }
    }
}
