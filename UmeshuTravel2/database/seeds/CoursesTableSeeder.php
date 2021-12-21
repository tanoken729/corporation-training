<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'phpプログラミング',
            'price' => 36000,

        ];
        DB::table('courses')->insert($param);

        $param = [
            'title' => 'jsプログラミング',
            'price' => 20000,

        ];
        DB::table('courses')->insert($param);

        $param = [
            'title' => 'phpプロフェッショナル',
            'price' => 45000,

        ];
        DB::table('courses')->insert($param);

        $param = [
            'title' => 'jsプロフェッショナル',
            'price' => 30000,

        ];
        DB::table('courses')->insert($param);
    }
}
