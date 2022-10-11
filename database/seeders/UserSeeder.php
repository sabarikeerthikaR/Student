<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
           $users= [
            ['name' => 'Admin s', 'email' => 'admins@gmail.com', 'password' => bcrypt('1234')],
              ['name' => 'Admin k', 'email' => 'admink@gmail.com', 'password' => bcrypt('1234')],
        ];
            foreach($users as $user){
           \App\Models\User::create($user);
             }
    }
}
