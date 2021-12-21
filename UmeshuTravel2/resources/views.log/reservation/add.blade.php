@extends('layouts.UmeshuTravel')

@section('title', 'Reservation.add')

@section('menu_title', '予約ページ')

@section('content')

<head>
    <style>
        table {
            border-spacing: 0;
        }

        td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: center;
        }

        td:first-child {
            color: red;
        }

        td:last-child {
            color: royalblue;
        }

        td.is-disabled {
            color: #ccc;
        }
    </style>
</head>


@if (!isset($forms->plan_id))
<h3>{{$items->name}} 予約フォーム</h3>

<form action="" method="post">
    @csrf
    <div id="calendar"></div>
    <button id="prev" type="button">　前の月　</button>　<button id="next" type="button">　次の月　</button>
    <input type="hidden" id="target" name="date" value="">
    <!--5/25追加-->
    <!--<label><p>日付:<input type="date" name="date"></p></label>-->
    <!--5/25削除-->

    <fieldset><legend>会員情報</legend>
    <label>
        <p>名前（変更不可）:<input type="text" name="name" value="{{$user->name}}" readonly required></p>
    </label>
    <label>
        <p>電話番号（変更不可）:<input type="text" name="tel" value="{{$user->tel}}" readonly required></p>
    </label>
    <label>
        <p>メールアドレス（変更不可）:<input type="text" name="email" value="{{$user->email}}" readonly required></p>
    </label>
    </fieldset>

    <fieldset><legend>予約情報</legend>
    <label>
        <p>人数:<input type="number" name="num_people" min="1" value="1" required></p>
    </label>
    <label>
        <p>プラン:
            @foreach($items->plans as $plan)
            @if ($loop->iteration === 1)
            <input type="radio" name="plan_id" value="{{$loop->iteration}}" checked>{{$plan->name}}:{{$plan->price}}円
            @else
            <input type="radio" name="plan_id" value="{{$loop->iteration}}">{{$plan->name}}:{{$plan->price}}円
            @endif
            @endforeach
        </p>
    </label>
    <label>
        <p>チェックイン予定時間:<input type="datetime-local" name="checkin_time" value="2017-06-01T08:30">
            <!--min="06:00" max="18:00"-->
            チェックアウト予定時間:<input type="datetime-local" name="checkout_time" value="2017-06-02T08:30"></p>
        </lavel>
    </fieldset>
        <input type="submit" value="確認">
</form>


</ul>
</div>
@else

<h3>{{$items->name}} 入力確認</h3><br>
日程：{{$forms->date}}<br>
名前：{{$forms->name}}<br>
電話番号：{{$forms->tel}}<br>
メールアドレス：{{$forms->email}}<br>
人数：{{$forms->num_people}}<br>
プラン：{{$items->plans[$forms->plan_id-1]->name}}<br>
チェックイン：{{$forms->checkin_time}}<br>
チェックアウト：{{$forms->checkout_time}}<br>

<form action="commit" method="post">
    @csrf
    <input type="hidden" name="reservation_date" value="{{$forms->date}}">
    <input type="hidden" name="num_people" value="{{$forms->num_people}}">
    <input type="hidden" name="user_id" value="{{$user_id}}"><!-- ログイン機能でmember_idとってくる -->
    <input type="hidden" name="plan_id" value="{{$items->plans[$forms->plan_id-1]->id}}">
    <input type="hidden" name="checkin_time" value="{{$forms->checkin_time}}">
    <input type="hidden" name="checkout_time" value="{{$forms->checkout_time}}">

    合計　{{$items->plans[$forms->plan_id-1]->price*$forms->num_people}}円
    <input type="submit" value="予約する">

    @endif

<script>
    const weeks = ['日', '月', '火', '水', '木', '金', '土'];
    const date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth() + 1;


    function showCalendar(year, month) {
        const calendarHtml = createCalendar(year, month);
        const sec = document.createElement('section');
        sec.innerHTML = calendarHtml[0];
        document.querySelector('#calendar').appendChild(sec);
        month++;
        if (month > 12) {
            year++;
            month = 1;
        };
    };

    function createCalendar(year, month) {
        const startDate = new Date(year, month - 1, 1); // 月の最初の日を取得
        const endDate = new Date(year, month, 0); // 月の最後の日を取得
        const endDayCount = endDate.getDate(); // 月の末日
        const lastMonthEndDate = new Date(year, month - 2, 0); // 前月の最後の日の情報
        const lastMonthendDayCount = lastMonthEndDate.getDate(); // 前月の末日
        const startDay = startDate.getDay(); // 月の最初の日の曜日を取得
        let dayCount = 1; // 日にちのカウント
        let calendarHtml = ''; // HTMLを組み立てる変数

        calendarHtml += '<p>' + year + '年' + month + '月</p>' + '<table>';

        for (let i = 0; i < weeks.length; i++) calendarHtml += '<td>' + weeks[i] + '</td>'; // 曜日の行を作成

        for (let w = 0; w < 6; w++) {
            calendarHtml += '<tr>';

            for (let d = 0; d < 7; d++) {
                if (w == 0 && d < startDay) { // 1行目で1日の曜日の前
                    let num = lastMonthendDayCount - startDay + d + 1;
                    calendarHtml += '<td class="is-disabled">' + num + '</td>';
                } else if (dayCount > endDayCount) { // 末尾の日数を超えた
                    let num = dayCount - endDayCount;
                    calendarHtml += '<td class="is-disabled">' + num + '</td>';
                    dayCount++;
                } else {
                    if (!(dayCount >= date.getDate()) && month == date.getMonth() + 1 && year == date.getFullYear()) calendarHtml += `<td class="calendar_td" id=${dayCount} >-</td>`;
                    else calendarHtml += `<td class="calendar_td" id=${dayCount} data-date='${year}-${('00'+month).slice( -2 )}-${('00'+dayCount).slice( -2 )}'>${dayCount}</td>`;
                    dayCount++;
                };
            };
            calendarHtml += '</tr>';
        };
        calendarHtml += '</table>';
        return [calendarHtml, endDayCount];
    }

    function moveCalendar(e) {
        document.querySelector('#calendar').innerHTML = ''; //表示中のカレンダー初期化

        if (e.target.id === 'prev' && month != date.getMonth()+1) {
            month--;
            if (month < 1) {
                year--;
                month = 12;
            };
        };

        if (e.target.id === 'next') {
            month++;
            if (month > 12) {
                year++;
                month = 1;
            };
        };
        showCalendar(year, month);
    };

    document.querySelector('#prev').addEventListener('click', moveCalendar);
    document.querySelector('#next').addEventListener('click', moveCalendar);

    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("calendar_td")) {
            const dayColor = document.getElementById(e.target.dataset.date.slice(8, 10));
            endDayNum = createCalendar(e.target.dataset.date.slice(0, 4), e.target.dataset.date.slice(5, 7))
            for (var i = 1; i < Number(endDayNum[1]); ++i) {
                document.getElementById(i).style.backgroundColor = 'white';
            };
            document.getElementById(e.target.dataset.date.slice(8, 10)).style.backgroundColor = 'pink';
            document.getElementById("target").value = e.target.dataset.date
            alert('予約日：' + e.target.dataset.date);
        }
    });
showCalendar(year, month);
</script>
<script>
const nowDate = new Date()
document.getElementById(nowDate.getDate()).style.backgroundColor = 'pink';
document.getElementById("target").value = nowDate.getFullYear() +"-"+ (nowDate.getMonth()+1)  +"-"+ nowDate.getDate();
</script>
    @endsection
