<?php
//受け取り代入(エスケープ処理)
$userId = htmlspecialchars($_POST['id']);
$password = htmlspecialchars($_POST['pass']);

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
    //確認画面
    echo '<h1>登録内容</h1>';
    echo '<center><table border=1><tr>';
    echo '<th>ユーザーID：' . $userId . '</th></tr>';
    echo '<tr><th>パスワード：';
    for ($i = 0; $i < strlen($password); $i++) {
        //文字数分空白を出力
        echo '?';
    }
    echo '</th></tr>';
    echo '</table></center>';
    echo "<a href=login.php>ユーザ登録に成功しました。";
} else {
    echo "<script>alert('既に登録されているIDです。')</script>";
    echo '<script type="text/javascript">window.location = "adduserlogin.html"</script>';
}
