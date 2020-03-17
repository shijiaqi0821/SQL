<?php
//连接mysql数据库-----mysqli
$mysqli = new mysqli("localhost", "root", "123456abc", "1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";echo "<hr>";

//将uid写活--强制转成整型（intval）
echo "未转前的参数".$_GET['uid'];echo "<br>";
$uid=intval($_GET['uid']);
echo "转后的参数".$uid;echo "<br>";

//sql语句
$sql="select * from p_users where id=".$uid;
echo $sql;echo "<br>";

//执行sql语句
$res=$mysqli->query($sql);

//使用while循环遍历
while($row=$res->fetch_assoc()){
    echo "<pre>";print_r($row);echo "</pre>";
}
?>