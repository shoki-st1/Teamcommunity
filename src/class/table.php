<?php
require_once 'sqldata.php';

class Data extends  Sqldata
{
    public function member()
    {
        $sql = "select * form $dbtable where id = ?";
        $stmt = $this->query($sql, []);
    }
}
