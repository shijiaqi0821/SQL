<?php
$user="root";
$pass="root";

$dbh=new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

//sql语句
$sql="insert into p_users(`user_name`,`email`) values('zhangsan','zhangsan@qq.com')";

//执行sql语句
$res=$dbh->exec($sql);    //query() 只需要发出一次select语句可以建议使用   exec()  发出多次select语句建议使用
$id=$dbh->lastInsertId($res);
//var_dump($res);
echo "自增数：".$id;echo "<br>";

?>