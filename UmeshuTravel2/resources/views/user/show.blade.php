@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('content')




<p>会員ID:{{$user->id}}</p>
<p>名前:{{$user->name}}</p>
<p>生年月日:{{$user->birthday}}</p>
<p>郵便番号:{{$user->postal}}</p>
<p>住所:{{$user->address}}</p>
<p>電話番号:{{$user->tel}}</p>
<p>Eメール:{{$user->email}}</p>
<p>入会年月日:{{$user->created_at}}</p>
<hr>

@if($user_id == 1)
<button type="button" onclick="location.href='/admin'">戻る</button>

@else
<button type="button" onclick="location.href='/'">戻る</button>

<a href="/user/del?id={{$user_id}}">退会</a>
@endif

@endsection

</body>
