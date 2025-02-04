<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;
use App\Models\User;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $adminUsers = User::where('role', 'admin')->get();

        for ($i = 0; $i < 50; $i++) {
            Employees::create([
                'nama' => $faker->name,
                'nip' => $faker->unique()->numerify('NIP#####'),
                'position' => $faker->word,
                'department' => $faker->word,
                'salary' => $faker->numberBetween(3000000, 10000000),
                'join_date' => $faker->date(),
                'created_by' => $adminUsers->random()->id,
            ]);
        }
    }
}
