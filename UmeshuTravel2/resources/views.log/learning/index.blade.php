@extends('layouts.learning')

@isset ($name, $id)
@section('title', 'confirm')
@else
@section('title', 'Index')
@endisset

@section('content')
<table>
  <tr>
    <th>Code</th>
    <th>Title</th>
    <th>Price</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->code}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->price}}</td>
  </tr>
  @endforeach
</table>
@endsection

@section('footer')
copyright 2020 LinuxAcademy
@endsection
