<?php
# @Date:   2019-12-03T14:37:21+00:00
# @Last modified time: 2019-12-11T13:53:56+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_doctor = Role::where('name', 'doctor')->first();
        $role_patient = Role::where('name', 'patient')->first();

        $admin = new User ();
        $admin->first_name = 'Garry';
        $admin->last_name = 'Long';
        $admin->email = 'testadmin@medical.ie';
        $admin->mobile_number = $this->random_phone();
        $admin->address = '45 Granville Road, Looper, Dublin';
        $admin->password = bcrypt('test');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User ();
        $user->first_name = 'Adam';
        $user->last_name = 'Martin';
        $user->email = 'testdoctor@medical.ie';
        $user->mobile_number = $this->random_phone();
        $user->address = '20 Fake Street, Killkeny, Dublin';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_doctor);

        $user = new User ();
        $user->first_name = 'Rory';
        $user->last_name = 'O';
        $user->email = 'testpatient@medical.ie';
        $user->mobile_number = $this->random_phone();
        $user->address = '123 brury Road, Maze, Cork';
        $user->password = bcrypt('sample');
        $user->save();
        $user->roles()->attach($role_patient);

        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->roles()->attach(Role::where('name', 'doctor')->first());
        });

        factory(App\User::class, 20)->create()->each(function ($user) {
            $user->roles()->attach(Role::where('name', 'patient')->first());
        });

    }

    private function random_phone() {
        return '0' .
            $this->random_str(2, '0123456789'). '-' .
            $this->random_str(7, '0123456789');
    }
    /**
     * Generates a random number
     * @param int $length
     * @param string $keyspace
     */
    private function random_str($length, $keyspace) {
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for($i = 0; $i < $length; ++$i) {
            $pieces[] = $keyspace[random_int(0, $max)];
        };
        return implode('', $pieces);
    }
}
