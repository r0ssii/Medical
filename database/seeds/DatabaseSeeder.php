<?php
# @Date:   2019-12-05T09:28:32+00:00
# @Last modified time: 2019-12-11T14:13:34+00:00




use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      /**This Calls all the seeders*/
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(VisitsTableSeeder::class);
    }
}
