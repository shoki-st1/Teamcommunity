<?php
//ヘッダー
require_once '../header.php';

?>

<h1>質問を入力してください</h1>
<!--質問をする画面-->
<form method="POST" action="questioncheck.php">
    <input type="textarea" name="question" spellcheck="true" placeholder="100文字まで入力可能" maxlength="100">
    <input type="submit" value="送信">
</form>

<?php
//フッター
require_once '../footer.php';
?>