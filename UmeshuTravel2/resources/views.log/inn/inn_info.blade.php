@extends('layouts.helloapp')

@section('title','Show')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')
@if(count($errors)>0)
<div>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="/inn/inn_info" method="get">
  @csrf
  <table border="1" style="border-collapse: collapse">
    <button type="button" class="btn btn-primary" onclick="window.location.href='/inn/update?id={{$items->id}}'">宿情報更新</button>
    <button type="button" class="btn btn-primary" onclick="window.location.href='/inn/del?id={{$items->id}}'">宿削除</button>
    <tr>
      <td>
        <table>
          <tr>
            <th>宿id</th>
            <td>{{$items->id}}</td>
          </tr>
          <tr>
            <th>宿名</th>
            <td>{{$items->name}}</td>
          </tr>
          <tr>
            <th>分類</th>
            <td>{{$items->code}}</td>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td>{{$items->postal}}</td>
          </tr>
          <tr>
            <th>住所</th>
            <td>{{$items->address}}</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>{{$items->tel}}</td>
          </tr>
        </table>
      </td>
      <td><img src="{{$items->img}}" alt="写真" width="210" height="150"></td>
    </tr>
  </table>
  <br>
  <table>
    <button type="button" class="btn btn-primary" onclick="window.location.href='/plan/add?id={{$id}}'">プラン追加</button>
    <tr>
      <th>プランID</th>
      <th>プラン名</th>
      <th>価格</th>
    </tr>
    @foreach($items->plans as $plan)
    <tr>
      <td>{{$plan->id}}</td>
      <td> {{$plan->name}}</td>
      <td>{{$plan->price}}円</td>
      <td><a href="../plan/update?id={{$plan->id}}">・変更</a><br>
        <a href="../plan/del?id={{$plan->id}}">・削除</a></td>
    </tr>
    @endforeach
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
