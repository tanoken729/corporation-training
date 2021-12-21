@extends('layouts.helloapp')

@section('title','Edit')

@section('menubar')
@parent
編集ページ
@endsection

@section('content')
@if(count($errors)>0)
<div>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="/plan/update_confirm" method="post">
  @csrf
  <table>
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>プラン名</th>
      <td><input type="text" name="name" value="{{$form->name}}"></td>
    </tr>
    <tr>
      <th>価格</th>
      <td><input type="text" name="price" value="{{$form->price}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="変更">
        <button type="button" onClick="history.back(-1);">戻る</button></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
