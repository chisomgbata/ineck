<?php

namespace App\Services;

use App\Jobs\MineBlockJob;
use App\Models\Candidate;
use App\Models\Ledger;
use Exception;

class VoterService
{
    /**
     * @throws Exception
     */
    public function vote(Candidate $candidate): void
    {

        $voter = auth()->user();
        $hasVotedBefore = Ledger::whereJsonContains('data->voter_id', $voter->id)
            ->exists();
        if ($hasVotedBefore) {
            throw new Exception('You have already voted', 400);
        }

        $previousBlock = Ledger::latest()->first();

        if (!$previousBlock) {
            throw new Exception('Blockchain is not initialized', 500);
        }

        $ledger = Ledger::create([
            'previous_hash' => null,
            'hash' => null,
            'nonce' => 0,
            'data' => [
                'voter_id' => $voter->id,
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
            ],
        ]);

        MineBlockJob::dispatch($ledger->id);

    }
}
