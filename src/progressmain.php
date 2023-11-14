<?php
//リファクタリング
//セッションの開始
session_start();

//セッションがあるかの確認、無ければログイン画面に戻る
if (isset($_SESSION['userId'])) {
    //ユーザーのIdをセッションから受け取り
    $userId = $_SESSION['userId'];
} else {
    header('Location: /login/login.php');
    exit();
}

//ヘッダー
require_once 'header.php';
//ユーザーの表示
echo '<center>ID：' . htmlspecialchars($userId) . '</center>';
?>

<!--機能選択ボタン-->
<div class="button-select">
    <!--再帰-->

    <!--やることの一覧-->
    <button class="button" name="log" onclick="goLog()">一覧</button>
    <!--ログアウト-->
    <button class="button" name="logout" onclick="gologout()">ログアウト</button>
</div>
<br>

<!--JS-->
<script>
    //ログアウトのボタン
    function gologout() {
        window.location.href = "/login/logout.php";
    }

    //リスト一覧のボタン
    function goLog() {
        window.location.href = "./quest/log.php";
    }
</script>


<?php
//カレンダー呼び出し
require_once __DIR__ . '/TaskCalender.php';

//フッター
require_once 'footer.php';
?>