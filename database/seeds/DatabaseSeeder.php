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
        $user = \App\User::firstOrCreate([
            'email' => 'jane@example.com',
            'name' => 'Jane Doe',
            'password' => Hash::make('secret'),
        ]);

        $event = \App\Event::firstOrCreate([
            'name' => 'sample event',
            'user_id' => $user->id,
        ]);

        $event->attendees()->attach($user);
    }
}
