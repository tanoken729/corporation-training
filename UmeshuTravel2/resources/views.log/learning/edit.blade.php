@extends('layouts.learning')

@section('title', 'Edit')

@section('menubar')
@parent
更新ページ
@endsection

@section('content')
<form action="/learning/edit" method="post">
  <table>
    @csrf
    <input type="hidden" name="code" value="{{$form->code}}">
    <tr>
      <th>code:</th>
      <td><input type="text" name="code" value="{{$form->code}}"></td>
    </tr>
    <tr>
      <th>title:</th>
      <td><input type="text" name="title" value="{{$form->title}}"></td>
    </tr>
    <tr>
      <th>price:</th>
      <td><input type="text" name="price" value="{{$form->price}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="更新する"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
