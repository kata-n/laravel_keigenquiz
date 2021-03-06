<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
          $user1 = [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('administrator'),
            'created_at' => Carbon::now(),
            'updated_at' =>  Carbon::now(),
          ],
          $user2 = [
            'name' => 'kata',
            'email' => 'kata.kawa813@gmail.com',
            'password' => bcrypt('kata123'),
            'created_at' => Carbon::now(),
            'updated_at' =>  Carbon::now(),
          ]
        ];
        foreach ($users as $user) {
        DB::table('users')->insert($user);
        }
    }
}
