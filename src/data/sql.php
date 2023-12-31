<?php
//親クラスファイル
class Data
{
    protected $pdo;

    //コンストラクタ
    public function __construct()
    {
        //データベースの情報の持ち込み
        require_once __DIR__ . '/config.php';

        //接続
        try {
            //ホスト、データベース名、文字、sql操作のuserとpassword
            $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        } catch (Exception $e) {
            //エラー
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
