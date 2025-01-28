<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Votes extends Component
{
    public function render(): View
    {
        return view('livewire.votes');
    }
}
