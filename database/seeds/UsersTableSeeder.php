<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate a user/author
        [
            'name' => "Laurens Post",
            'email' => "support@lpwebdesign.nl",
            'password' => bcrypt('124123')
        ]);
    }
}
