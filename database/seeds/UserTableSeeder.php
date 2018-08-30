<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(){
                factory(\App\User::class, 30) -> create();

                DB::table('users')->insert([
                	[
                		'name' => 'Aksl',
                		'email' => 'admin@admin.fr',
                		'password' => Hash::make('admin'),
                	]
                ]);
        }
}
