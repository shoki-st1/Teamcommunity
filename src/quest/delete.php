<!--削除のphp-->
<?php
echo '<center>';
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $server = "db";
    $username = "root";
    $pass = "root";
    $dbname = "teamdb";

    $conn = new mysqli($server, $username, $pass, $dbname);

    if ($conn->connect_error) {
        die("失敗" . $conn->connect_error);
    } else {
        $id = $_GET['id'];
        $sql = "delete from teamdb_table where id = $id";

        if ($conn->query($sql) === TRUE) {
            echo $id . "は削除されました";
        } else {
            echo "エラー" . $conn->error;
        }
    }

    $conn->close();

    echo '<form method="POST" action="/quest/log.php">';
    echo '<input type="submit" value="戻る">';
    echo '</form>';
    echo '</center>';
}
