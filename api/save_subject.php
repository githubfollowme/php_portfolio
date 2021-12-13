<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 * 
 */

$topic_array=['topic'=>$_POST['subject']];
insert('topics',$topic_array);
$topic_sql="select * from `topics` where `topic`='{$_POST['subject']}'";
echo $topic_sql;
$topic=$pdo->query($topic_sql)->fetch();


foreach($_POST['options'] as $opt){

    $opt_array=["opt"=>$opt,"topic_id"=>$topic['id']];
    insert('options',$opt_array);

}

?>