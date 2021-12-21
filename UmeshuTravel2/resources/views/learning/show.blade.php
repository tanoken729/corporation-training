@extends('layouts.learning')

@section('title', 'Show')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')
@if ($items != null)
<table width="1000px">
  @foreach($items as $item)
  <tr>
    <th width="50px">code:</th>
    <td width="50px">{{$item->code}}</td>
    <th width="50px">title:</th>
    <td width="100px">{{$item->title}}</td>
    <th width="50px">price:</th>
    <td width="50px">{{$item->price}}</td>
  </tr>
  @endforeach
</table>
@endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
