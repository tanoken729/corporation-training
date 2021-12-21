@extends('layouts.UmeshuTravel')

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
  <table>
      <td><button type="button" class="btn btn-sub" onclick="window.location.href='/inn/update?id={{$items->id}}'" >宿情報更新</button>
      <button type="button" class="btn btn-sub" onclick="window.location.href='/inn/del?id={{$items->id}}'" style="position: relative; left: 110px; top: -32px;">宿削除</button></td>
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
            <td>
            @php($var = ['シティホテル'=>1,'リゾートホテル'=>2,'ビジネスホテル'=>3,'旅館'=>4,'民宿'=>5,'ペンション'=>6])
            @foreach($var as $key=>$value)
              @if($value==$items->code)
                {{$value}}：{{$key}}
              @endif
            @endforeach
            </td>
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
    <td>
        <button type="button" class="btn btn-sub" onclick="window.location.href='/plan/add?id={{$id}}'">プラン追加</button>
    </td>
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
      <td><a href="../plan/update?id={{$plan->id}}&inn_id={{$id}}" class="arrow_btn">変更</a><br>
        <a href="../plan/del?id={{$plan->id}}" class="arrow_btn">削除</a></td>
    </tr>
    @endforeach
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
