<?php
//セッション
session_start();
//受け取り代入(エスケープ処理)
$userId = htmlspecialchars($_POST['id']);
$password = htmlspecialchars($_POST['pass']);

//データベースの情報をファイルから呼び出し
require(__DIR__ . '/../data/sqldata.php');
//オブジェクト生成
$SqlUser = new SqlData();
//ログイン判定実行
$userdata = $SqlUser->login($userId, $password);

//idとpasswordを送り、判定の結果があるなら進む
//$userdata['userid']（useridにしているのはデータベースのカラムの名前なので固定）
//変数名とデータベースの名前は気を付ける事
if (isset($userdata['userid'])) {
    //セッションでユーザーIDを送る
    $_SESSION['userId'] = $userdata['userid'];
    //メイン画面
    header('Location: ../progressmain.php');
    exit();
} else {
    //違う場合(エラーで再帰)
    $_SESSION['login_error'] = "ユーザID、パスワードを確認";
    header('Location: /login/login.php');
    exit();
}
