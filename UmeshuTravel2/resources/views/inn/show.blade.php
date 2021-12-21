<head>
    <style>
        span {
            display: flex;
            flex-wrap: wrap;
            margin-left: 30%;
        }

        .btn-square {
            display: inline-block;
            padding: 0.5em 5em;
            text-decoration: none;
            background: #668ad8;/*ボタン色*/
            color: #FFF;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            height:50px;
            text-align:center;
            font-size: xx-large;

            }
  .tab_wrap{width:100%; margin:80px auto;}
  input[type="radio"]{display:none;}
  .tab_area{font-size:0; margin:0 10px;}
  .tab_area label{width:32.5%; margin:0 5px; display:inline-block; padding:12px 0; color:#999; background:#ddd; text-align:center; font-size:13px; cursor:pointer; transition:ease 0.5s opacity;}
  .tab_area label:hover{opacity:0.5;}
  .panel_area{background:none;}
  .tab_panel{width:100%; padding:80px 0; display:none;}
  .tab_panel p{font-size:14px; letter-spacing:1px; text-align:center;}

  #tab1:checked ~ .tab_area .tab1_label{background:gray; color:#000;}
  #tab1:checked ~ .panel_area #panel1{display:block;}
  #tab2:checked ~ .tab_area .tab2_label{background:gray; color:#000;}
  #tab2:checked ~ .panel_area #panel2{display:block;}
  #tab3:checked ~ .tab_area .tab3_label{background:gray; color:#000;}
  #tab3:checked ~ .panel_area #panel3{display:block;}

  table {
    width: 40%;
    border-collapse: collapse;
  }

  table tr {
    border-bottom: solid 2px white;
  }

  table tr:last-child {
    border-bottom: none;
  }

  table th {
    position: relative;
    text-align: left;
    width: 30%;
    background-color: #52c2d0;
    color: white;
    text-align: center;
    padding: 10px 0;
  }

  table th:after {
    display: block;
    content: "";
    width: 0px;
    height: 0px;
    position: absolute;
    top: calc(50% - 10px);
    right: -10px;
    border-left: 10px solid #52c2d0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
  }

  table td {
    text-align: left;
    width: 70%;
    text-align: center;
    background-color: #eee;
    padding: 10px 0;
  }
    </style>
</head>

@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('menu_title', $items->name)

@section('content')

<div class="tab_wrap">
<input id="tab1" type="radio" name="tab_btn" checked>
<input id="tab2" type="radio" name="tab_btn">
<input id="tab3" type="radio" name="tab_btn">
<div class="tab_area" style="white-space: nowrap;">
    <label class="tab1_label" for="tab1">外観</label>
    <label class="tab2_label" for="tab2">プラン</label>
    <label class="tab3_label" for="tab3">アクセス</label>
</div>

	<div class="panel_area">


    <div id="panel1" class="tab_panel" align="center">
    <h3>施設の写真</h3>
    <img src="{{$items->img}}" alt="写真" width="500px">
    </div>


    <div id="panel2" class="tab_panel" align="center">
        <table>
            @foreach($items->plans as $plan)
            <tr>
            <th>{{$plan->name}}</th><td>{{$plan->price}}円</td>
            </tr>
            @endforeach
    </table>
    </div>


    <div id="panel3" class="tab_panel" align="center">

    <h3>宿の情報</h3>
    ☎：{{$items->tel}}<br>
    {{$items->address}}<br>
    <h3>アクセス</h3>
    <iframe src="http://maps.google.co.jp/maps?&output=embed&q={{$items->name}}||{{$items->address}}" width="600px" height="350px"></iframe>
    </div>
    </div>
</div>

<a href="../reservation/add?id={{$items->id}}&user_id={{$user_id}}" class="btn-square">予約　　　　　　　　</a>{{--&user_id={{$user->id}}--}}


@endsection
