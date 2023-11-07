<?php
require_once 'header.php';

//今日
$today = getdate();

//年と月
$year = $today['year'];
$month = $today['mon'];

//月の最初の日
$firstday = getdate(mktime(0, 0, 0, $month, 1, $year));

//月の最終日
$lastday = date('t', mktime(0, 0, 0, $month, 1, $year));
//カレンダー処理
//データベースからデータを参照し色付け処理?
require_once __DIR__ . '/../src/data/sqldata.php';

//カレンダーの表示
echo '<table>';
echo '<caption>' . date('F Y', mktime(0, 0, 0, $month, 1, $year)) . '</caption>';
echo '<tr>
    <th>日</th>
    <th>月</th>
    <th>火</th>
    <th>水</th>
    <th>木</th>
    <th>金</th>
    <th>土</th>
</tr>';

//空白セル
for ($i = 0; $i < $firstday['wday']; $i++) {
    echo '<td></td>';
}

$day = 1;
while ($day <= $lastday) {
    //日付の出力
    echo '<td>' . $day . '</td>';

    //一週間
    if (($day + $firstday['wday']) % 7 == 0) {
        echo '</tr>';
        if ($day != $lastday) {
            echo '<tr>';
        }
    }
    $day++;
}

echo '</table>';
