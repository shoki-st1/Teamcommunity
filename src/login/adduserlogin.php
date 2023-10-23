<?php
//受け取り代入
$userId = $_POST['id'];
$password = $_POST['pass'];

//データベースの情報をファイルから呼び出し
require(__DIR__ . '/../data/sqldata.php');
//オブジェクト生成
$SqlUser = new SqlData();
//idとpasswordを送る
$resultflag = $SqlUser->adduser($userId, $password);

if ($resultflag == TRUE) {
    echo "<a href=userlogin.html>ユーザ追加に成功しました。";
} else {
    echo "失敗?";
}
