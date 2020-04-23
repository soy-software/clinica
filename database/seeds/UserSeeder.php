<?php

use App\User;
use Illuminate\Database\Seeder;
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
        
        User::updateOrCreate(
            [
                'name' => 'Freddy',
                'email' => 'freddy.lema5@utc.edu.ec',
                'password' => Hash::make('12345678'),
            ]
        );

    }
}
