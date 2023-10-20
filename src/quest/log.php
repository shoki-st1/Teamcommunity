<!--一覧の表示と登録のボタン-->
<?php
//ファイルの呼び出し
require(__DIR__ . '/../data/sqldata.php');
//テーブルで表示させる
$SqlTask = new SqlData();

echo '<h3>内容一覧</h3>';

// SELECTクエリの例
echo "<center><table border='1'>";
echo "<tr>
            <th>ユーザid</th>
            <th>入力内容</th>
            <th>開始日</th>
            <th>終了日</th>
            <th>削除</th>
        </tr>";

//ユーザIDの利用
$userId = "test";
//idを元に一覧を表示
$SqlTask->gettask($userId);

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