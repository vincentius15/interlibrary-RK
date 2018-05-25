<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rolesName = ['user','pustakawan','admin'];
        foreach($rolesName as $name)
        {
          $role = new Role();
          $role->name = $name;
          $role->save();
        }
    }
}
