<?php
//ヘッダー
require_once 'header.php';
//データベース操作
require_once __DIR__ . '/data/sqldata.php';

//予定を取得
$SqlTask = new SqlData();
$tasks = $SqlTask->getcalendertask($userId);

//今日
$today = getdate();

//現在の年と月
$year = $today['year'];
$month = $today['mon'];

//月の最終日
$lastday = date('t', mktime(0, 0, 0, $month, 1, $year));

//カレンダーの表示
echo '<center><table>';
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
for ($day = 1; $day <= $lastday; $day++) {
    $currentDate = sprintf('%04d-%02d-%02d', $year, $month, $day);

    $taskFound = false;

    foreach ($tasks as $task) {
        if ($currentDate >= $task['startday'] && $currentDate <= $task['finday']) {
            $taskFound = true;
            break;
        }
    }

    echo '<td';
    if ($taskFound) {
        echo 'style="background-color: blue;"';
    }

    echo '>';
    echo $day . '</td>';

    //一週間
    if (date('w', mktime(0, 0, 0, $month, $day, $year)) == 6) {
        echo '</tr>';
    }
}
echo '</table></center>';
