<?php
   //解析URL，获取参数
   if(!empty($_REQUEST["control"])&&!empty($_REQUEST["method"])){
       
       //引用核心函数库 
       include_once("/wamp/www/func/coreFunction.class.php");
       //选择控制器
       \func\coreFunction::choose_control($_REQUEST["control"],$_REQUEST["method"]);
   }
   else{
       //引用核心函数库 
       include_once("/wamp/www/func/coreFunction.class.php");
       //选择控制器
       $control = "indexControl";
       $method = "index";
       \func\coreFunction::choose_control($control,$method);
   }

?>

