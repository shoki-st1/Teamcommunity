<?php
//データベース操作
require_once __DIR__ . '/data/sqldata.php';

//予定を取得
$SqlTask = new SqlData();
//ユーザーIDを送って全てのタスク取得
$tasks = $SqlTask->getcalendertask($_SESSION['userId']);

//今日
$today = getdate();
//現在の年と月
$year = $today['year'];
$month = $today['mon'];

//月初めの日付オブジェクト
$firstDayManth = new DateTime("$year-$month-01");
//月の最終日
$lastday = date('t', mktime(0, 0, 0, $month, 1, $year));

//カレンダーの表示
echo '<center><table>';
//月と年
echo '<caption>' . date('F Y', mktime(0, 0, 0, $month, 1, $year)) . '</caption>';
//曜日
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
echo '<tr>';
//日にちの表示調整
for ($i = 0; $i < (int)$firstDayManth->format('w'); $i++) {
    echo '<td></td>';
}

//日付表示
for ($day = 1; $day <= $lastday; $day++) {
    $currentDate = sprintf('%04d-%02d-%02d', $year, $month, $day);

    //予定のフラグ
    $taskFound = false;

    //ある限りtrueになる
    foreach ($tasks as $task) {
        //範囲にあるか
        if ($currentDate >= $task['startday'] && $currentDate <= $task['finday']) {
            $taskFound = true;
            break;
        }
    }

    echo '<td';
    //trueの間は背景色が変わる
    if ($taskFound) {
        echo ' style="background-color: silver;"';
    }

    echo '>';
    //日にち表示
    echo $day . '</td>';

    //一週間で改行
    if (date('w', mktime(0, 0, 0, $month, $day, $year)) == 6) {
        echo '</tr>';
    }
}
echo '</table></center>';
