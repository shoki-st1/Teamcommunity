<?php
//<!--一覧の表示と登録のボタン-->
//セッションの開始
session_start();
//ファイルの呼び出し
require(__DIR__ . '/../data/sqldata.php');
//テーブルで表示させる
$SqlTask = new SqlData();

echo '<h3>内容一覧</h3>';

// 表で一覧の表示
echo "<center><table border='1'>";
echo "<tr>
            <th>ユーザid</th>
            <th>入力内容</th>
            <th>開始日</th>
            <th>終了日</th>
            <th>削除</th>
        </tr>";

//ログインユーザIDの利用(自分の登録したもののみ表示される)
$userId = $_SESSION['userId'];
//idを元に一覧を表示
$SqlTask->gettask($userId);

//表の終了
echo "</table></center>";


//メインに戻るボタン
echo '<form method="POST" action="/progressmain.php">';
echo '<input type="submit" value="メインに戻る">';
echo '</form>';
?>

<!--登録へ飛ぶためのボタン-->
<button class="button" onclick="question()">登録する</button>
<script>
    function question() {
        window.location.href = "/quest/quest_table.php";
    }
</script>