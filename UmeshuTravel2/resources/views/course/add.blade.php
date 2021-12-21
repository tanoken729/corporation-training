@extends('layouts.helloapp')

@section('title', 'Course.Add')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
@if (count($errors) > 0)
<div>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="/course/add" method="post">
  <table>
    @csrf
    <tr>
      <th>title: </th>
      <td><input type="text" name="title" value="{{old('title')}}"></td>
    </tr>
    <tr>
      <th>price: </th>
      <td><input type="number" name="price" value="{{old('price')}}"></td>
    </tr>
    <tr>
      <th>
      <td><input type="submit" value="send"></td>
      </th>
    </tr>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
