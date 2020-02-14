<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DifficultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $difficultes = [
          $difficult1 = [
            'name' => 'ふつう',
            'created_at' => Carbon::now(),
            'updated_at' =>  Carbon::now(),
          ],
          $difficult2 = [
            'name' => 'チャレンジ',
            'created_at' => Carbon::now(),
            'updated_at' =>  Carbon::now(),
          ]
        ];
        foreach ($difficultes as $difficult) {
        DB::table('difficult')->insert($difficult);
        }
    }
}
