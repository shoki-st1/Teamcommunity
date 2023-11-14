<?php
//セッションの開始
session_start();
//ログインのヘッダー読み込み
require_once __DIR__ . '/loginheader.php';

//エラーの判定と表示
if (isset($_SESSION['login_error'])) {
    echo '<p>' . $_SESSION['login_error'] . '</p>';
    unset($_SESSION['login_error']);
} else {
    echo '<p>利用するにあたってはログインしてください。</p>';
}
?>
<form method="POST" action="userlogin.php">
    <a>ユーザーID:</a>
    <input type="text" name="id" required><br>
    <a>パスワード:</a>
    <input type="password" name="pass" required><br>
    <button type="submit" name="POSTbutton">送信</button>
</form>
<a href="adduserlogin.html">
    <p>新規登録はこちらから</p>
</a>
<?php
require_once __DIR__ . '/../footer.php';
?>