<?php

namespace App\Services;

use App\Models\Ledger;

class VoteService
{
    public function getVotes(){
        return Ledger::whereNotNull('hash')->get('data');
    }

    public function getVotesByVoter($voterId){
        return Ledger::whereJsonContains('data->voter_id', $voterId)->whereNotNull('hash')->get('data');
    }

    public function getVotesByCandidate($candidateId){
        return Ledger::whereJsonContains('data->candidate_id', $candidateId)->whereNotNull('hash')->get('data');
    }

    public function getVotesCountByCandidate($candidateId){
        return Ledger::whereJsonContains('data->candidate_id', $candidateId)->whereNotNull('hash')->count();
    }
}
