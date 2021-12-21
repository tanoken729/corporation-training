@extends('layouts.helloapp')

@section('title', 'Course.index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>title</th>
    <th>price</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->price}}円</td>
  </tr>
  @endforeach
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
