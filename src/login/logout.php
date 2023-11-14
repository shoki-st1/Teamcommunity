<?php
//セッションの開始
session_start();
//セッションの削除
session_destroy();
header('Location: /login/login.php');
exit();
