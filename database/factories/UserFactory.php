<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'Nama_User' => $this->faker->name(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Password' => Hash::make('password123'),
        ];
    }
}
