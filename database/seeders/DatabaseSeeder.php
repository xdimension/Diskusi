<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@site.com')->first();

        if (is_null($user)) {
            User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@site.com',
                'password' => bcrypt('admin123'),
            ]);
        }

        $this->call(UserSeeder::class);
        $this->call(ThreadSeeder::class);
        $this->call(PostSeeder::class);
    }
}
