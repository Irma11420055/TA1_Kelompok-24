<?php

namespace Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
=======
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
<<<<<<< HEAD
=======
    /**
     * The current password being used by the factory.
     */
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
<<<<<<< HEAD
            'email_verified_at' => now(),
=======
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
<<<<<<< HEAD
=======

    /**
     * Indicate that the model's role is admin.
     */
    public function admin(): static
    {
        return $this->assignRole('admin');
    }

    /**
     * Indicate that the model's role is lecturer.
     */
    public function lecturer(): static
    {
        return $this->assignRole('lecturer');
    }

    /**
     * Indicate that the model's role is student.
     */
    public function student(): static
    {
        return $this->assignRole('student');
    }

    /**
     * @param array|\Spatie\Permission\Contracts\Role|string  ...$roles
     * @return UserFactory
     */
    private function assignRole(...$roles): UserFactory
    {
        return $this->afterCreating(fn (User $user) => $user->syncRoles($roles));
    }
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
}
