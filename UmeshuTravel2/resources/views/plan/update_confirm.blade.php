@extends('layouts.UmeshuTravel')

@section('title','AddComfirm')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')

<table width="400px">

  <tr>
    <th width="150px">プラン名</th>
    <td>{{$param['name']}}</td>
  </tr>
  <tr>
    <th width="150px">価格</th>
    <td>{{$param['price']}}</td>
  </tr>
  <tr>
    <th></th>
    <td>
      <form class="" action="/plan/update_confirm2" method="post">
        @csrf
        <input type="submit" value="更新">
        <button type="button" onClick="history.back(-1);">戻る</button>
    </td>
    </form>
    </td>
  </tr>
</table>

@endsection
