<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
            'id' => 2,
            'name' => "john admin",
            'email' => "bravo.john2222@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'isAdmin' => true
        ]);

    }
}
