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
$sqlflag = $SqlUser->login($userId, $password);
//idとpasswordを送り、判定の結果がTRUEならOK
if ($sqlflag) {
    //次のページへ
    echo "<a href='../progressmain.php'>ログイン完了</a>";
} else {
    //ページを変える
    echo "既にあるのかもしれません";
}

?>