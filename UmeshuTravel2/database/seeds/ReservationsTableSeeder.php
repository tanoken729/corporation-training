<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_date' => '2020-05-21',
            'num_people' => 4,
            'member_id' => 2,
            'inn_id' => 1,
            'plan_id' => 1,
            'checkin_time' => '2020-05-21 17:00',
            'checkout_time' => '2020-05-23 10:00',
        ];

        DB::table('reservations')->insert($param);

        $param = [
            'reservation_date' => '2020-06-28',
            'num_people' => 2,
            'member_id' => 2,
            'inn_id' => 2,
            'plan_id' => 2,
            'checkin_time' => '2020-06-28 18:00',
            'checkout_time' => '2020-06-30 09:00',

        ];

        DB::table('reservations')->insert($param);

        $param = [
            'reservation_date' => '2020-05-25',
            'num_people' => 1,
            'member_id' => 3,
            'inn_id' => 3,
            'plan_id' => 3,
            'checkin_time' => '2020-05-25 20:00',
            'checkout_time' => '2020-05-26 08:00',

        ];

        DB::table('reservations')->insert($param);
    }
}
