@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.edit_complete')

@section('menu_title', '変更の完了')

@section('content')
<div style="text-align:center;">
  <p>予約の変更が完了しました。</p>
  <button type="button" onclick="window.location.href='/reservation'">予約宿一覧へ</button><br>
</div>
@endsection
