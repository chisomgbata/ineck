<?php

namespace App\Livewire;

use App\Models\User;
use Auth;
use Filament\Notifications\Notification;
use Hash;
use Livewire\Component;

class Login extends Component
{

    public $voter_id;
    public $pin;

    public function login()
    {
        $this->validate([
            'voter_id' => 'required',
            'pin' => 'required',
        ]);

        $voter = User::find($this->voter_id);

        if ($voter) {
            if (Hash::check($this->pin, $voter->pin)) {
                Auth::login($voter, true);
                return redirect()->route('votes');
            } else {
                Notification::make()
                    ->title('Error')
                    ->danger()
                    ->body('Invalid voter ID or PIN')
                    ->send();
            }
        } else {
            Notification::make()
                ->title('Error')
                ->danger()
                ->body('Invalid voter ID or PIN')
                ->send();
        }


    }

    public function render()
    {
        return view('livewire.login');
    }
}
