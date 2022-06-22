<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([

           'name' => 'Nicholas',
           'email' => 'test@petty.com',
           'role' =>'admin',
           'password' =>Soccerstar001,
       ]);



    }
}
