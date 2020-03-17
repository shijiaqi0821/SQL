<?php
//连接mysql数据库-----mysqli
$mysqli = new mysqli("localhost", "root", "123456abc", "1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";echo "<hr>";

//将uid写活--强制转成整型（intval）
echo "未转前的参数-->".$_GET['name'];echo "<br>";
$name=$_GET['name'];
echo "转后的参数-->".$name;echo "<br>";

//sql语句
$sql="select * from p_users where user_name='{$name}'";
echo $sql;echo "<br>";

//执行sql语句
$res=$mysqli->query($sql);

//使用while循环遍历
while($row=$res->fetch_assoc()){
    echo "<pre>";print_r($row);echo "</pre>";
}
?>