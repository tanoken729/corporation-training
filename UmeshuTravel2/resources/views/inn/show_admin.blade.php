@extends('layouts.UmeshuTravel')

@section('title','Show')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
@if(!$exist)
<h2>該当する宿情報がない</h2>
@else
<table>
  <tr>
    <th>img</th><th>id</th><th>name</th><th>postal</th><th>address</th><th>tel</th><th>code</th>
  </tr>
  @foreach($items as $item)
    <tr><td><img src="{{$item->img}}" width="193" height="130"> </td>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->postal}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->tel}}</td>
        <td>{{$item->code}}</td>
          <td><a href="../inn/inn_info?id={{$item->id}}">・詳細情報</a><br>
            <a href="../inn/update?id={{$item->id}}">・宿更新</a><br>
          <a href="../inn/del?id={{$item->id}}">・宿削除</a></td>
    </tr>
    @endforeach
</table>
@endif
{{$items->links()}}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
