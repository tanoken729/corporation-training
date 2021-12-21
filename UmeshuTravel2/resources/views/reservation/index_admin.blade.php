@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index_admin')

@section('menu_title', '予約一覧')

@section('content')
<style></style>
@if(isset($reservations))
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
    <td><a href="/reservation/show_admin?id={{$reservation->id}}">{{$reservation->plan->inn->name}}</td>
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
