<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["buttonID"])) {
        $buttonID = $_POST["buttonID"];
        if ($buttonID === "1") {
            echo "プロフィールボタンがクリックされました。";
        } elseif ($buttonID === "2") {
            echo "質問一覧ボタンがクリックされました。";
        } elseif ($buttonID === "3") {
            echo "グループボタンがクリックされました。";
        } elseif ($buttonID === "4") {
            echo "チャットボタンがクリックされました。";
        } elseif ($buttonID === "5") {
            echo "履歴ボタンがクリックされました。";
        } else {
            echo "未知のボタンがクリックされました。";
        }
    } else {
        echo "ボタンIDがPOSTリクエストに含まれていません。";
    }
}
