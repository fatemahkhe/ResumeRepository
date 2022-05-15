<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }
    public function fatemahInfo()
    {
        return $this->state([
            'fname'=>'fatemah',
            'lname'=>'kheder',
            'age'=>26,
            'jobTitle'=>'IT Engineer',
            'gender'=>'female',
            'country'=>'Syria',
            'phone'=>99999999999,
            'birthdate'=>'1995-04-06',
            'address'=>'Damascus',
            'about'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur possimus,
             minus sunt eveniet facilis aspernatur et. Saepe dolorum quaerat minima inventore soluta nulla quos qui. Ratione asperiores fuga harum dolorem.r',
            'profile_photo_path'=>'images/users/h.PNG',
            'email'=>'fatemah@gmail.com',
            'pin'=>'1111',
            'user_id'=>1

        ]);
    }
}
