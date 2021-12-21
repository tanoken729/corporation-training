<style type="text/css">
    .scroll {
        width: auto;
        height: 80vh;
        background-size: cover;
        background-position: center;
        background-image: url('https://placeimg.com/1920/1080/nature');
      }


    input {
        font-size: 200%;
    }

    .form1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    select.textBig {
        font-size: 100%
    }

    input::focus::placeholder {
        color: transparent;
    }

    #box {
        outline: 0;/*クリック時の青い枠線消す*/
        width: 800px;/*検索ボタンの横幅*/
        height: 50px;/*検索ボックスの高さ*/
        padding: 0 4em;/*テキスト位置調整*/
        border-radius: 2px 0 0 2px;/*検索ボックスの角を丸める*/
        background: #eee;/*検索ボックスの背景カラー*/
    }

    #btn {
        width: 100px;/*検索ボタンの横幅*/
        height: 50px;/*検索ボタンの縦幅*/
        position: absolute;/*検索ボタンの絶対位置*/
        left: 700px;/*検索ボタンの位置調整*/
        top: 0;
        border-radius: 0 2px 2px 0;/*検索ボタンの角を丸める*/
        background: #7fbfff;/*検索ボタンの背景カラー*/
        border: none;/*検索ボタンの枠線を消す*/
        color: #fff;/*検索ボタンのテキストカラー*/
        font-weight: bold;/*検索ボタンのテキスト太字*/
        font-size: 16px;/*検索ボタンのフォントサイズ*/
    }

    select {
        position: fixed;
        outline: none;
        -moz-appearance: none;
        text-indent: 0.01px;
        text-overflow: '';
        background: none transparent;
        vertical-align: middle;
        font-size: inherit;
        color: inherit;
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        height: 50px;
        padding: 8px 12px;
        border: 1px solid #ddd;
        color: #828c9a;
        width: -10%;
        border-radius: 3px;
        background: #eee;
    }    

</style>
@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.index')

@section('content')
<div class="scroll">
<div class="form1" style="white-space: nowrap;">
    <form action="inn/find" method="get">
        @csrf
        <select name="area" class="select-wrap select-primary">
            <option value="">地域</option>
            <optgroup label="北海道">
                <option value="北海道">北海道</option>
            <optgroup label="東北">
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
            <optgroup label="北関東・甲信">
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
            <optgroup label="南関東">
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
            <optgroup label="北陸">
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
            <optgroup label="東海">
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
            <optgroup label="近畿">
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
            <optgroup label="中国">
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
            <optgroup label="四国">
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
            <optgroup label="九州">
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
        </select>
        <input type="search" name="name" id="box" size="40" placeholder="ホテル？" onfocus='this.placeholder=""' onblur='this.placeholder="ホテル？"' style="border-width:0px;border-style:None;">
        <input type="submit" id="btn" value="検索">
    </form>
</div>
</div>
@endsection
