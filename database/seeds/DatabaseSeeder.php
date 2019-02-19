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
        // $this->call(UsersTableSeeder::class);


        DB::table('users')->insert([
            'username' => 'nenadn',
            'mathPoints' => 35,
            'progPoints' => 10,
            'email' => 'nenad@gmail.com',
            'password' => bcrypt('1234qwer'),
            'created_at' => '2019-02-19 15:41:46',
            'updated_at' => '2019-02-19 15:41:46'
        ]);

        DB::table('users')->insert([
            'username' => 'juliaC',
            'mathPoints' => 5,
            'progPoints' => 2,
            'email' => 'julia@gmail.com',
            'password' => bcrypt('1234qwer'),
            'created_at' => '2019-02-19 16:32:46',
            'updated_at' => '2019-02-19 16:32:46'
        ]);

        DB::table('users')->insert([
            'username' => 'bobP',
            'mathPoints' => 63,
            'progPoints' => 4,
            'email' => 'bob@gmail.com',
            'password' => bcrypt('1234qwer'),
            'created_at' => '2019-02-19 15:26:46',
            'updated_at' => '2019-02-19 15:26:46'
        ]);


    }
}