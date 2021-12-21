@extends('layouts.UmeshuTravel')

@section('title','Innfind')
@section('menubar')
  @parent
  検索ページ
@endsection

@section('content')
    <form action="/inn/show_admin"  method="get">
      @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>

@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection
