@extends('layouts.UmeshuTravel')　

@section('title','Del')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
    <form action="/inn/del" method="post">
    @csrf
    <table>
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>宿id</th><td>{{$form->id}}</td></tr>
      <tr><th>宿名</th><td>{{$form->name}}</td></tr>
      <tr><th>分類</th><td>
        @php($var = ['シティホテル'=>1,'リゾートホテル'=>2,'ビジネスホテル'=>3,'旅館'=>4,'民宿'=>5,'ペンション'=>6])
        @foreach($var as $key=>$value)
          @if($value==$form->code)
            {{$value}}:{{$key}}
          @endif
        @endforeach
      </td></tr>
      <tr><th>郵便番号</th><td>{{$form->postal}}</td></tr>
      <tr><th>住所</th><td>{{$form->address}}</td></tr>
      <tr><th>電話番号</th><td>{{$form->tel}}</td></tr>
      <tr><th>img</th><td>{{$form->img}}</td></tr>
      <tr>
        <th></th><td><input type="submit" value="send"></td>
      </tr>
    </table>
    </form>
  @endsection

  @section('footer')
  copyright 2020 tuyano.
  @endsection
