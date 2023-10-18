<?php
//親クラスの読み込み
require_once __DIR__ . '/sql.php';

//継承
class SqlData extends Data
{
    //userの追加
    public function adddata($userId, $password)
    {
        $sql = "select * from userdb_table where userid = ?";
        $stmt = $this->query($sql, [$userId]);
        $user_Id = $stmt->fetch();
        if ($user_Id) {
            //既に同じuserIdがあるので登録ができない表示
            echo "既に登録されているidです";
        } else {
            //新規のユーザ登録
            $sql = "insert into userdb_table values(?,?)";
            $result = $this->exec($sql, [$userId, $password]);
        }
    }

    //task一覧(log)の部分 表示
    public function gettask($userId)
    {
        $sql = "select * from task_table where userid = ?";
        $stmt = $this->query($sql, [$userId]);
        $task = $stmt->fetchAll();
        return $task;
    }

    //task削除
    public function deltask($userId)
    {
        $sql = "delete from task_table where userid = ?";
        $result = $this->exec($sql, [$userId]);
    }
}