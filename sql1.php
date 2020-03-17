<?php
//连接mysql数据库-----mysqli
$mysqli = new mysqli("localhost", "root", "root", "1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";echo "<hr>";

//sql语句
$sql="select * from p_users";

//执行sql语句
$res=$mysqli->query($sql);

//使用while循环遍历
while($row=$res->fetch_assoc()){
    echo "<pre>";print_r($row);echo "</pre>";
}
?>