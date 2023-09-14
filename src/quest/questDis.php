<?php
//全ての質問
$servername = "db"; // Dockerホスト
$username = "root";
$password = "root"; // MySQLルートユーザーのパスワード

// データベースに接続
$conn = new mysqli($servername, $username, $password);

// 接続を確認
if ($conn->connect_error) {
    die("データベースに接続できませんでした: " . $conn->connect_error);
}
echo "データベースに接続しました";

// ここでクエリを実行できます

// 接続を閉じる
$conn->close();
