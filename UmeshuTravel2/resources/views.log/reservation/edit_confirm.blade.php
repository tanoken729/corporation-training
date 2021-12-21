@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.edit_confirm')

@section('menu_title', '変更の確認')

@section('content')
<style>
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

<body>
  @if (count($errors) > 0)
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <table>
    @csrf
    <input type="hidden" name="id" value="{{$reservation->id}}">
    <tr>
      <th>予約ホテル名: </th>
      <td>{{$reservation->plan->inn->name}}</td>
    </tr>
    <tr>
      <th>予約プラン名: </th>
      <td>{{$reservation->plan->name}}</td>
    </tr>
    <tr>
      <th>予約日: </th>
      <td>{{$param['reservation_date']}}</td>
    </tr>
    <tr>
      <th>人数: </th>
      <td>{{$param['num_people']}}</td>
    </tr>
    <tr>
      <th>チェックイン時間: </th>
      <td>{{$param['checkin_time']}}</td>

    </tr>
    <tr>
      <th>チェックアウト時間: </th>
      <td>{{$param['checkout_time']}}</td>

    </tr>

  </table>
  <form action="/reservation/edit_complete?id={{$reservation->id}}" method="post">
    @csrf
    <input type="hidden" name="reservation_date" value="{{$param['reservation_date']}}">
    <input type="hidden" name="num_people" value="{{$param['num_people']}}">
    <input type="hidden" name="checkin_time" value="{{$param['checkin_time']}}">
    <input type="hidden" name="checkout_time" value="{{$param['checkout_time']}}">
    <tr>
      <th></th>
      <td><input type="submit" value="変更確定"></td>
    </tr>
    <button type="button" onclick="history.back()">戻る</button>
  </form>
  @endsection
</body>

</html>
