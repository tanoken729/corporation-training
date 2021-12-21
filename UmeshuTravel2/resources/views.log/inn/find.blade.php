<head><style>
address {
  display: flex;
  flex-wrap: wrap;
  margin-left: 30%;
}
div.imagebox {
width:14em; height:14em;
margin:5px; padding:10px; border:0px solid black;
background-color:lightgray;
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
        <div class="imagebox" >画像　<a href="show?id={{$item->id}}">宿の詳細</a></div>
    </div>

<div><br>
    ☎{{$item->tel}}<br>
    {{$item->address}}<br>
    <iframe src="http://maps.google.co.jp/maps?&output=embed&q={{$item->name}}" width="300px" height="200px"></iframe>
</div>

<div>
    <ul>
        @foreach($item->plans as $plan)
        <li>{{$plan->name}}</li>
        @endforeach
    </ul>
</div>
</address>
@endforeach
@endsection
</body>
