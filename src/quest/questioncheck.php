<!--チェック、登録するためのphp-->
<?php
//ヘッダー
//require_once '../header.php';

//テキスト内容
$temp = $_POST['question'];
echo "<h3>登録内容</h3>";
echo $temp;
echo "<br>";

//中身の判定
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["insertButton"])) {
    //$nowdate = date('Y-m-d H:i:s');
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
        $sql = "INSERT INTO teamdb_table (sample)
        VALUES ('$temp')";

        if ($conn->query($sql) === TRUE) {
            echo "正常に挿入されました";
        } else {
            echo "エラー: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        echo '<form method="POST" action="/teammain.php">';
        echo '<input type="submit" value="メインに戻る">';
        echo '</form>';
    }
} else {
    //前のページに戻るボタン
    echo '<a href="/quest/question.php">戻る</a>';
}
//フッター
//require_once '/footer.php';
?>