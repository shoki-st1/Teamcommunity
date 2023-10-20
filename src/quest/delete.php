<!--タスク削除のphp-->
<?php
//ファイル呼び出し
require(__DIR__ . '/../data/sqldata.php');
//削除するテーブルの生成
$SqlTask = new SqlData();

//中央揃え
echo '<center>';

//削除するキーの受け渡し
$date = $_GET["date"];

//キーがあるかの判定
if (isset($date)) {
    //sql実行
    $SqlTask->deltask($date);
    echo "削除しました";
} else {
    echo "それは本当に消せるのですか?";
}

//一覧に戻る
echo '<form method="POST" action="/quest/log.php">';
echo '<input type="submit" value="戻る">';
echo '</form>';
echo '</center>';
