<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
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
        User::query()->updateOrInsert([
            'name' => 'admim',
            'email' => 'admim@atelie.com.br',
            'email_verified_at' => new DateTime(),
            'password' => Hash::make('admim123'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
