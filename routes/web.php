<?php

use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Votes;
use App\Models\Candidate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $candidates = Candidate::all();
    return view('welcome', compact('candidates'));
})->name('home');

Route::get('/votes', Votes::class)->name('votes');

Route::get('register', Register::class)->name('register');

Route::get('login', Login::class)->name('login');

