<?php
//受け取り代入
$userId = h($_POST['id']);
$password = h($_POST['pass']);

//データベースの情報をファイルから呼び出し
require(__DIR__ . '/../data/sqldata.php');
//オブジェクト生成
$SqlUser = new SqlData();
//idとpasswordを送る
$resultflag = $SqlUser->adduser($userId, $password);

if ($resultflag == TRUE) {
    echo "<a href=userlogin.html>ユーザ登録に成功しました。";
} else {
    echo "<script>alert('既に登録されているIDです。')</script>";
    echo '<script type="text/javascript">window.location = "adduserlogin.html"</script>';
}
