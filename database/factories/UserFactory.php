<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Ramsey\Uuid\FeatureSet;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

    public function admin()
    {   $pass=Hash::make('1111');
        return $this->state([
            'id'=>1,
            'name'=>'fatemahkhe',
            'email'=>'admin@admin.com',
            'password'=>$pass,
            'is_admin'=>true
        ]);
    }
    public function fatemah()
    {   $pass=Hash::make('1111');
        return $this->state([
            'id'=>2,
            'name'=>'fatemahkhe',
            'email'=>'fatemah@gmail.com',
            'password'=>$pass,
        ]);
    }
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    // public function withPersonalTeam()
    // {
    //     if (! FeatureSet::hasTeamFeatures()) {
    //         return $this->state([]);
    //     }

    //     return $this->has(
    //         Team::factory()
    //             ->state(function (array $attributes, User $user) {
    //                 return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
    //             }),
    //         'ownedTeams'
    //     );
    // }
}
