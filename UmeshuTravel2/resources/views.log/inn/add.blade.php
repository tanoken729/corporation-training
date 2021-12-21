@extends('layouts.UmeshuTravel')

@section('title','Add')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')

@if(count($errors) > 0)
<div>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="/inn/add_confirm" method="get">
  @csrf
  <table>
    <tr>
      <th>画像(URL)</th>
      <td><input type="text" name="img"></td>
    </tr>
    <tr>
      <th>宿名</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>郵便番号</th>
      <td><input type="text" name="postal"></td>
    </tr>
    <tr>
      <th>住所</th>
      <td><input type="text" name="address"></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><input type="text" name="tel"></td>
    </tr>
    <tr>
      <th>分類コード</th>
      <td><input type="radio" name="code" value="1">1
        <input type="radio" name="code" value="2">2
        <input type="radio" name="code" value="3">3 <br>
        <input type="radio" name="code" value="4">4
        <input type="radio" name="code" value="5">5
        <input type="radio" name="code" value="6">6 </td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="確認">
        <button type="button" onClick="history.back(-1);">戻る</button></td>
    </tr>
  </table>
</form>

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
