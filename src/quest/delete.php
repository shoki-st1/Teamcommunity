<!--タスク削除のphp-->
<?php
echo '<center>';

if (isset($_GET["id"])) {
    require 'sql.php';
    $id = $_GET['id'];
    $sql = "delete from userdb_table where id = ?";
    //関数に送る
    dboperation($sql, $id);
    echo $id . "は削除されました";
} else {
    echo "idが存在しませんエラー";
}

echo '<form method="POST" action="/quest/log.php">';
echo '<input type="submit" value="戻る">';
echo '</form>';
echo '</center>';
