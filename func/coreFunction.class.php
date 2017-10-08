<?php
namespace func;
//header("Contant-type:text/html;charset=utf-8");
class coreFunction{

	/*
	**This is important function for library that saved a lot of function.
	*/
    //how to choose one of the control for user?
	static public function choose_control($control,$method){

        include("/wamp/www/app/control/$control.class.php");
        //$m =new $control();
        \control\indexControl::$method();
	} 
    /*
    **how to choose one of the model for control?
    */
	static public function choose_model($model,$method){
        
        include_once("/wamp/www/app/model/$model.class.php");
        //this function will return a data
        $date = \model\indexModel::$method();    
        return $date;
	}
	/*
	**how to choose one of the view for control?
	*/
	static public function choose_view($view,$method,$data,$filename){
        //echo $data;
        include_once("/wamp/www/app/view/$view.class.php");
        //geting the argu 
        \view\indexView::$method($data,$filename); 
	}
	
}
?>