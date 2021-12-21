<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'センチュリオンホテル札幌',
            'postal' => '0640806',
            'address' => '北海道札幌市中央区南６条西３丁目１－１１',
            'tel' => '0115126611',
            'code' =>  2,
            'img' => 'https://cdn.jalan.jp/jalan/images/pict3L/Y1/Y389721/Y389721208.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'ザ　レイクビューTOYA　乃の風リゾート',
            'postal' => '0495721',
            'address' => '北海道虻田郡洞爺湖町洞爺湖温泉29-1',
            'tel' => '0570026571',
            'code' =>  2,
            'img' => 'https://q-cf.bstatic.com/images/hotel/max1024x768/243/243877834.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'スパリゾートハワイアンズ ホテルハワイアンズ',
            'postal' => '9728326',
            'address' => '福島県いわき市常磐藤原町蕨平５０',
            'tel' => '0570550550',
            'code' =>  2,
            'img' => 'http://sp.club-off.com/contents/files/rcm/1533/img/img_header.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '軽井沢プリンスホテルイースト',
            'postal' => '3890193',
            'address' => '長野県軽井沢町軽井沢1016-75',
            'tel' => '0267421111',
            'code' =>  2,
            'img' => 'https://cdn.jalan.jp/jalan/images/pict3L/Y7/Y304427/Y304427405.jpg',
        ];
        DB::table('inns')->insert($param);
        $param = [
            'name' => '民宿　崎野屋',
            'postal' => '9880241',
            'address' => '宮城県気仙沼市波路上岩井崎２９',
            'tel' => '0115126611',
            'code' =>  5,
            'img' => 'https://cdn.jalan.jp/jalan/images/pict2L/Y7/Y329817/Y329817066.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '白玉の湯　華鳳',
            'postal' => '9592338',
            'address' => '新潟県新発田市月岡温泉134',
            'tel' => '0570026571',
            'code' =>  4,
            'img' => 'https://iwiz-dhotel-travel.c.yimg.jp/im_sigg6zWAHQHGZWhUyvMhjLNwIA---x600-y450-bdx600-bdy450-bdcFFFFFF-bd1-prib-exp15d/p/dhotel-travel/Q5tpQGBxwzCxkcfS172ugAdnl1HWBm.p1GbDX1Jcln15TqlDkScWEDPIT4h7NbNd8KQi5XD4KroxM95fbCGweKrmamL9TzfhDhqJgQ4DSb7qRXs701J7IK2wwybN1tmjgk9ZVqn9aA--',
        ];
        DB::table('inns')->insert($param);





        $param = [
            'name' => 'ホテルエピナール那須',
            'postal' => '3250302',
            'address' => '栃木県 那須郡那須町大字高久丙1番地',
            'tel' => '0287-78-6000',
            'code' =>  4,
            'img' => 'https://www.tochigiji.or.jp/image.php?w=600&h=400&f=/db_img/cl_img/2859/E6A16D403BFF0677E56424838472F7DB.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'ホテルニューアワジ',
            'postal' => '3890193',
            'address' => '兵庫県洲本市小路谷２０',
            'tel' => '0799232200',
            'code' =>  2,
            'img' => 'https://cdn.jalan.jp/jalan/images/pict2L/Y1/Y322711/Y322711991.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'アパホテル＆リゾート＜西新宿五丁目駅タワー＞',
            'postal' => '1510071',
            'address' => '東京都渋谷区本町３丁目１４－１',
            'tel' => '0570027011',
            'code' =>  3,
            'img' => 'https://cdn.jalan.jp/jalan/images/pict2L/Y1/Y322711/Y322711991.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'ホテル アンテルーム 那覇',
            'postal' => '9000016',
            'address' => '沖縄県那覇市前島3-27-11',
            'tel' => '0988605151',
            'code' =>  1,
            'img' => 'https://cdn.jalan.jp/jalan/images/pict2L/Y6/Y326306/Y326306003.jpg',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '東急ステイ福岡天神',
            'postal' => '8100003',
            'address' => '福岡県福岡市中央区春吉3-21-24',
            'tel' => '0927620109',
            'code' =>  2,
            'img' => 'https://trvimg.r10s.jp/share/image_up/168796/origin/83c8012b23e357a5d31f0d0c11efc0ad984718f6.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'ホテルサンルート徳島',
            'postal' => '7700834',
            'address' => '徳島県徳島市元町1-5-1',
            'tel' => '0886538111',
            'code' =>  2,
            'img' => 'https://trvimg.r10s.jp/share/image_up/79371/origin/e087c8d0f081721801cf0ef48cf2e023516c7349.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '東広島グリーンホテルモーリス',
            'postal' => '7390014',
            'address' => '広島県東広島市西条昭和町11-8',
            'tel' => '0824937070',
            'code' =>  2,
            'img' => 'https://trvimg.r10s.jp/share/image_up/43917/origin/ff1d83a13924848c81345b1fde039e2995ebf348.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'ダイワロイネットホテル堺東',
            'postal' => '5900079',
            'address' => '大阪府堺市堺区新町5-13',
            'tel' => '0722249055',
            'code' =>  2,
            'img' => 'https://trvimg.r10s.jp/share/image_up/111247/origin/69f6ec83b196ddeb672fab9b991ddd53f4f8adde.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'アーバンホテル京都二条プレミアム',
            'postal' => '6048411',
            'address' => '京都府京都市中京区聚楽廻南町25-5',
            'tel' => '0758131177',
            'code' =>  1,
            'img' => 'https://trvimg.r10s.jp/share/image_up/147961/origin/65b7ccaf3b06f551a3bc78c5f09489c94433f3e1.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '名古屋マリオットアソシアホテル',
            'postal' => '4506002',
            'address' => '愛知県名古屋市中村区名駅1-1-4',
            'tel' => '0525841111',
            'code' =>  1,
            'img' => 'https://trvimg.r10s.jp/share/image_up/12543/origin/4c72aab0a1617a8db81f7440a73bf5f2c343d743.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '変なホテル東京 羽田',
            'postal' => '1440033',
            'address' => '東京都大田区東糀谷2-11-18',
            'tel' => '05058943783',
            'code' =>  3,
            'img' => 'https://trvimg.r10s.jp/share/image_up/165755/origin/0521e884044b2182a37ba16548caba9305a7d8ee.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => 'ホテルルートイン敦賀駅前',
            'postal' => '9140055',
            'address' => '福井県敦賀市鉄輪町1-6-2',
            'tel' => '05055768005',
            'code' =>  3,
            'img' => 'https://trvimg.r10s.jp/share/image_up/12543/origin/4c72aab0a1617a8db81f7440a73bf5f2c343d743.47.1.26.2.jpg?fit=inside%7C600:540',
        ];
        DB::table('inns')->insert($param);

        $param = [
            'name' => '東京ディズニーランドホテル',
            'postal' => '2798505',
            'address' => '千葉県浦安市舞浜29-1',
            'tel' => '0473053333',
            'code' =>  2,
            'img' => 'https://img.travel.rakuten.co.jp/share/image_up/74732/LARGE/7VfJtq.jpeg',
        ];
        DB::table('inns')->insert($param);



        $param = [
            'name' => '強羅温泉 メルヴェール箱根強羅',
            'postal' => '2500408',
            'address' => '神奈川県足柄下郡箱根町強羅1300-70',
            'tel' => '0570783144',
            'code' =>  4,
            'img' => 'https://img.travel.rakuten.co.jp/share/image_up/5066/LARGE/ab7283f0431c7de162ad2c13cb31a049a0583785.47.1.26.2.jpg',
        ];
        DB::table('inns')->insert($param);
    }
}
