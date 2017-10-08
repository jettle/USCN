<?php
namespace model;
//header("Contant-type:text/html;charset=utf-8");
class indexModel{

    static public function index(){

      //模仿已经获取数据库相关数据
    	//$str = "ths is data come from DB";
    	//return $str;
      /*
    	$str = "this is data come from DB of index";
    	return $str;
      */
      /*
      include_once("/wamp/www/func/dateFunction.class.php");
      $date = \func\dateFunction::Home_page_Title_Out(1);
      return $date;
      */
      include_once("/wamp/www/func/dateFunction.class.php");
      $date = \func\dateFunction::Home_page_Out();
      return $date;
    }
}

?>