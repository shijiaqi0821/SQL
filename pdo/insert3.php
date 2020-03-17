<?php
$user="root";
$pass="root";

$dbh=new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

//sql语句
$sql="insert into p_users(`user_name`,`email`) values(?,?)";

$name="lisa";
$email="lisa@qq.com";

//PDO--预处理
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);

//执行sql语句
$stmt->execute();

$id=$dbh->lastInsertId();
echo "自增数：".$id;echo "<br>";

?>