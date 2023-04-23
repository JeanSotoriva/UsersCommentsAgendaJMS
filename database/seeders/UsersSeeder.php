<?php

namespace Database\Seeders;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\ArrowFunction;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jean Sotoriva',
            'email' => 'jeansotoriva@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
