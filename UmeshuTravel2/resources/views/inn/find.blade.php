<head>
    <style>
        .sample10 {
            width: auto;
            height: 300px;
            overflow: hidden;
            position: relative;
            margin: 20px 8px 0px 0px;
        }

        .sample10 .caption {
            font-size: 130%;
            color: #fff;
            padding-top: 10px;
            text-align: center;
        }

        .sample10 .mask {
            width: 100%;
            height: 50px;
            position: absolute;
            top: -100px;
            /* 枠の上に置いて表示しない */
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .sample10:hover .mask {
            top: 0px;
            /* 下に降りてくるように見せる */
        }

        .sample10 img {
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            -webkit-transform: scale(1.2);
            /* 1.2倍の大きさで表示 */
            transform: scale(1.2);
        }

        .sample10:hover img {
            margin-top: 50px;
            /* 画像の絵を下にずらす */
            -webkit-transform: scale(1);
            /* 元の大きさに戻す */
            transform: scale(1);
        }
        #container {
            display: grid; /* グリッドレイアウト */
            grid-template-rows: 400px;
            grid-template-columns: 1fr 1fr 1fr;
            margin-left: 20px;
        }
        #itemA {
            grid-row: 1 ;
            grid-column: 1 / 2;
            margin-left: auto;
            margin-right: 40px;
            width: 400px;
            height: 300px;
        }
        #itemB {
            grid-row: 1 ;
            grid-column: 2 / 3;
            justify-content: center; /* 全体中央寄せ */
        }
        #itemC {
            grid-row: 1 ;
            grid-column: 3 / 4 ;
            margin-left: 10px;
            margin-right: auto;
        }
    </style>
</head>

<body>

    @extends('layouts.UmeshuTravel')

    @section('title', 'Reservation.index')

    @section('menu_title', '「'.$form->area.' '.$form->name.'」の検索結果')

    @section('content')
    @if(!$exist)
    <h2>該当する宿情報がありません</h2>
    @else
    @foreach($items as $item)
    <hr>
    <div id="container">
        <div id="itemA">
            <h3>{{$item->name}}</h3>
            <div class="sample10">
                <a href="show?id={{$item->id}}">
                    <img src="{{$item->img}}" alt="写真" width="auto" height="300px">
                    <div class="mask">
                        <div class="caption">
                            宿を予約する
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div id="itemB">
            ☎ {{$item->tel}}<br>
            {{$item->address}}<br>
            <iframe src="http://maps.google.co.jp/maps?&output=embed&q={{$item->name}}" width="500px" height="300px"></iframe>
        </div>

        <div id="itemC">
            <h3>プラン</h3>
            <ul>
                @foreach($item->plans as $plan)
                <li>{{$plan->name}}　{{$plan->price}}円</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
    {{$items->links()}}
    @endif
    @endsection
</body>
