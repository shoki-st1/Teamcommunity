<!--チェック、登録するためのphp-->
<?php
//テキスト内容
$temp = $_POST['question'];
echo "<h3>登録内容</h3>";
echo $temp;
echo "<br>";

//中身の判定
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["insertButton"]) && !(empty($temp))) {
    //$nowdate = date('Y-m-d H:i:s');
    //ここでsqlに登録する
    require_once '../config.php';

    // MySQLに接続
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 接続エラーをチェック
    if ($conn->connect_error) {
        die("データベースへの接続に失敗しました: " . $conn->connect_error);
    } else {
        // INSERT文の例
        //ここでsqlの文をsql.phpに送る
        $sql = "INSERT INTO $dbtable (password)
        VALUES ('$temp')";

        if ($conn->query($sql) === TRUE) {
            echo "正常に挿入されました";
        } else {
            echo "エラー: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        echo '<form method="POST" action="/log.php">';
        echo '<input type="submit" value="一覧に戻る">';
        echo '</form>';
    }
} else {
    //前のページに戻るボタン
    echo "入力をしてください";
    echo '<a href="/quest/quest_table.php">戻る</a>';
}
?>