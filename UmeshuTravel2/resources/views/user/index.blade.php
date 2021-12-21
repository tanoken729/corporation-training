@extends('layouts.UmeshuTravel')

@section('title', 'Member.Index')

@section('menubar')
  @parent
  会員登録ページ
@endsection

@section('content')
<!--
  <table>
  @foreach($items as $item)
  <tr><th>名前（苗字）</th><td>{{$item->family_name}}</td></tr>
  <tr><th>名前（名前）</th><td>{{$item->first_name}}</td></tr>
  <tr><th>郵便番号</th><td>{{$item->postal}}</td></tr>
  <tr><th>住所</th><td>{{$item->address}}</td></tr>
  <tr><th>電話番号</th><td>{{$item->tel}}</td></tr>
  <tr><th>Eメール</th><td>{{$item->email}}</td></tr>
  <tr><th>生年月日</th><td>{{$item->birthday}</td></tr>
  @endforeach
  </table>
 -->
@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection
