@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('menu_title', '予約一覧')

@section('content')

<body>
  <table>
    <tr>
      <th>プラン名</th>
      <th>ホテル名</th>
      <th>予約日</th>
      <th>人数</th>
      <th>チェックイン時間</th>
      <th>チェックアウト時間</th>
    </tr>
    <tr>
      <td>{{$reservation->plan->inn->name}}</td>
      <td>{{$reservation->plan->name}}</td>
      <td>{{$reservation->reservation_date}}</td>
      <td>{{$reservation->num_people}}</td>
      <td>{{$reservation->checkin_time}}</td>
      <td>{{$reservation->checkout_time}}</td>
    </tr>
  </table>
  <div><a href="/reservation/{{$reservation->id}}/edit">予約の変更</a></div>
  <div><a href="/reservation/{{$reservation->id}}/del">予約のキャンセル</a></div>
  <button type="button" onclick="history.back()">一覧に戻る</button>
  @endsection
</body>

</html>
