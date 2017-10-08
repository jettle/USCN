<?php
//Control控制器,获取URL里的参数来选择具体的业务逻辑（即选择对应的方法）
namespace control;

header("Contant-type:text/html;charset=utf-8");
class indexControl{

public static function index(){
        //using the coreFunction
	    include_once("/wamp/www/func/coreFunction.class.php");
        //Choosing the 'model'
        /*
         *此处通过程序员的编码指定相应的Model及其方法。
         *如何选择Model及Model's Method?
         *a.引入“核心函数库”：
         *      <?php include_once("/wamp/www/func/coreFunction.class.php");?>
         *b.调用其中的choose_model($model,$method)方法。
         */
        $model = "indexModel";
        $method = "index";
        $date = \func\coreFunction::choose_model($model,$method);
        //if the data of model is not empty,please,Start to choose a View.
       if(!empty($date)){
       	//Choosing the 'view'
        /*
         *此处通过程序员的编码指定相应的View及其方法。
         *如何选择View及View's Method/filename(视图文件)/data(控制器传给视图的数据)?
         *a.引入“核心函数库”：
         *      [ include_once("/wamp/www/func/coreFunction.class.php");]
         *b.调用其中的choose_view($view,$method,$data,$filename)方法。
         */
        $view = "indexView";
        $method = "display";
        $filename = "index.html";
        \func\coreFunction::choose_view($view,$method,$date,$filename);
       }
       else
       {
       	  echo ("Notice:no find data come from DB that is used!!!");
       }
       
       //进行同级目录下的php文件引用,为解决文件引用问题。
       //include_once("test.php");
	}

}
?>