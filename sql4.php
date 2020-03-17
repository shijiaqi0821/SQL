<?php
//连接mysql数据库-----mysqli
$mysqli = new mysqli("localhost", "root", "root", "1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";echo "<hr>";

//$name="lisi";
$name1=$_GET['name'];
echo "未经处理的参数-->".$name1;echo "<hr>";
$name2=addslashes($name1);       //addslashes()   htmlspecialchars()  都可以
echo "处理后的参数-->".$name2;echo "<hr>";

//sql语句  select * from p_users user_name="";
// $sql='select * from p_users where user_name="'.$name.'"';
$sql="select * from p_users where user_name='{$name2}'";
echo "sql-->".$sql;echo "<hr>";

//执行sql语句
$res=$mysqli->query($sql);

//使用while循环遍历
while($row=$res->fetch_assoc()){
    echo "<pre>";print_r($row);echo "</pre>";
}
?>