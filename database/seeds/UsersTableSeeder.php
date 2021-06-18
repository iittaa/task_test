<?php

use Illuminate\Database\Seeder;

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
                // 'name' => Str::random(10),
                'name' => "TestUser01",
                // 'email' => Str::random(10).'@gmail.com',
                'email' => "testuser01@example.com",
                'password' => Hash::make('password')
            ],[
                'name' => "TestUser02",
                'email' => "testuser02@example.com",
                'password' => Hash::make('password')
            ],[
                'name' => "TestUser03",
                'email' => "testuser03@example.com",
                'password' => Hash::make('password')
            ]
        ]);
    }
}
