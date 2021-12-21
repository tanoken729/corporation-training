@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('content')




<p>会員ID:{{$user->id}}</p>
<p>名前:{{$user->name}}</p>
<p>生年月日:{{$user->birthday}}</p>
<p>住所:{{$user->address}}</p>
<p>電話番号:{{$user->tel}}</p>
<p>Eメール:{{$user->email}}</p>
<p>入会年月日:{{$user->created_at}}</p>
<hr>

<button type="button" onclick="history.back()">戻る</button>
<a href="/user/del?user_id={{$user_id}}">退会</a>
@endsection

</body>
