@extends('layouts.UmeshuTravel')

@section('title', 'User.Edit')

@section('menubar')
@parent
会員更新ページ
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
<form action="/user/edit2" method="get">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">

    　　　　　　　　<tr>
      <th>名前</th>
      <td><input type="text" name="name" value="{{$form->name}}"></td>
    </tr>
    <tr>
      <th>郵便番号</th>
      <td><input type="text" name="postal" value="{{$form->postal}}"></td>
    </tr>
    <tr>
      <th>住所</th>
      <td><input type="text" name="address" value="{{$form->address}}"></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><input type="text" name="tel" value="{{$form->tel}}"></td>
    </tr>
    <tr>
      <th>Eメール</th>
      <td><input type="text" name="email" value="{{$form->email}}"></td>
    </tr>
    <tr>
      <th>生年月日</th>
      <td><input type="text" name="birthday" value="{{$form->birthday}}"></td>
    </tr>


    <tr>
      <th></th>
      <td><input type="submit" value="更新する"></td>
    </tr>
    <button type="button" onclick="history.back()">戻る</button>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection
