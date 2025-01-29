<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{

    public function definition(): array
    {
        $user = [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),

        ];
        $hash = hash('sha256', json_encode($user));
        $nin = hash('sha256', $this->faker->unique()->numerify('##############'));
        $pin = Hash::make("123456");
        return [
            'hash' => $hash,
            'pin' => $pin,
            'nin' => $nin,
        ];
    }

}
