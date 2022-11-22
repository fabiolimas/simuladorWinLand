<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' =>'Admnistrador',
            'email'=> 'adm@gmail.com' ,
            'name'	=> 'Admistrador',
            'password'=>  bcrypt('123456'),
            'status'=>1,
            'nivel'=>'adm',
            ]);
}
}
