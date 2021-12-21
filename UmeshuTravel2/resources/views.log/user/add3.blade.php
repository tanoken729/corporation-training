@extends('layouts.UmeshuTravel')

@section('title', 'User.Index')

@section('menubar')
  @parent
  完了ページ
@endsection

@section('content')
<p>ご登録ありがとうございました</p>
<button type="button" class="btn btn-primary" onclick="window.location.href='/user/add'">宿予約へ</button><br>
@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection







