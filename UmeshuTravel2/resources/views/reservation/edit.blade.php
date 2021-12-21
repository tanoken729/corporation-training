@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.edit')

@section('menu_title', '予約の変更')

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

  .errmsg {
    color: red;
  }
</style>

<body>

  <form action="/reservation/edit_confirm?id={{$reservation->id}}" method="post">
    <table>
      @csrf
      <input type="hidden" name="id" value="{{$reservation->id}}">
      <tr>
        <th>予約ホテル名 : </th>
        <td>{{$reservation->plan->inn->name}}</td>
      </tr>
      <tr>
        <th>予約プラン名: </th>
        <td>{{$reservation->plan->name}}</td>
      </tr>
      @error('reservation_date')
      <th>エラー : </th>
      <td class="errmsg">{{$message}}</td>
      @enderror
      <tr>
        <th>予約日 : </th>
        <td><input type="text" name="reservation_date" value=" {{$reservation->reservation_date}}" required></td>
      </tr>
      @error('num_people')
      <th>エラー : </th>
      <td class="errmsg">{{$message}}</td>
      @enderror
      <tr>
        <th>人数 : </th>
        <td><input type="number" name="num_people" value="{{$reservation->num_people}}" required></td>
      </tr>
      @error('checkin_time')
      <th>エラー : </th>
      <td class="errmsg">{{$message}}</td>
      @enderror
      <tr>
        <th>チェックイン時間 : </th>
        <td><input type="text" name="checkin_time" value="{{$reservation->checkin_time}}" required></td>
      </tr>
      @error('checkout_time')
      <th>エラー : </th>
      <td class="errmsg">{{$message}}</td>
      @enderror
      <tr>
        <th>チェックアウト時間 : </th>
        <td><input type="text" name="checkout_time" value="{{$reservation->checkout_time}}" required></td>
      </tr>
      <tr>
        <th>
        <td><input type="submit" value="確認画面へ"> <button type="button" onclick="history.back()">戻る</button></td>

        </th>
      </tr>
    </table>



  </form>
  @endsection
</body>

</html>
