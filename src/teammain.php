<!--ヘッダー-->
<?php
require_once 'header.php';
?>


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