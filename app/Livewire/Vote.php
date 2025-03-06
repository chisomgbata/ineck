<?php

namespace App\Livewire;

use App\Models\Candidate;
use App\Models\Ledger;
use App\Services\VoterService;
use Filament\Notifications\Notification;
use Livewire\Component;

class Vote extends Component
{
    public $voteModal = false;
    public $candidate;
    public $hasVotedBefore = false;

    public function openModal()
    {
        $this->voteModal = true;
        $this->hasVotedBefore = Ledger::where('voter_id', auth()->id())->exists();
    }

    public function vote()
    {
        $user = auth()->user();
        $hasVotedBefore = Ledger::where('voter_id', $user->id)->exists();
        if ($hasVotedBefore) {
            Notification::make()
                ->title('Error')
                ->danger()
                ->body('You have already voted')
                ->send();
            $this->closeModal();
            return;
        }

        app(VoterService::class)->vote(Candidate::findOrFail($this->candidate));

        $this->closeModal();
        Notification::make()
            ->title('Success')
            ->success()
            ->body('You have successfully voted')
            ->send();

    }

    public function closeModal()
    {
        $this->voteModal = false;
    }

    public function render()
    {
        $candidates = Candidate::all();
        return view('livewire.vote', compact('candidates'));
    }
}
