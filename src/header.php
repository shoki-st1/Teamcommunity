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
        <br>
        <button class="buttton" name="group" onclick="goGroup()">グループ</button>
        <br>
        <button class="button" name="talk" onclick="goTalk()">チャット</button>
        <br>
        <button class="button" name="log" onclick="goLog()">履歴</button>
    </div>
    <br>