<head><style>
address {
  display: flex;
  flex-wrap: wrap;
  margin-left: 30%;
}
div {
}
.pagenation {
	background-color:	black;
}

.sample10 {
	width:			auto;
	height:			300px;
	overflow:		hidden;
	position:		relative;
	margin:			20px 8px 0px 0px;
}
.sample10 .caption {
	font-size:		130%;
	color:			#fff;
	padding-top:		10px;
	text-align: 		center;
}
.sample10 .mask {
	width:			100%;
	height:			50px;
	position:		absolute;
	top:			-100px;	/* 枠の上に置いて表示しない */
	left:			0;
	background-color:	rgba(0,0,0,0.4);
	-webkit-transition:	all 0.4s ease;
	transition:		all 0.4s ease;
}
.sample10:hover .mask {
	top:		0px;	/* 下に降りてくるように見せる */
}
.sample10 img {
	-webkit-transition:	all 0.4s ease;
	transition:		all 0.4s ease;
	-webkit-transform:	scale(1.2);	/* 1.2倍の大きさで表示 */
	transform:		scale(1.2);
}
.sample10:hover img {
	margin-top:		50px;			/* 画像の絵を下にずらす */
	-webkit-transform:	scale(1);	/* 元の大きさに戻す */
	transform:		scale(1);
}
</style></head>
<body>

@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('menu_title', '「'.$form->area.' '.$form->name.'」の検索結果')

@section('content')

@foreach($items as $item)

<hr>

<address>
    <div>
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

        <div>
            ☎ {{$item->tel}}<br>
            {{$item->address}}<br>
            <iframe src="http://maps.google.co.jp/maps?&output=embed&q={{$item->name}}" width="500px" height="300px"></iframe>
        </div>

        <div>
            <h3>プラン</h3>
            <ul>
                @foreach($item->plans as $plan)
                <li>{{$plan->name}}　{{$plan->price}}円</li>
                @endforeach
            </ul>
        </div>
</address>
@endforeach
{{$items->links()}}
@endsection
</body>
