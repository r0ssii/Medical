<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Visit;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        $role_patient = Role::where('name', 'patient')->first();
        $role_doctor = Role::where('name', 'doctor')->first();
        $doctors = $role_doctor->users;

        foreach($role_patient->users as $user)
        {

            $doctor = $doctors[rand(0, count($doctors) -1)];

            $visit = new Visit();

            $visit->notes = $faker->sentence();
            $visit->duration = $faker->numberBetween($min = 5, $max = 180);
            $visit->cost = $faker->numberBetween($min = 10, $max = 100);
            $visit->date = $faker->date($format="Y-m-d", $startDate = 'today');
            $visit->time = $faker->time();
            $visit->patient_id = $user->patient->id;
            $visit->doctor_id = $doctor->doctor->id;

            $visit->save();
        }
    }
}
