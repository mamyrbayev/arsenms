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
        App\User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@mail.kz',
            'password' => bcrypt('11223344'),
            'admin' => 1,
            'balance' => 0
        ]);
    }
}
