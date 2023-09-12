<!--チェックするためのphp-->
<?php
//ヘッダー
require_once '../header.php';

$temp = $_POST['question'];

//前のページに戻るボタン
echo '<form method="POST" action="question.php">';
echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">戻る</a>';
echo '</form>';

//中身の判定
if (empty($temp)) {
    echo "入力されていません";
} else {
    echo  $temp;
    //ここでsqlに登録する
    echo '<form method="POST" action="teammain.php">';
    echo '<input type="submit" name="addquestion" value="登録完了">';
    echo '</form>';
}

//フッター
require_once '../footer.php';
