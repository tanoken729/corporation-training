@extends('layouts.UmeshuTravel')

@section('title','AddComfirm')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')

      <table width ="400px">

        <tr>
          <th width="150px">宿名</th>
          <td>{{$param['name']}}</td>
        </tr>
        <tr>
          <th width="150px">郵便番号</th>
          <td>{{$param['postal']}}</td>
        </tr>
        <tr>
          <th width="150px">住所</th>
          <td>{{$param['address']}}</td>
        </tr>
        <tr>
          <th width="150px">電話番号</th>
          <td>{{$param['tel']}}</td>
        </tr>
        <tr>
          <th width="150px">分類コード</th>
          <td>
            @php($var = ['シティホテル'=>1,'リゾートホテル'=>2,'ビジネスホテル'=>3,'旅館'=>4,'民宿'=>5,'ペンション'=>6])
            @foreach($var as $key=>$value)
              @if($value==$param['code'])
                {{$value}}:{{$key}}
              @endif
              @endforeach
        </td></tr>
      </table>
      <form class="" action="/inn/update_confirm" method="post">
        @csrf
        <input type="submit" value="更新">
        <button type="button" onClick="history.back(-1);">戻る</button></td>
      </form>
  @endsection
  @section('footer')
  copyright 2020 tuyano.
  @endsection
