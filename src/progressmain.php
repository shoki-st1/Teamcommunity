<!--ヘッダー-->
<?php
require_once 'header.php';
?>

<!--タイトル-->
<h1>メイン</h1>
<hr>

<!--カレンダーなどの処理-->
<!--データベースから参照したデータを取得し色付け処理-->
<tr>
    <th>月</th>
    <th>火</th>
    <th>水</th>
    <th>木</th>
    <th>金</th>
    <th>土</th>
    <th>日</th>
</tr>


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