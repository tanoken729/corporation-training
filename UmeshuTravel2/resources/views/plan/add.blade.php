@extends('layouts.UmeshuTravel')

@section('title','Add')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
<form action="/plan/add_confirm" method="post">
  @csrf
  <table>
    <tr>
      <th>宿ID</th>
      <td>{{$inn->id}}</td>
    </tr>
    <tr>
      <th>宿名</th>
      <td>{{$inn->name}}</td>
    </tr>
    <tr>
      <th>プラン名</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>価格</th>
      <td><input type="number" name="price"></td>
    </tr>
    <input type="hidden" name="inn_id" value='{{$inn->id}}'>
    <input type="hidden" name="inn_name" value='{{$inn->name}}'>
    <tr>
      <th></th>
      <td><input type="submit" value="確認">
        <button type="button" onClick="history.back(-1);">戻る</button></td>
    </tr>
  </table>
</form>

@endsection
