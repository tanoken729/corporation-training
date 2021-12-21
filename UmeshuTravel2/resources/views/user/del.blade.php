@extends('layouts.UmeshuTravel')

@section('title', 'User.Del')

@section('menubar')
  @parent
  退会ページ
@endsection

@section('content')
<script>
function delete_alert(e){
   if(!window.confirm('本当に退会しますか？')){
      return false;
   }
   document.del.submit();
};
</script>

  <form action="/user/del" method="post"　name="del" onsubmit="return confirmCancel()">
  <table>
  @csrf
  <input type="hidden" name="id" value="{{$form->id}}">

               <tr><th>名前</th><td>{{$form->name}}</td></tr>
           <tr><th>郵便番号</th><td>{{$form->postal}}</td></tr>
               <tr><th>住所</th><td>{{$form->address}}</td></tr>
           <tr><th>電話番号</th><td>{{$form->tel}}</td></tr>
            <tr><th>Eメール</th><td>{{$form->email}}</td></tr>
           <tr><th>生年月日</th><td>{{$form->birthday}}</td></tr>

  <input type="hidden" name="password" value="himitu">

  <tr><th></th><td><button onClick="delete_alert(event);return false;">退会する</button></td></tr>
  <button type="button" onclick="history.back()">戻る</button>
  </table>
  </form>


@endsection

@section('footer')
copyright 2020 UmeshuTravel.
@endsection
