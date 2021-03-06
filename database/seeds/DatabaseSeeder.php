<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $dbConnectionOne = 'laravelconverterdb_one';
    public $dbConnectionTwo = 'laravelconverterdb_two';

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->Phones()->save(factory(App\Phone::class)->make());
        });

        // factory(App\User_two::class, 10)->create()->each(function ($user) {
        //     $user->Phones()->save(factory(App\Phone_two::class)->make());
        // });
    }
}
