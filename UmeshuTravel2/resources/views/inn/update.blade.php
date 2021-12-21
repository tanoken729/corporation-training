@extends('layouts.UmeshuTravel')

@section('title','Edit')

@section('menubar')
  @parent
編集ページ
@endsection

@section('content')
  @if(count($errors)>0)
  <div>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="/inn/update_confirm" method="get">
    @csrf
    <table>
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr>
        <th>画像(URL)</th><td><input type="text" name="img" value="{{$form->img}}"></td>
      </tr>
      <tr>
        <th>宿名</th><td><input type="text" name="name" value="{{$form->name}}"></td>
      </tr>
      <tr>
        <th>郵便番号</th><td><input type="text" name="postal" value="{{$form->postal}}"></td>
      </tr>
      <tr>
        <th>住所</th><td><input type="text" name="address" value="{{$form->address}}"></td>
      </tr>
      <tr>
        <th>電話番号</th><td><input type="text" name="tel" value="{{$form->tel}}"></td>
      </tr>
      <tr>
        <th>宿分類</th><td>
          @php($var = ['シティホテル'=>1,'リゾートホテル'=>2,'ビジネスホテル'=>3,'旅館'=>4,'民宿'=>5,'ペンション'=>6])
          @foreach($var as $key=>$value)
            @if($value==$form->code)
                <input type="radio" name="code" value="{{$value}}" checked="checked">{{$value}}：{{$key}}<br>
            @else
                <input type="radio" name="code" value="{{$value}}">{{$value}}：{{$key}}<br>
            @endif
          @endforeach
      </tr>
      <tr>
        <th></th><td><input type="submit" value="確認">
        <button type="button" onClick="history.back(-1);">戻る</button></td>
      </tr>
    </table>
  </form>
@endsection

  @section('footer')
  copyright 2020 tuyano.
  @endsection
