@extends('layouts.helloapp')

@section('title','AddComfirm')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')

<table width="400px">
  <tr>
    <th width="150px">宿ID</th>
    <td>{{$param['inn_id']}}</td>
    <input type="hidden" value="{{$param['inn_id']}}">
  </tr>
  <tr>
    <th width="150px">宿名</th>
    <td>{{$param['inn_name']}}</td>
    <input type="hidden" value="{{$param['inn_name']}}">

  </tr>
  <tr>
    <th width="150px">プラン名</th>
    <td>{{$param['name']}}</td>
    <input type="hidden" value="{{$param['name']}}">

  </tr>
  <tr>
    <th width="150px">価格</th>
    <td>{{$param['price']}}</td>
    <input type="hidden" value="{{$param['price']}}">

  </tr>
</table>
<form action="/plan/add_confirm2" method="post">
  @csrf
  <input type="submit" value="登録">
  <button type="button" onClick="history.back(-1);">戻る</button></td>
</form>
@endsection
@section('footer')
copyright 2020 tuyano.
@endsection
