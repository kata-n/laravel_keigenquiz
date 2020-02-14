<?php

use Illuminate\Database\Seeder;

class TruefalseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $truefalses = [
          $truefalse1 = [
            'difficult_id' => '1',
            'user_id' => '1',
            'title' => '食料品を持ち帰ったときの税率はいくつ？',
            'circle' => '8％',
            'uncircle' => '10％',
            'commentary' => '食料品を持ち帰った場合の税率は、軽減税率８％が適用されます',
          ],
          $truefalse2 = [
            'difficult_id' => '2',
            'user_id' => '1',
            'title' => 'ÜberEatsを頼んだ場合の税率はいくつ？',
            'circle' => '8％',
            'uncircle' => '10％',
            'commentary' => 'ÜberEatsなど、出前をとった場合は軽減税率８％が適用されます！',
          ]
        ];
        foreach ($truefalses as $truefalse) {
        DB::table('truefalse')->insert($truefalse);
    }
  }
}
