@extends('layouts.UmeshuTravel')
<style>
  .pagination {
    font-size: 10pt;
  }

  .pagination li {
    display: inline-block
  }
</style>
@section('title','Admin')
@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<button type="button" class="btn btn-primary" onclick="window.location.href='/inn/find_admin'">宿検索</button><br>
<button type="button" class="btn btn-primary" onclick="window.location.href='/inn/add'">宿登録</button><br>
<button type="button" class="btn btn-primary" onclick="window.location.href='/user/find'">会員検索</button><br>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
