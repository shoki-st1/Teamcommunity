<!--チェック、登録するためのphp-->
<?php
//テキスト内容
$temp = $_POST['question'];
echo "<h3>登録内容</h3>";
echo $temp;
echo "<br>";


//入力判定(空白、現在時刻より進んでいること)
if (!(isset($_POST['question'])) && strtotime($_POST['startday']) >= date('Y-m-d') && strtotime($_POST['startday']) < strtotime($_POST['finday'])) {
    echo "データベースに登録します";
    require 'sql.php';
    //passwordにtempを代入
    $sql = "INSERT INTO userdb_table (password) VALUES ('?')";
    //関数に送る
    dboperation($sql, $temp);
} else {
    echo "入力されていないか、日付が間違っています。";
    echo '<a href="/quest/quest_table.php">戻る</a>';
}

//db操作
echo '<form method="POST" action="log.php">';
echo '<input type="submit" value="task一覧に戻る">';
echo '</form>';

?>