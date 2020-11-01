<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'John Smith',
            'email'    => 'john_smith@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  3442310,
        ]);
    }
}