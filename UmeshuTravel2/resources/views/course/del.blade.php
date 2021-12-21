@extends('layouts.helloapp')

@section('title', 'Course.Delete')

@section('menubar')
@parent
削除ページ
@endsection

@section('content')
<form action="/course/del" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>title: </th>
      <td>{{$form->title}}</td>
    </tr>
    <tr>
      <th>price: </th>
      <td>{{$form->price}}</td>
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
