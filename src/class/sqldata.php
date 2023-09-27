<?php

class Sqldata
{
    protected $pdo;

    //コンストラクタ
    public function __construct()
    {
        //db設定のの呼び出し
        require_once '../config.php';
        $dsn = 'mysql:host=db;dbname=userdb;charset=utf=8';

        try {
            $this->pdo = new PDO($dsn, $username, $password);
        } catch (Exception $e) {
            echo 'error:' . $e->getMessage();
            die();
        }
    }

    //sqlの 命令
    protected function query($sql, $array_params)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array_params);
        return $stmt;
    }

    //sql実行
    protected function exec($sql, $array_params)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array_params);
        return $stmt;
    }
}
