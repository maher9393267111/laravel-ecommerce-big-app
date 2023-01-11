<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

DB::table('users')->insert([
[

    'name'=>'admin',
    'username'=>'admin',
    'email' => 'admin@example.com',
    'password'=>Hash::make('111'),
    'status'=>'active',
    'role'=>'admin',



],
[

    'name'=>'maher vendor',
    'username'=>'vendor',
    'email' => 'vendor@example.com',
    'password'=>Hash::make('111'),
    'status'=>'active',
    'role'=>'vendor',



],[

    'name'=>'user',
    'username'=>'user',
    'email' => 'user@example.com',
    'password'=>Hash::make('111'),
    'status'=>'active',
    'role'=>'user',



]



]);


    }}



