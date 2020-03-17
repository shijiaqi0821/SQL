<?php
$user="root";
$pass="root";

$dbh=new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

//删除的sql语句
$sql = "delete from p_users where id=?";

//PDO---预处理
$stmt = $dbh->prepare($sql);

$id = $_GET['id'];
//绑定参数
$stmt->bindValue(1,$id);

//执行预处理语句
$stmt->execute();
$affect_row = $stmt->rowCount();
if($affect_row)
{
    echo '删除成功'.'<br>';
}
else
{
    echo '删除失败'.'<br>';
}
?>