<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CandidateSeeder extends Seeder
{
    public function run(): void
    {
        Candidate::create([
            'name' => "TULUMBU JAGS",
            'party' => "APCC",
            'description' => "I will champion bold, transformative policies to ensure every citizen has access to quality education, healthcare, and opportunities for a brighter tomorrow.",
            'image' => "images/tulumbu.jpg",
            'color' => "#FF5733",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Candidate::create([
            'name' => "FETER OPI",
            'party' => "LABOURERS",
            'description' => "I will lead with transparency and action, prioritizing economic growth, infrastructure, and community development for a stronger and more resilient society.",
            'image' => "images/feter.jpg",
            'color' => "#33FF57",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Candidate::create([
            'name' => "ATIKA ABA",
            'party' => "PDPP",
            'description' => "I will fight tirelessly to combat climate change, protect natural resources, and build a sustainable future for generations to come.",
            'image' => "images/atika.jpg",
            'color' => "#FFD733",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Candidate::create([
            'name' => "KAMALA CHUKWUMA",
            'party' => "REPUBLICANNOT",
            'description' => "I will strive to dismantle systemic inequalities, empower marginalized voices, and deliver justice and fairness to all.",
            'image' => "images/kamala.jpg",
            'color' => "#3357FF",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
