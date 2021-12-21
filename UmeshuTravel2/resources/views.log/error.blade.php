@extends('layouts.UmeshuTravel')

@section('title', 'Error')

@section('menubar')
  @parent
  エラーページ
@endsection

@section('content')
<h1>このページはご利用いただけません</h1>
<h2>リンクに問題があるか、ページが削除された可能性があります。</h2>
<button type="button" onclick="history.back()">前のページに戻る</button>

@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection