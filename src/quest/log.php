<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "teamdb";

// MySQLに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーをチェック
if ($conn->connect_error) {
    die("データベースへの接続に失敗しました: " . $conn->connect_error);
} else {
    // SELECTクエリの例
    $sql = "SELECT * FROM teamdb_table";
    $result = $conn->query($sql);

    echo "<center><table border='1'>";
    echo "<tr>
            <th>id</th>
            <th>入力内容</th>
            <th>削除</th>
        </tr>";

    if ($result->num_rows > 0) {
        // 結果を表示
        while ($row = $result->fetch_assoc()) {
            //テーブルで表示させる
            echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["sample"] . "</td>
            <td><a href='delete.php?id=" . $row["id"] . "'>削除</a>
            </tr>";
        }
    } else {
        echo "データがありません";
    }

    echo "</table></center>";
    $conn->close();

    echo '<form method="POST" action="/teammain.php">';
    echo '<input type="submit" value="メインに戻る">';
    echo '</form>';
}
