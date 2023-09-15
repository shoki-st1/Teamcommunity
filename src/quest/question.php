<?php
//ヘッダー
require_once '../header.php';
?>

<h1>やることを入力してください</h1>
<!--登録をする画面-->
<form method="POST" action="questioncheck.php">
    <input type="text" name="question" spellcheck="true" placeholder="100文字まで入力可能" maxlength="100">
    <button type="submit" name="insertButton">登録</button>
</form>

<?php
//フッター
require_once '../footer.php';
?>