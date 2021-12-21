<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '素泊まりプラン',
            'price' => 6000,
            'inn_id' => 1,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '朝食付きプラン',
            'price' => 7000,

            'inn_id' => 1,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '夕食付きプラン',
            'price' => 8000,

            'inn_id' => 1,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '2食付きプラン',
            'price' => 9000,

            'inn_id' => 1,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '素泊まりプラン',
            'price' => 8000,
            'inn_id' => 2,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => 'プレミアムプラン',
            'price' => 10000,
            'inn_id' => 2,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '朝食付きプラン',
            'price' => 9000,

            'inn_id' => 3,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '全部付きプラン',
            'price' => 12000,

            'inn_id' => 3,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '露天風呂付き',
            'price' => 32000,
            'inn_id' => 4,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '貸切露天風呂付き',
            'price' => 40000,

            'inn_id' => 4,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '部屋温泉給湯',
            'price' => 20000,

            'inn_id' => 4,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '普通プラン',
            'price' => 10000,
            'inn_id' => 5,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '個室食事処付きプラン',
            'price' => 18000,

            'inn_id' => 5,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '激安プラン',
            'price' => 4000,
            'inn_id' => 6,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '普通プラン',
            'price' => 8000,

            'inn_id' => 6,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '朝食付きプラン',
            'price' => 10000,

            'inn_id' => 6,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '激安プラン',
            'price' => 6000,

            'inn_id' => 7,
        ];
        DB::table('plans')->insert($param);

        $param = [
            'name' => '朝食付きプラン',
            'price' => 9000,

            'inn_id' => 7,
        ];
        DB::table('plans')->insert($param);

      $param = [
          'name' => '露天風呂プラン',
          'price' => 14000,

          'inn_id' => 8,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '温泉プラン',
          'price' => 10000,

          'inn_id' => 8,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '温泉・焼肉付きプラン',
          'price' => 20000,

          'inn_id' => 8,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '素泊まりプラン',
          'price' => 12000,
          'inn_id' => 9,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '朝食付きプラン',
          'price' => 14000,
          'inn_id' => 9,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '夕食付きプラン',
          'price' => 18000,
          'inn_id' => 9,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '素泊まりプラン',
          'price' => 10000,
          'inn_id' => 10,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '朝食付きプラン',
          'price' => 12000,
          'inn_id' => 10,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '2食付きプラン',
          'price' => 13000,
          'inn_id' => 10,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => 'シングル',
          'price' => 6000,
          'inn_id' => 11,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => 'ダブル',
          'price' => 9000,

          'inn_id' => 11,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '(部屋食)ステーキプラン',
          'price' => 22000,
          'inn_id' => 12,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '(部屋食)カニプラン',
          'price' => 28000,
          'inn_id' => 12,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '癒しプラン',
          'price' => 38000,

          'inn_id' => 13,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '最後の晩餐プラン',
          'price' => 56000,
          'inn_id' => 13,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => 'プレミアムプラン',
          'price' => 15000,

          'inn_id' => 14,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => 'ミレニアルプラン',
          'price' => 18000,

          'inn_id' => 14,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '素泊まりプラン',
          'price' => 8000,
          'inn_id' => 15,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '2食付きプラン',
          'price' => 11000,
          'inn_id' => 15,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '限定感謝プラン(朝食付き)',
          'price' => 8000,
          'inn_id' => 15,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '女性限定プラン',
          'price' => 6000,
          'inn_id' => 16,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '朝食付きプラン',
          'price' => 7000,
          'inn_id' => 16,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '夕食付きプラン',
          'price' => 8000,
          'inn_id' => 16,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '和室プラン',
          'price' => 10000,
          'inn_id' => 17,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '洋室プラン',
          'price' => 12000,

          'inn_id' => 17,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '特別室の家族風呂',
          'price' => 28000,

          'inn_id' => 18,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '露天風呂プラン',
          'price' => 16000,
          'inn_id' => 18,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '普通プラン',
          'price' => 10000,

          'inn_id' => 18,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '素泊まりプラン',
          'price' => 16000,
          'inn_id' => 19,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '(朝食)和食御膳',
          'price' => 25000,

          'inn_id' => 19,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '(夕食)雪国ガストロノミーフルコース',
          'price' => 28000,

          'inn_id' => 19,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '(2食)パッケージプラン',
          'price' => 36000,
          'inn_id' => 19,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '素泊まりプラン',
          'price' => 6000,
          'inn_id' => 20,
      ];
      DB::table('plans')->insert($param);

      $param = [
          'name' => '焼肉食べ放題プラン',
          'price' => 9900,
          'inn_id' => 20,
      ];
      DB::table('plans')->insert($param);
    }
}
