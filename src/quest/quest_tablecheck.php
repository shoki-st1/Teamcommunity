<!--チェック、登録するためのphp-->
<?php
//内容の代入
$task = $_POST['question'];
$startday = $_POST['startday'];
$finday = $_POST['finday'];

echo "<h3>登録内容</h3>";
//内容の表示
echo $task;
echo "<br>";

/*
テスト用
// $userId = rand();
// echo "データベースに登録します";
// require __DIR__ . '/sqldata.php';
// //sql
// $SqlTask = new SqlData();
// $SqlTask->addtask($userId, $task, $startday, $finday);
*/

//入力判定(空白、現在時刻より進んでいること)
if (!empty($task) && strtotime($startday) >= strtotime(date('Y-m-d')) && strtotime($startday) < strtotime($finday)) {
    //テスト段階の為ランダム
    $userId = rand();
    echo "データベースに登録します";
    //ファイルの呼び出し
    require __DIR__ . '/sqldata.php';
    //sqlオブジェクトの生成と処理
    $SqlTask = new SqlData();
    $SqlTask->addtask($userId, $task, $startday, $finday);
} else {
    //入力画面に戻す
    echo "入力されていないか、日付が間違っています。";
    echo '<a href="/quest/quest_table.php">戻る</a>';
}

//task一覧に戻る
echo '<form method="POST" action="log.php">';
echo '<input type="submit" value="task一覧に戻る">';
echo '</form>';

?>