<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleUser = Role::where('name','user')->first();
        $rolePustakawan = Role::where('name','pustakawan')->first();
        $roleAdmin = Role::where('name','admin')->first();

        $user = new User();
        $user->nrp = '1';
        $user->name = 'admin';
        $user->jurusan = 'ITS';
        $user->no_telp = '111111111111';
        $user->alamat = 'ITS';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('admin123');
        $user->save();
        $user->roles()->attach($roleAdmin);


        $user = new User();
        $user->nrp = '5115100058';
        $user->name = 'Yustian';
        $user->jurusan = 'Informatika';
        $user->no_telp = '0258779965428';
        $user->alamat = 'ITS';
        $user->email = 'yustian15@mhs.if.its.ac.id';
        $user->password = bcrypt('yustian15');
        $user->save();
        $user->roles()->attach($roleUser);

        $user = new User();
        $user->nrp = '5115100063';
        $user->name = 'Yuuta';
        $user->jurusan = 'Informatika';
        $user->no_telp = '0258779965428';
        $user->alamat = 'ITS';
        $user->email = 'yuuta15@mhs.if.its.ac.id';
        $user->password = bcrypt('yuuta15');
        $user->save();
        $user->roles()->attach($rolePustakawan);

        $user = new User();
        $user->nrp = '5115100061';
        $user->name = 'Brian';
        $user->jurusan = 'Informatika';
        $user->no_telp = '0258779965428';
        $user->alamat = 'ITS';
        $user->email = 'brian15@mhs.if.its.ac.id';
        $user->password = bcrypt('brian15');
        $user->save();
        $user->roles()->attach($roleAdmin);


        $user = new User();
        $user->nrp = '5115100159';
        $user->name = 'Vincent';
        $user->jurusan = 'Informatika';
        $user->no_telp = '0258779965428';
        $user->alamat = 'ITS';
        $user->email = 'vincent15@mhs.if.its.ac.id';
        $user->password = bcrypt('vincent15');
        $user->save();
        $user->roles()->attach($roleUser);

        // $user = new User();
        // $user->nrp = '5115100086';
        // $user->name = 'Vincent';
        // $user->jurusan = 'Informatika';
        // $user->no_telp = '0258779965428';
        // $user->alamat = 'ITS';
        // $user->email = 'admin@mail.com';
        // $user->password = bcrypt('admin123');
        // $user->save();
        // $user->roles()->attach($roleUser);

        $user = new User();
        $user->nrp = '5115100079';
        $user->name = 'pustakawan';
        $user->jurusan = 'Informatika';
        $user->no_telp = '0258779965428';
        $user->alamat = 'ITS';
        $user->email = 'pustakawan@mail.com';
        $user->password = bcrypt('pustakawan123');
        $user->save();
        $user->roles()->attach($roleUser);

        // $user = new User();
        // $user->nrp = '5115100074';
        // $user->name = 'user';
        // $user->jurusan = 'Informatika';
        // $user->no_telp = '0258779965428';
        // $user->alamat = 'ITS';
        // $user->email = 'user@mail.com';
        // $user->password = bcrypt('user123');
        // $user->save();
        // $user->roles()->attach($roleUser);
    }
}
