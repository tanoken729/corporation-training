@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('menu_title', '予約一覧')

@section('content')
@if(!$exist)
<h2>予約がありません。</h2>
@else
<table>
  <tr>
    <th>プラン名</th>
    <th>ホテル名</th>
    <th>予約日</th>
    <th>人数</th>
    <th>チェックイン時間</th>
    <th>チェックアウト時間</th>
  </tr>
  @foreach ($reservations as $reservation)
  <tr>
    <td>{{$reservation->plan->name}}</td>
    <td><a href="/reservation/show?id={{$reservation->id}}">{{$reservation->plan->inn->name}}</td>
    <td>{{$reservation->reservation_date}}</td>
    <td>{{$reservation->num_people}}</td>
    <td>{{$reservation->checkin_time}}</td>
    <td>{{$reservation->checkout_time}}</td>
  </tr>
  @endforeach
</table>
@endif
@endsection
</body>

</html>
