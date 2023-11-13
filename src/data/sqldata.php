<?php
//親クラスの読み込み
require_once __DIR__ . '/sql.php';

//継承
class SqlData extends Data
{
    //userの追加
    public function adduser($userId, $password)
    {
        //idの検索
        $sql = "select * from user_table where userid = ?";
        $stmt = $this->query($sql, [$userId]);
        $user_Id = $stmt->fetch();
        //idの判定
        if ($user_Id) {
            //既に同じuserIdがある場合はfalseを返し登録させない
            return FALSE;
        } else {
            //新規のユーザ登録(idとpasswordを登録)
            //パスワードのハッシュ化
            $password = hash_hmac('sha512', $password, 'secret', false);
            $sql = "insert into user_table (userid,password) values(?,?)";
            $result = $this->exec($sql, [$userId, $password]);
            //正常に登録
            return TRUE;
        }
    }

    //userログインの判定
    public function login($userId, $password)
    {
        //ハッシュ化
        $password = hash_hmac('sha512', $password, 'secret', false);
        //id、passwordが一致しているか
        $sql = "select * from user_table where userid = ? and password = ?";
        $stmt = $this->query($sql, [$userId, $password]);
        $user = $stmt->fetch();

        //あるか返す
        if ($user) {
            return $user;
        } else {
            return false;
        }
    }


    //task一覧(log)の部分 表示
    public function gettask($userId)
    {
        //ユーザのみ抽出
        $sql = "select * from task_table where userid = ?";
        $stmt = $this->query($sql, [$userId]);

        //表、表示
        //削除へ登録した日を送る
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td>" . $row["userid"] . "</td>
                <td>" . $row["task"] . "</td>
                <td>" . $row["startday"] . "</td>
                <td>" . $row["finday"] . "</td>
                <td><a href='delete.php?date=" . $row["date"] . "'>削除</a>
            </tr>";
        }
    }

    //カレンダー用
    public function getcalendertask($userid)
    {
        //ユーザのみ抽出
        $sql = "select * from task_table where userid = ?";
        $stmt = $this->query($sql, [$userid]);
        return $stmt->fetchAll();
    }

    //task追加
    public function addtask($Nowdate, $userId, $task, $startday, $finday)
    {
        //sql操作命令
        $sql = "insert into task_table (date,userid,task,startday,finday) values(?,?,?,?,?)";
        $result = $this->exec($sql, [$Nowdate, $userId, $task, $startday, $finday]);
    }

    //task削除
    public function deltask($date)
    {
        $sql = "delete from task_table where date = ?";
        $result = $this->exec($sql, [$date]);
    }
}
