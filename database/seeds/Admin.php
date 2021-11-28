<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use App\User;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("12345");
        $user->save();
    }
}
