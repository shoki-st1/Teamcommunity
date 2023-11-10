<?php
//ヘッダー
require_once 'header.php';

//session_start();
//セッションがあるかの確認
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    echo '<center>ようこそ' . $userId . '</center>';
} else {
    header('Location: /login/login.php');
    exit();
}
//カレンダー呼び出し
require_once __DIR__ . '/TaskCalender.php';
?>

<!--機能選択ボタン-->
<div class="button-select">
    <!--再帰-->
    <!-- <button class="button" name="group" onclick="goGroup()">グループ</button>-->

    <!--やることの一覧-->
    <button class="button" name="log" onclick="goLog()">一覧</button>
</div>
<br>

<!--JS-->
<script>
    // function goGroup() {
    //     window.location.href = "/quest/group.php";
    //     document.write("grop");
    // }

    //リスト一覧のボタン
    function goLog() {
        window.location.href = "./quest/log.php";
    }
</script>

<!--フッター-->
<?php
require_once 'footer.php';
?>