<!--0J04007大江祥暉-->
<!--通常ログイン時のphp処理-->
<?php
//受け取り代入
$namestr = $_POST['name'];
$password = $_POST['pass'];

//データベースの情報をファイルから呼び出し
require_once '../config.php';

//データベース接続
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続に失敗しました");
} else {
    $sql = "SELECT * FORM $dbtable (password) VALUES ('$temp')";

    if ($conn->query($sql) === TRUE) {
        echo "ユーザログインが完了しました";
    } else {
        echo "エラー: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    //メイン画面に行くようにする
    echo '<button>';
    echo '';
    echo '</button>';
}


?>