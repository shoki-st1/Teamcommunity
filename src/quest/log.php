<!--一覧の表示と登録のボタン-->
<?php
echo '<h3>内容一覧</h3>';

// SELECTクエリの例
echo "<center><table border='1'>";
echo "<tr>
            <th>ユーザid</th>
            <th>入力内容</th>
            <th>開始日</th>
            <th>終了日</th>
            <th>削除</th>
        </tr>";


//テーブルで表示させる
// echo "<tr>
//             <td>" . $row["userid"] . "</td>
//             <td>" . $row["password"] . "</td>
//             <td><a href='delete.php?id=" . $row["userid"] . "'>削除</a>
//     </tr>";

echo "</table></center>";

echo '<form method="POST" action="/progressmain.php">';
echo '<input type="submit" value="メインに戻る">';
echo '</form>';
?>

<!--登録へ飛ぶためのボタン-->
<button class="button" onclick="question()">登録する</button>
<script>
    function question() {
        window.location.href = "/quest/quest_table.php";
    }
</script>