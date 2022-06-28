<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Company;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'    => $this->faker->name(),
            'address'    => $this->faker->address(),
            'website' => $this->faker->domainName(),
            'email'      => $this->faker->unique()->safeEmail(),

        ];
    }

    
}
