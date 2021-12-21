@extends('layouts.learning')

@section('title', 'Delete')

@section('menubar')
@parent
削除ページ
@endsection

@section('content')
<form action="/learning/del" method="post">
  <table>
    @csrf
    <input type="hidden" name="code" value="{{$form->code}}">
    <tr>
      <th>code:</th>
      <td>{{$form->code}}</td>
    </tr>
    <tr>
      <th>title:</th>
      <td>{{$form->title}}</td>
    </tr>
    <tr>
      <th>price:</th>
      <td>{{$form->price}}</td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="削除する"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
