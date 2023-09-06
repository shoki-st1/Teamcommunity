<!--チェックするためのphp-->
<?php
//ヘッダー
require_once 'header.php';

$temp = $_POST['question'];

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
require_once 'footer.php';
