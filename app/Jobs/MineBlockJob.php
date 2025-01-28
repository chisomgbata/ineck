<?php

namespace App\Jobs;

use App\Models\Ledger;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MineBlockJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        private readonly string $ledgerId
    )
    {
    }

    public function handle(): void
    {
        $ledger = Ledger::findOrFail($this->ledgerId);


        info('Mining block', ['ledger_id' => $ledger->id]);

        $data = $ledger->data;
        $previousHash = Ledger::whereNotNull('hash')->latest()->first()->hash;
        $data['previous_hash'] = $previousHash;
        $nonce = 0;

        do {
            $nonce++;
            $hash = hash('sha256', json_encode($data));
        } while (!in_array($hash[0], ['0', '1', '2', '3', '4', '5']));

        $ledger->update([
            'previous_hash' => $previousHash,
            'hash' => $hash,
            'nonce' => $nonce,
        ]);

        info('Block mined', ['ledger_id' => $ledger->id]);
        info('Time taken to mine block', ['ledger_id' => $ledger->id, 'time' => now()->diffInSeconds($ledger->created_at)]);

    }

    public function failed(): void
    {
        info('Failed to mine block', ['ledger_id' => $this->ledgerId]);
        $ledger = Ledger::findOrFail($this->ledgerId);
        $ledger->delete();
    }

}
