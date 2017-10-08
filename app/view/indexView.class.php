<?php
//view类，存入页面相关的方法，采用“面向对象”
namespace view;

//header("Contant-type:text/html;charset=utf-8");

class indexView{

    static public function display($date,$filename){   
        
        if(!empty($filename)&&!empty($date)) {
            //echo $data;
            //1.先填入date 2.再显示页面
           include_once("/wamp/www/app/view/pages/$filename");
        }else{
            echo "Error:not find the view'file![ErrorPath:indexView.class.php]";
        }
    }
}

?>