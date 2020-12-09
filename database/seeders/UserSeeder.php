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
            ['name' => 'hanan', 'email' => 'hasyrawi@gmail.com'],
            ['name' => 'salman', 'email' => 'salmankarsa@gmail.com']
        ]);

        $users->each(function ($user) {
            User::factory()->create([
                'name'  => $user['name'],
                'email' => $user['email'],
            ]);
        });
    }
}
