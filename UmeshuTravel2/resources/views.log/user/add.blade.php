@extends('layouts.UmeshuTravel')

@section('title', 'User.Add')

@section('menubar')
  @parent
  会員登録ページ
@endsection

@section('content')
  @if (count($errors) > 0)
  <div>
   <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
   </ul>
  </div>
  @endif
  <form action="/user/add2" method="post">
  <table>
  @csrf
  <!-- ここがadd2に送られる -->
                 <tr><th>名前</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
           <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{old('postal')}}"></td></tr>
              <tr><th>住所</th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
              <tr><th>電話番号</th><td><input type="text" name="tel" value="{{old('tel')}}"></td></tr>
             <tr><th>Eメール</th><td><input type="mail" name="email" value="{{old('email')}}"></td></tr>
         <tr><th>生年月日</th><td><input type="date" name="birthday" value="{{old('birthday')}}"></td></tr>
       <tr><th>パスワード</th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>


  <!-- <input type="hidden" name="password" value="himitu"> -->
  <tr><th></th><td><input type="submit" value="確認画面へ"></td></tr>
  <button type="button" onclick="history.back()">戻る</button>
  </table>
  </form>
@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection
