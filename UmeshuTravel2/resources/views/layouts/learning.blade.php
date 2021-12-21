<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <style media="screen">
    body {
      font-size: 16pt;
      color: #999;
      margin: 5px;
    }

    h1 {
      font-size: 40pt;
      text-align: left;
      color: #fff;
      margin: 0px;
      letter-spacing: -4pt;
      background-color: #1EA1F2;
    }

    .content {
      margin: 10px;
    }

    .warning {
      color: red;
    }

    .footer {
      text-align: right;
      font-size: 10pt;
      margin: 10px;
      border-bottom: solid 1px #ccc;
      color: #ccc;
    }

    th {
      background-color: #87cefa;
      color: #fff;
      padding: 5px 10px;
    }

    td {
      border: solid 1px #aaa;
      color: #87cefa;
      padding: 5px 10px;
    }
  </style>
</head>

<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>

</html>
