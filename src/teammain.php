<!--ヘッダー-->
<?php
require_once 'header.php';
?>

<!--JS-->
<script>
    function goQuestion() {
        print("quest");
    }

    function goGroup() {
        print("grop");

    }

    function goTalk() {
        print("talk");
    }

    function goLog() {
        print("log");
    }
</script>


<!--下の表示部分-->
<?php
// //sqlの呼び出し
// $pdo = new PDO('mysql:dbname=teamdb;host=db;', 'root', 'root');
// $pdo->query('SET NAMES utf8;');

// $stmt = $pdo->prepare('select * from team_table;');
// $stmt->execute();

// $user = $stmt->fetch();
// echo $user['id'];
// unset($pdo);

echo '<br>';



?>


<br>
<br>

<!--質問へ飛ぶためのボタン-->
<button class="button" onclick="question()">質問する</button>
<script>
    function question() {
        window.location.href = "./quest/question.php";
    }
</script>

<!--フッター-->
<?php
require_once 'footer.php';
?>