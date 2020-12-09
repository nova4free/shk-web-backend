<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use SessionUpdateTimestampHandlerInterface;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            ['name' => 'hanan', 'email' => 'hasyrawi@gmail.com', 'role' => 'admin'],
            ['name' => 'salman', 'email' => 'salmankarsa@gmail.com', 'role' => 'admin']
        ]);

        $users->each(function ($user) {
            User::factory()->create([
                'name'  => $user['name'],
                'email' => $user['email'],
                'role'  => $user['role'],
            ]);
        });
    }
}
