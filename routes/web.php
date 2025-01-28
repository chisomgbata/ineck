<?php

use App\Livewire\Votes;
use App\Models\Candidate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $candidates = Candidate::all();
    return view('welcome', compact('candidates'));
});

Route::get('/votes', Votes::class)->name('votes');

Route::view('register', 'register')->name('register');

