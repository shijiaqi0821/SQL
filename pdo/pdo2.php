<?php
/**
 * PDO----预处理
 */

$user="root";
$pass="root";

$dbh=new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

$id=$_GET['id'];
echo "未处理的参数".$id;echo "<br>";

//PDO--预处理
$stmt = $dbh->prepare("select * from p_users where id=?");

//绑定参数
$stmt->bindParam(1,$id);

//执行sql语句
$stmt->execute();

//循环遍历sql语句
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";print_r($row);echo "</pre>";
    echo "<br>";
}

?>