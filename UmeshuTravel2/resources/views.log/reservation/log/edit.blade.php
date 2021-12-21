<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

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
  <form action="/reservation/{{$reservation->id}}/edit" method="post">
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
        <td><input type="text" name="reservation_date"" value=" {{$reservation->reservation_date}}"></td>
      </tr>
      <tr>
        <th>人数: </th>
        <td><input type="number" name="num_people" value="{{$reservation->num_people}}"></td>
      </tr>
      <tr>
        <th>チェックイン時間: </th>
        <td><input type="text" name="checkin_time" value="{{$reservation->checkin_time}}"></td>
      </tr>
      <tr>
        <th>チェックアウト時間: </th>
        <td><input type="text" name="checkout_time" value="{{$reservation->checkout_time}}"></td>
      </tr>
      <tr>
        <th>
        <td><input type="submit" value="変更"></td>
        </th>
      </tr>
    </table>
    <button type="button" onclick="history.back()">戻る</button>
  </form>
</body>

</html>
