<!--0J04007大江祥暉-->
<!--ヘッダー-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!--キャッシュの削除入れるcssは絶対パス出ないと動かない-->
    <link rel="stylesheet" type="text/css" href="/teammain.css">
    <title>チームコム</title>
</head>

<body>
    <!--タイトル-->
    <h1>メイン</h1>
    <hr>
    <!--各機能選択ボタンそれぞれ-->
    <div class="button-select">
        <!--再帰-->
        <button class="button" name="question" onclick="goQuestion()">質問一覧</button>

        <button class="button" name="group" onclick="goGroup()">グループ</button>

        <button class="button" name="talk" onclick="goTalk()">チャット</button>

        <button class="button" name="log" onclick="goLog()">履歴</button>
    </div>
    <br>

    <!--JS-->
    <script>
        function goQuestion() {
            const mysql = require('mysql');

            const connection = mysql.createConnection({
                host: 'db', // Dockerホスト
                user: 'root',
                password: 'root', // MySQLルートユーザーのパスワード
                database: 'teamdb' // データベース名
            });

            connection.connect((err) => {
                if (err) {
                    console.error('データベースに接続できませんでした:', err);
                    return;
                }
                console.log('データベースに接続しました');

                // ここでクエリを実行できます

            });

            // ここでデータベース操作を行うコードを記述

            connection.end();


            // window.location.href = "/quest/quesDis.php";
        }

        function goGroup() {
            window.location.href = "/quest/group.php";
            document.write("grop");

        }

        function goTalk() {
            window.location.href = "./quest/talk.php";
            document.write("talk");
        }

        function goLog() {
            window.location.href = "./quest/log.php";
            document.write("log");
        }
    </script>