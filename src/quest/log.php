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

    if ($result->num_rows > 0) {
        // 結果を表示
        while ($row = $result->fetch_assoc()) {
            //テーブルで表示させる
            echo "カラム1: " . $row["id"] . " - カラム2: " . $row["sample"] . "<br>";
        }
    } else {
        echo "結果がありません";
    }
    $conn->close();
}
