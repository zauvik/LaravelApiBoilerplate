<?php

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
        // $this->call(UserSeeder::class);
        // factory(App\User::class,1)->create();
        // factory(App\Admin::class,1)->create();
    

        //sample user
        App\Admin::insert([
            'name' => 'admin NGC',
            'email' => 'admin@ngc.com',
            'password' => bcrypt('secret')
            ]);

        App\User::insert([
            'name' => 'user NGC',
            'email' => 'user@ngc.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => Str::random(10),
            ]);
    }
}
