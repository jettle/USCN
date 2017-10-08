<?php 
//header("Content-type: text/html;charset=utf-8");
//引用配置文件（里面包括：数据库的登陆信息）
namespace db;

class dbconnection{ 

public static function getDBConnection(){
//引用配置文件（里面包括：数据库的登陆信息）
 include_once("\wamp\www\core\db\config.php");
//连接Mysql数据库
$con=mysqli_connect($host,$usename,$password); 
if (mysqli_connect_errno($con)) 
{ 
    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
}
return $con;//return the character of connect.

}
/*
*1.测试部分（校验函数）
*/
/*
//执行SQL语句
$sql = "SELECT title FROM hot_new ";
$num = mysqli_query($con,$sql);
//校验函数，可忽略
/*
if($num = mysqli_query($con,$sql)){
	
	echo("run successfull!");

}
else{
	echo("run error!");
}

// 关联数组
$row=mysqli_fetch_array($num,MYSQLI_ASSOC);

printf ($row["title"]);

/*
mysqli_close($con);
*/
}
?>

