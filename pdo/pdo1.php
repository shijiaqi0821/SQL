<?php
$user="root";
$pass="root";

$dbh=new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

$id1=$_GET['id'];
echo "未处理的参数".$id1;echo "<br>";

$id2=intval($id1);
echo "处理的参数".$id2;echo "<br>";
//sql语句
//$sql="select * from p_users";
$sql="select * from p_users where id={$id2}";

//执行sql语句
$res=$dbh->query($sql);

//循环遍历sql语句
while($row=$res->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";print_r($row);echo "</pre>";
    echo "<br>";
}

?>