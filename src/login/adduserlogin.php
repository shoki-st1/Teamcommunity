<?php
//受け取り代入
$userId = $_POST['id'];
$password = $_POST['pass'];

//文字数の判定
if (strlen($password) < 6 || strlen($password) > 20) {
    header('Location: /adduserlogin.html');
    exit();
}

//データベースの情報をファイルから呼び出し
require(__DIR__ . '/../data/sqldata.php');
//オブジェクト生成
$SqlUser = new SqlData();
//idとpasswordを送る
$resultflag = $SqlUser->adduser($userId, $password);


//フラグ判定
if ($resultflag == TRUE) {
    echo "<a href=login.php>ユーザ登録に成功しました。";
} else {
    echo "<script>alert('既に登録されているIDです。')</script>";
    echo '<script type="text/javascript">window.location = "adduserlogin.html"</script>';
}
