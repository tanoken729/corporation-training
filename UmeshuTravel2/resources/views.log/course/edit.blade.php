@extends('layouts.helloapp')

@section('title', 'Course.Edit')

@section('menubar')
@parent
編集ページ
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
<form action="/course/edit" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>title: </th>
      <td><input type="text" name="title" value="{{$form->title}}"></td>
    </tr>
    <tr>
      <th>price: </th>
      <td><input type="number" name="price" value="{{$form->price}}"></td>
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
