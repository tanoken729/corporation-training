@extends('layouts.helloapp')

@section('title', 'Course.find')

@section('menubar')
@parent
検索ページ
@endsection

@section('content')
<form action="/course/find" method="post">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="find">
</form>
@if (isset($item))
<table>
  <tr>
    <th>id</th>
    <th>title</th>
    <th>price</th>
  </tr>
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->price}}円</td>
  </tr>
</table>
@endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
