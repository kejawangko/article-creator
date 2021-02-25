<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'REPORTER',
            'name' => 'reporter',
            'username' => 'reporter',
            'email' => 'reporter@articlecreator.id',
            'password' => Hash::make('reporter')
        ]);

        User::create([
            'role' => 'EDITOR',
            'name' => 'Editor',
            'username' => 'editor',
            'email' => 'editor@articlecreator.id',
            'password' => Hash::make('editor')
        ]);
    }
}
