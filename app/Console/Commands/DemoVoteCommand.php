<?php

namespace App\Console\Commands;

use App\Models\Candidate;
use App\Models\User;
use App\Services\VoterService;
use Auth;
use Illuminate\Console\Command;

class DemoVoteCommand extends Command
{
    protected $signature = 'demo:vote';

    protected $description = 'Command description';

    public function handle(): void
    {
        $user = User::all();

        $user->each(function ($user) {
            Auth::login($user);

            // Fetch a random candidate for each user in the loop
            $candidate = Candidate::inRandomOrder()->first();

            app(VoterService::class)->vote($candidate);
        });

    }
}
