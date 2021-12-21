@extends('layouts.UmeshuTravel')

@section('title', 'User.Edit')

@section('menubar')
  @parent
  会員更新ページ
@endsection

@section('content')

<p>更新が完了しました。</p>
@if($user_id == 1)
<a href="/user/show_admin?id={{$user_id}}">戻る</a>
@else
<a href="/user/show?id={{$user_id}}">戻る</a>
@endif
@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection
