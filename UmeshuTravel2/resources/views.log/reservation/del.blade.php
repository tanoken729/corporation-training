@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.del')

@section('menu_title', '予約のキャンセル')

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
<script>
  function confirmCancel() {
    var result = confirm("本当にこの予約をキャンセルしてもよろしいですか？");
    if (result) {
      document.update.submit();
    } else {
      return false;
    }
  }
</script>

<body>
  <form action="/reservation/del?id={{$reservation->id}}" method="post" name="update" onsubmit="return confirmCancel()">
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
        <td>{{$reservation->reservation_date}}</td>
      </tr>
      <tr>
        <th>人数: </th>
        <td>{{$reservation->num_people}}</td>
      </tr>
      <tr>
        <th>チェックイン時間: </th>
        <td>{{$reservation->checkin_time}}</td>
      </tr>
      <tr>
        <th>チェックアウト時間: </th>
        <td>{{$reservation->checkout_time}}</td>
      </tr>


    </table>
    <button>予約をキャンセルする</button>
  </form>
  <button type="button" onclick="history.back()">戻る</button>
  @endsection
</body>

</html>
