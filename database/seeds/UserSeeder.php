<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
//        admin
        $adminPass = bcrypt('admin123');

        $params = [ 'name' => 'admin',
                    'nrp' => '1',
                    'jurusan' => 'ITS',
                    'no_telp' => '56765',
                    'email' => 'admin@mail.com',
                    'alamat' => 'ITS',
                    'password' => $adminPass];

        User::create($params);

//        user
        $userPass = bcrypt('user123');

        $params = [ 'name' => 'user',
                    'nrp' => '5115100001',
                    'jurusan' => 'Teknik Informatika',
                    'alamat' => 'Keputih Perintis',
                    'no_telp' => '12321',
                    'email' => 'user@mail.com',
                    'password' => $userPass];

        User::create($params);
    }
}
