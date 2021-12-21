<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<script>
  function confirmCancel() {
    confirm("本当にこの予約をキャンセルしてもよろしいですか？");
  }
</script>

<body>
  <form action="/reservation/{{$reservation->id}}/del" method="post">
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
      <tr>
        <th>
        <td><button onclick="confirmCancel()">予約キャンセル</button></td>
        </th>
      </tr>
    </table>
    <button type="button" onclick="history.back()">戻る</button>
  </form>
</body>

</html>
