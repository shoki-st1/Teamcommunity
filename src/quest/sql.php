<?php
//sql実行のみの関数ファイル
class Data
{
    protected $pdo;

    //コンストラクタ
    public function __construct()
    {
        //データベースの情報の持ち込み
        require_once '../config.php';

        $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //接続の確認
        try {
            // $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'error' . $e->getMessage();
            die();
        }
    }

    //SELECTの実行メソッド
    protected function query($sql, $array_param)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array_param);
        return $stmt;
    }

    //INSERT,UPDATE,DELETE実行メソッド
    protected function exec($sql, $array_param)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array_param);
        return $stmt;
    }
}




//userの操作 insert,update,delete
// function dboperation($sql)
// {
//     //データベースの情報の持ち込み
//     require_once '../config.php';

//     // MySQLに接続
//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // 接続エラーをチェック
//     if ($conn->connect_error) {
//         die("データベースへの接続に失敗しました: " . $conn->connect_error);
//     } else {
//         //sqlの実行
//         if ($conn->query($sql) === TRUE) {
//             echo "正常に実行されました";
//         } else {
//             echo "エラー: " . $sql . "<br>" . $conn->error;
//         }
//     }
//     $conn->close();
// }

//taskの操作
