@extends('layouts.UmeshuTravel')

@section('title', 'User.Index')

@section('menubar')
  @parent
  確認ページ
@endsection

@section('content')
    <!-- ここがaddから送られてきたものを表示 -->
  <table>
          <tr><th>名前</th><td>{{$param['name']}}</td></tr>
      <tr><th>郵便番号</th><td>{{$param['postal']}}</td></tr>
          <tr><th>住所</th><td>{{$param['address']}}</td></tr>
      <tr><th>電話番号</th><td>{{$param['tel']}}</td></tr>
       <tr><th>Eメール</th><td>{{$param['email']}}</td></tr>
      <tr><th>生年月日</th><td>{{$param['birthday']}}</td></tr>
    <tr><th>パスワード</th><td>{{$param['password']}}</td></tr>

     <!-- <input type="hidden" name="password" value="himitu"> -->
  <form class="" action="/user/add3" method="post">
  @csrf
    <!-- ここがaddから送られてきたものを見えないところで受け取る -->
         <input type="hidden" name="name" value="{{$param['name']}}">
       <input type="hidden" name="postal" value="{{$param['postal']}}">
      <input type="hidden" name="address" value="{{$param['address']}}">
          <input type="hidden" name="tel" value="{{$param['tel']}}">
        <input type="hidden" name="email" value="{{$param['email']}}">
     <input type="hidden" name="birthday" value="{{$param['birthday']}}">
     <input type="hidden" name="password" value="{{$param['password']}}">


     <!-- <input type="hidden" name="password" value="himitu"> -->
    <!-- ここでデータベースに送る -->
    <tr><th></th><td><input type="submit" value="登録する"></td></tr>
  <button type="button" onclick="history.back()">戻る</button>
  </form>
  </table>

@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection
