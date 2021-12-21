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
    const endDate = new Date(year, month,  0); // 月の最後の日を取得
    const endDayCount = endDate.getDate(); // 月の末日
    const lastMonthEndDate = new Date(year, month - 2, 0); // 前月の最後の日の情報
    const lastMonthendDayCount = lastMonthEndDate.getDate(); // 前月の末日
    const startDay = startDate.getDay(); // 月の最初の日の曜日を取得
    let dayCount = 1; // 日にちのカウント
    let calendarHtml = ''; // HTMLを組み立てる変数

    calendarHtml += '<p>' + year  + '年' + month + '月</p>' + '<table>';

    for (let i = 0; i < weeks.length; i++) calendarHtml += '<td>' + weeks[i] + '</td>';// 曜日の行を作成

    for (let w = 0; w < 6; w++) {
        calendarHtml += '<tr>';

        for (let d = 0; d < 7; d++) {
            if (w == 0 && d < startDay) {// 1行目で1日の曜日の前
                let num = lastMonthendDayCount - startDay + d + 1;
                calendarHtml += '<td class="is-disabled">' + num + '</td>';
            } else if (dayCount > endDayCount) {// 末尾の日数を超えた
                let num = dayCount - endDayCount;
                calendarHtml += '<td class="is-disabled">' + num + '</td>';
                dayCount++;
            } else {
                    if (!(dayCount>=date.getDate()) && month==date.getMonth()+1 && year==date.getFullYear()) calendarHtml += `<td class="calendar_td" id=${dayCount} >-</td>`;
                    else calendarHtml += `<td class="calendar_td" id=${dayCount} data-date='${year}-${('00'+month).slice( -2 )}-${('00'+dayCount).slice( -2 )}'>${dayCount}</td>`;
                dayCount++;
            };
        };
        calendarHtml += '</tr>';
    };
    calendarHtml += '</table>';
    return [calendarHtml,endDayCount];
}

function moveCalendar(e) {
    document.querySelector('#calendar').innerHTML = ''; //表示中のカレンダー初期化

    if (e.target.id === 'prev') {
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
    if(e.target.classList.contains("calendar_td")) {
        const dayColor = document.getElementById( e.target.dataset.date.slice(8,10) );
            endDayNum = createCalendar(e.target.dataset.date.slice(0,4),e.target.dataset.date.slice(5,7))
            for(var i=1;i<Number(endDayNum[1]);++i){
            document.getElementById( i ).style.backgroundColor='white';
            };
            document.getElementById( e.target.dataset.date.slice(8,10) ).style.backgroundColor='pink';
            document.getElementById( "target" ).value = e.target.dataset.date//[0] + "-" + e.target.dataset.date[1] + "-" +  e.target.dataset.date[2];
            alert('予約日：' + e.target.dataset.date);
    }
});

showCalendar(year, month);
