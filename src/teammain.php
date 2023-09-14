<!--ヘッダー-->
<?php
require_once 'header.php';
?>

<!--タイトル-->
<h1>メイン</h1>
<hr>
<!--各機能選択ボタンそれぞれ-->
<div class="button-select">
    <!--再帰-->
    <!-- <button class="button" name="question" onclick="goQuestion()">質問一覧</button>

        <button class="button" name="group" onclick="goGroup()">グループ</button>

        <button class="button" name="talk" onclick="goTalk()">チャット</button> -->

    <button class="button" name="log" onclick="goLog()">履歴</button>
</div>
<br>

<!--JS-->
<script>
    // function goQuestion() {
    //     window.location.href = "/quest/questDis.php";
    // }

    // function goGroup() {
    //     window.location.href = "/quest/group.php";
    //     document.write("grop");

    // }

    // function goTalk() {
    //     window.location.href = "./quest/talk.php";
    //     document.write("talk");
    // }

    function goLog() {
        window.location.href = "./quest/log.php";
    }
</script>

<!--質問へ飛ぶためのボタン-->
<button class="button" onclick="question()">質問する</button>
<script>
    function question() {
        window.location.href = "/quest/question.php";
    }
</script>

<!--フッター-->
<?php
require_once 'footer.php';
?>