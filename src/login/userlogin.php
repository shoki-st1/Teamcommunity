<!--0J04007大江祥暉-->
<!--通常ログイン時のphp処理-->
<?php
//受け取り代入
$userId = $_POST['id'];
$password = $_POST['pass'];

//データベースの情報をファイルから呼び出し
require(__DIR__ . '/../data/sqldata.php');
//オブジェクト生成
$SqlUser = new SqlData();

//実行フラグ
$userdata = $SqlUser->login($userId, $password);

//idとpasswordを送り、判定の結果がTRUEならOK
if ($userdata) {
    //次のページへ
    echo '<script type="text/javascript">window.location = "../progressmain.php"</script>';
} else {
    //ページを変える
    echo "<script>alert('ユーザIDまたはパスワードが違います。')</script>";
    echo '<script type="text/javascript">window.location = "userlogin.html"</script>';
}

?>