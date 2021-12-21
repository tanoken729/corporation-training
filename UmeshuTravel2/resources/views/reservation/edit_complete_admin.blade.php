@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.edit_complete_admin')

@section('menu_title', '変更の完了')

@section('content')
<p>予約の変更が完了しました。</p>
<button type="button" class="btn btn-primary" onclick="window.location.href='/reservation'">予約宿一覧へ</button><br>
@endsection
