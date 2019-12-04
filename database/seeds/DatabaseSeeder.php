<?php
# @Date:   2019-12-03T14:07:04+00:00
# @Last modified time: 2019-12-03T14:43:04+00:00




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
         $this->call(RolesTableseeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
