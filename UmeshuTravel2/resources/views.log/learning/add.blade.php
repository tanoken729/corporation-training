@extends('layouts.learning')

@section('title', 'Add')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
<form action="/learning/add" method="post">
  <table>
    @csrf
    <tr>
      <th>code:</th>
      <td><input type="text" name="code"></td>
    </tr>
    <tr>
      <th>title:</th>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <th>price:</th>
      <td><input type="text" name="price"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
