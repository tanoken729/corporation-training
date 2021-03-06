<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <style>
    * {
      margin: 0px;
      padding: 0px;
    }

    .header {
      background-color: #f0f0f0;

    }

    /* .logo h1 a {
      color: black;
      text-decoration: none;
    }

    h1 {
      font-size: 50px;
      line-height: 120px;
    } */

    h2 {
      text-align: center;
    }

    .header {
      position: relative;
      height: 120px;
    }

    .btn_wrapper {
      position: absolute;
      right: 10px;
      top: 35px;
    }

    #login,
    #register {
      border-radius: 5px;
      background-color: #00a960;
      padding: 20px;
      text-align: center;
      color: white;
      height: 20px;
      line-height: 0px;
      border: none;
      outline: none;
    }

    #login,
    #register:hover {
      cursor: pointer;
    }

    .ham {
      position: absolute;
      width: 60px;
      height: 60px;
      cursor: pointer;
      background-color: #f0f0f0;
      /* margin: 0 0 0 auto; */
      right: 10px;
      top: 25px;
    }

    .ham_line {
      position: absolute;
      left: 10px;
      width: 40px;
      height: 3px;
      background-color: #333333;
      transition: all 0.6s;
    }

    .ham_line1 {
      top: 15px;
    }

    .ham_line2 {
      top: 28px;
    }

    .ham_line3 {
      top: 41px;
    }

    .clicked .ham_line1 {
      transform: rotate(45deg);
      top: 30px;
    }

    .clicked .ham_line2 {
      width: 0px;
    }

    .clicked .ham_line3 {
      transform: rotate(-45deg);
      top: 30px;
    }

    .menu {
      position: fixed;
      width: 300px;
      height: auto;
      right: -400px;
      background-color: #666666;
      transition: all 0.6s;
    }

    .clicked .menu {
      right: 8px;
    }

    ul {
      list-style: none;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #999999;
    }

    .footer {
      text-align: right;
      font-size: 10pt;
      margin: 10px;
      border-bottom: solid 1px #ccc;
      color: #ccc;
    }

    table {
    border-collapse: separate;
    border-spacing: 10px 0px;
    margin: 0 auto;
    padding: 0;
    table-layout: fixed;
    color: #4a9400;
   }
    table td {
      text-align: center;
      border-bottom: 1px dotted #8BC34A;
    }
    table:last-child{
       border-bottom: 2px solid #18521b;
    }

    .btn-primary{
    width:100px;
    font-size:12px;
    color:#FFFFFF;
    text-align:center;
    display:block;
    padding:10px 0 10px;
    background:#46c485;
    border-radius: 20px;
  }
    .btn-sub {
  	display: block;
  	position: relative;
  	width: 90px;
  	padding: 4px;
  	text-align: center;
  	text-decoration: none;
  	color: #214100;
  	background: #b0e4c1;
  }
  .btn-sub:hover {
  	 opacity:0.8;
  	 cursor: pointer;
  	 text-decoration: none;
  }
}

  </style>
</head>

<body>
  <header>
    <div class="header">
      <div class="logo">
        <h1>
          <a href="/"><img src="{{ asset('logo.png')}}" alt="?????? "></a>
        </h1>
      </div>
      @if(!Auth::check())
      <div class="btn_wrapper">
        <button id="login" onclick="location.href='/login'">????????????</button>
        <button id="register" onclick="location.href='/register'">????????????</button>
      </div>
      @else
      <div class="ham" id="ham">
        <span class="ham_line ham_line1"></span>
        <span class="ham_line ham_line2"></span>
        <span class="ham_line ham_line3"></span>
      </div>
      @endif
      <div class="menu_wrapper" id="menu_wrapper">
        <div class="menu">
          <ul>
            <li><a href="/reservation">???????????????</a></li>
            <!-- @if(isset($user_id)) -->
            @if(isset(Auth::user()->name))
            <li><a href="/user/show?id={{$user_id}}">{{Auth::user()->name}}????????????????????????</a></li>
            @endif
            <li><a href="/user/edit?id={{$user_id}}">??????????????????</a></li>
            <!-- @endif -->
            <li><a href="/logout">???????????????</a></li>
          </ul>
        </div>
      </div>
  </header>

  <footer>
    </div>
    <h2>@yield('menu_title')</h2>
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      copyright 2020 umeshu.
    </div>
  </footer>
  <script>
    const ham = document.getElementById("ham");
    const menu_wrapper = document.getElementById("menu_wrapper");
    ham.addEventListener("click", function() {
      ham.classList.toggle("clicked");
      menu_wrapper.classList.toggle("clicked");
    });
  </script>
</body>

</html>
