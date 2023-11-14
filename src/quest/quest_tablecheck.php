<?php
session_start();
//<!--チェック、登録するためのphp-->
//内容の代入
$userId = htmlspecialchars($_SESSION['userId']);
$task = htmlspecialchars($_POST['question']);
$startday = $_POST['startday'];
$finday = $_POST['finday'];


//ファイルの呼び出し
require(__DIR__ . '/../data/sqldata.php');
//sqlオブジェクトの生成と処理
$SqlTask = new SqlData();

echo "<h3>登録内容</h3>";
//内容の表示
echo $task;
echo "<br>";

/*
テスト用
// echo "データベースに登録します";
// require __DIR__ . '/sqldata.php';
// //sql
// $SqlTask = new SqlData();
// $SqlTask->addtask($userId, $task, $startday, $finday);
*/

//入力判定(空白、現在時刻より進んでいること)
if (!empty($task) && strtotime($startday) >= strtotime(date('Y-m-d')) && strtotime($startday) < strtotime($finday)) {
    //タイムスタンプ
    $Nowdate = strtotime(date('Y-m-d H:i:s'));
    echo "データベースに登録します";
    //sqlで追加
    $SqlTask->addtask($Nowdate, $userId, $task, $startday, $finday);
} else {
    //入力画面に戻す
    echo "入力されていないか、日付が間違っています。";
    echo '<a href="/quest/quest_table.php">戻る</a>';
}

//task一覧に戻る
echo '<form method="POST" action="log.php">';
echo '<input type="submit" value="task一覧に戻る">';
echo '</form>';
