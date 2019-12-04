<?php
# @Date:   2019-12-03T14:37:50+00:00
# @Last modified time: 2019-12-03T14:58:32+00:00




use Illuminate\Database\Seeder;
use App\Role;


class RolesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = new Role();
      $role_admin->name = 'admin';
      $role_admin->discription = 'An administrator user';
      $role_admin->save();

      $role_user = new Role();
      $role_user->name = 'user';
      $role_user->discription = 'An ordinary user';
      $role_user->save();
    }
}
