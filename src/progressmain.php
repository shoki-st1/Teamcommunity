<!--ヘッダー-->
<?php
require_once 'header.php';
?>

<!--タイトル-->
<h1>メイン</h1>
<hr>

<!--カレンダーなどの処理-->




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