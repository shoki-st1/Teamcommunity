<!--ヘッダー-->
<?php
require_once 'header.php';
?>

<!--タイトル-->
<h1>メイン</h1>
<hr>
<!--各機能選択ボタンそれぞれ-->
<form method="POST" action="teammain.php">
    <!--再帰-->
    <input type="submit" name="profile" value="プロフィール">
    <br>
    <input type="submit" name="question" value="質問一覧">
    <br>
    <input type="submit" name="group" value="グループ">
    <br>
    <input type="submit" name="talk" value="チャット">
    <br>
    <input type="submit" name="log" value="履歴">
</form>
<br>
<hr>

<!--下の表示部分-->
<?php
if ($_POST['profile']) {
    echo "ぷろ";
} else if ($_POST['question']) {
    echo "質問";
} else if ($_POST['group']) {
    echo "グループ";
} else if ($_POST['talk']) {
    echo "話";
} else if ($_POST['log']) {
    //sqlの呼び出し
    echo "履歴";
} else {
    echo "エラー";
}
?>


<br>
<br>
<!--質問へ飛ぶためのボタン-->
<form method="POST" action="question.php">
    <input type="submit" value="質問する">
</form>

<!--フッター-->
<?php
require_once 'footer.php';
?>