<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'family_name' => '山崎',
            'first_name' => '勇人',
            'postal' => '3570038',
            'address' => '埼玉県飯能市仲町5-15-1 ビブレ仲町 13F',
            'tel' => '042-896-2324',
            'email' => 'kr1124@users.gr.jp ',
            'birthday' => '1989-11-24',
            'password' => 'password1',
            'admin' => true,
        ];

        DB::table('members')->insert($param);


        $param = [
            'family_name' => '小柳',
            'first_name' => '宜昭',
            'postal' => '1830042',
            'address' => '東京都府中市武蔵台7-3-7',
            'tel' => '042-323-8679',
            'email' => 'koyanagi1984@anet.ne.jp',
            'birthday' => '1984-03-23',
            'password' => 'password2',
            'admin' => false,
        ];

        DB::table('members')->insert($param);
        $param = [
            'family_name' => '村山',
            'first_name' => '直美',
            'postal' => '6008194',
            'address' => '京都府京都市下京区栄町8-6-4 サンコーポラス栄町 503号室',
            'tel' => '075-074-9887',
            'email' => 'murayama.naomi@combzmail.jp',
            'birthday' => '1991-03-16',
            'password' => 'password3',
            'admin' => false,
        ];

        DB::table('members')->insert($param);
    }
}
