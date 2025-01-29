<?php

namespace App\Livewire;

use App\Models\User;
use Auth;
use Filament\Notifications\Notification;
use Hash;
use Livewire\Component;

class Register extends Component
{
    public $nin;
    public $first_name;
    public $last_name;
    public $pin;
    public $hash;
    public bool $modalOpen = false;

    public function accreditate()
    {
        $hash = hash('sha256', $this->nin . $this->first_name . $this->last_name . $this->pin);
        $nin = hash('sha256', $this->nin);

//        check for existing user
        $user = User::where('nin', $nin)->first();
        if ($user) {
            Notification::make()
                ->title('Error')
                ->danger()
                ->body('User Already Accredited')
                ->send();
        }

        $pin = Hash::make($this->pin);

        $user = User::create([
            'hash' => $hash,
            'pin' => $pin,
            'nin' => $nin,
        ]);

        $this->hash = $user->id;

        Auth::login($user, true);

        $this->modalOpen = true;

    }

    public function render()
    {
        return view('livewire.register');
    }
}
