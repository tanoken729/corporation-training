<head>
    <style>
        input {
            font-size: 150%;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <script>
        function delete_alert(e) {
            if (!window.confirm('本当に更新しますか？')) {
                return false;
            }
            document.deleteform.submit();
        };
    </script>

    @extends('layouts.UmeshuTravel')

    @section('title', 'Reservation.index')

    @section('menu_title', '会員検索')

    @if (!isset($form))
    <!--NULLなら-->
    @section('content')
    <form action="" method="get">
        @csrf
        <input type="text" name="form" size="30" placeholder="会員ID / 名前 / 電話番号を入力">
        <input type="submit" value="送信">
    </form>
    @endsection

    @else
    @section('content')
    @foreach($items as $user)
    <br>
    <form action="edit_admin" method="post">
        @csrf
        会員ID:<input type="text" name="id" size="5" value="{{$user->id}}" readonly>

        @error('name')
        <strong>ERROR {{$message}}</strong>
        @enderror
        名前:<input type="text" name="name" size="10" value="{{$user->name}}">

        @error('birthday')
        <strong>ERROR {{$message}}</strong>
        @enderror
        生年月日:<input type="date" name="birthday" size="10" value="{{$user->birthday}}"><br>

        @error('address')
        <strong>ERROR {{$message}}</strong>
        @enderror
        住所:<input type="text" name="address" size="30" value="{{$user->address}}">

        @error('tel')
        <strong>ERROR {{$message}}</strong>
        @enderror
        電話番号:<input type="text" name="tel" size="10" value="{{$user->tel}}"><br>

        @error('email')
        <strong>ERROR {{$message}}</strong>
        @enderror
        Eメール:<input type="text" name="email" size="20" value="{{$user->email}}">


        入会年月日:<input type="text" name="created_at" size="10" value="{{$user->created_at}}">
        <input type="submit" value="更新" onClick="delete_alert(event);return false;">
        <input type="button" onclick="location.href='del_admin?id={{$user->id}}'" value="削除"></button>
    </form>
    <hr>
    @endforeach
    @endsection
    @endif
</body>
