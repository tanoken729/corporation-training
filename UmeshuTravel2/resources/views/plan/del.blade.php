@extends('layouts.UmeshuTravel')

@section('title','Del')

@section('menubar')
@parent
削除ページ
@endsection

@section('content')
<form action="/plan/del2" method="post">
  @csrf
  <table>
    <input type="hidden" name="id" value="{{$form->id}}">
    <input type="hidden" name="inn_id" value="{{$form->inn->id}}">
    <tr>
      <th>宿ID</th>
      <td>{{$form->inn->id}}</td>
    </tr>
    <tr>
      <th>宿名</th>
      <td>{{$form->inn->name}}</td>
    </tr>
    <tr>
      <th>プランid</th>
      <td>{{$form->id}}</td>
    </tr>
    <tr>
      <th>プラン名</th>
      <td>{{$form->name}}</td>
    </tr>
    <tr>
      <th>価格</th>
      <td>{{$form->price}}</td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="削除">
        <button type="button" onClick="history.back(-1);">戻る</button></td>
    </tr>
  </table>
</form>
@endsection
