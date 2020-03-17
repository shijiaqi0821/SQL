<?php
$user="root";
$pass="root";

$dbh=new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

//更新的sql语句
$sql = "update p_users set user_name=? where id=?";

//PDO---预处理
$stmt = $dbh->prepare( $sql );
$name = "haha";
$id=$_GET['id'];

//绑定参数
$stmt->bindValue( 1, $name );
$stmt->bindValue( 2, $id);

//执行预处理语句
$stmt->execute();
$row = $stmt->rowCount();
if ($row) {
    echo '更新成功' . '<br>';
} else {
    echo '更新失败' . '<br>';
}
?>