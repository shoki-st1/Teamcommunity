<!--一覧の表示と登録のボタン-->
<?php
require_once '../config.php';
echo '<h3>内容一覧</h3>';

// MySQLに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーをチェック
if ($conn->connect_error) {
    die("データベースへの接続に失敗しました: " . $conn->connect_error);
} else {
    // SELECTクエリの例
    $sql = "SELECT * FROM $dbtable";
    $result = $conn->query($sql);

    echo "<center><table border='1'>";
    echo "<tr>
            <th>ユーザid</th>
            <th>入力内容</th>
            <th>削除</th>
        </tr>";

    if ($result->num_rows > 0) {
        // 結果を表示
        while ($row = $result->fetch_assoc()) {
            //テーブルで表示させる
            echo "<tr>
            <td>" . $row["userid"] . "</td>
            <td>" . $row["password"] . "</td>
            <td><a href='delete.php?id=" . $row["userid"] . "'>削除</a>
            </tr>";
        }
    } else {
        echo "データがありません";
    }

    echo "</table></center>";
    $conn->close();

    echo '<form method="POST" action="/progressmain.php">';
    echo '<input type="submit" value="メインに戻る">';
    echo '</form>';
}
?>

<!--登録へ飛ぶためのボタン-->
<button class="button" onclick="question()">登録する</button>
<script>
    function question() {
        window.location.href = "/quest/quest_table.php";
    }
</script>