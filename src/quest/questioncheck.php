<!--チェックするためのphp-->
<?php
//ヘッダー
require_once '../header.php';

$temp = $_POST['question'];

//前のページに戻るボタン
echo '<form method="POST" action="question.php">';
echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">戻る</a>';
echo '</form>';

//中身の判定
if (empty($temp)) {
    echo "入力されていません";
} else {
    //ここでsqlに登録する
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
        // INSERT文の例
        $sql = "INSERT INTO teamdb_table (id, sample)
VALUES ('11', '値2')";

        if ($conn->query($sql) === TRUE) {
            echo "新しいレコードが正常に挿入されました";
        } else {
            echo "エラー: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        echo '<form method="POST" action="/teammain.php">';
        echo '<input type="submit" value="登録完了">';
        echo '</form>';
    }
}
//フッター
require_once '../footer.php';
