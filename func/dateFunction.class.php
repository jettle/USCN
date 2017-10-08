<?php
/*
**this is operate-class about database.
*/
namespace func;

class dateFunction{
//About model link into DB:
	//1.how to make the data insert DB?
	static public function insert(){

        
	}
	//2.how to delect the data from DB?
	static public function delect(){


	}
	//3.how to change the data for DB?
	static public function change(){


	}
	//4.how to check the data for DB?
	static public function check(){


	}

//从数据库中获取数据存储于数组中
	 public static function Home_page_Out(){

       //1.连接数据库并选择数据库
       include_once("/wamp/www/core/db/dbconnection.class.php");
       $con = \db\dbconnection::getDBConnection();
       //选择数据库  "test"
       mysqli_select_db($con,"test") or die ("无法选中数据库test:".mysql_error());
       //以utl8的格式输出
       mysqli_query($con,'set names utf8');

       $sql = "SELECT title,express FROM `home_new` ";
       $result = mysqli_query($con,$sql);
       /*
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $date = array('title' => $row["title"], 'express' => $row["express"]);
       */
       $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
       foreach ($row as $key => $row) {
       	  //$row["title"];
          $dateArray = array('title' => $row["title"], 'express' => $row["express"]);
          $date[] = $dateArray;
          //以上，$dateArray[0]['title']就是id=1的title.
       }
       
       //释放结果集
       mysqli_free_result($result);
       //关闭数据库连接
       mysqli_close($con);
       return $date;
}
	//以utl8的格式输出
//mysqli_query($con,'set names utf8');

//header("Content-type: text/html;charset=utf-8");

/*
//hot_new.5.title《函数封装》
static public function Home_page_Title_Out($id){
    
	include("/wamp/www/app/model/indexModel.class.php");
	include("/wamp/www/app/model/config.php");
	$con = \model\indexModel::connect_mysql($host,$usename,$password);
	//选择数据库  "test"
    mysqli_select_db($con,"test") or die ("无法选中数据库test:".mysql_error());
    //以utl8的格式输出
    mysqli_query($con,'set names utf8');
	$sql = "SELECT title FROM `home_new` WHERE id='$id' ";
	$num = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($num,MYSQLI_ASSOC);
	printf($row["title"]);
    mysqli_close($con);
}

/*
*
**数据表hot_new中第一行express字段
*/
/*
//hot_new.5.express《函数封装》
static public function Home_page_Express_Out($id){

	include("ConnectMysql.php");
	$sql = "SELECT express FROM home_new WHERE id='$id'";
	$num = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($num,MYSQLI_ASSOC);
	mysqli_close($con);
	printf($row["express"]);
}
/*
**数据表hot_new中第一行contant字段
*/
/*
//《函数封装》
static public function Home_page_Contant_Out($id){

	include("ConnectMysql.php");
	$sql = "SELECT contant FROM home_new WHERE id='$id'";
	$num = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($num,MYSQLI_ASSOC);
	mysqli_close($con);
	echo($row["contant"]);
}
/*
**数据表hot_new中第一行auther字段
*/
/*
//《函数封装》
static public function Home_page_Auther_Out($id){

	include("ConnectMysql.php");
	$sql = "SELECT auther FROM home_new  WHERE id='$id'";
	$num = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($num,MYSQLI_ASSOC);
	mysqli_close($con);
	printf($row["auther"]);
}
/*
**数据表hot_new中第一行time字段
*/
/*
//《函数封装》
static public function Home_page_Time_Out($id){

	include("ConnectMysql.php");
	$sql = "SELECT time FROM home_new  WHERE id='$id'";
	$num = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($num,MYSQLI_ASSOC);
	mysqli_close($con);
	printf($row["time"]);
}
*/
}

?>