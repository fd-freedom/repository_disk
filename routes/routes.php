<?php 

/**
*  @description 网盘
*  @version  5.2.10 V
*  @author   Fd
*  @Company:自由网@
*  @email: nokialj18239055606@outlook.com 1315295001@qq.com
*  @date : 2019年3月1日20:36:56
*/  

 function ifCA($str){
	for ($i=0; $i < strlen($str) ; $i++) { 
		if (ord($str[$i]) <=90) {
		   $c['c'] =   substr($str,0,$i);
		   $c['f'] =   substr($str,$i,strlen($str));
		   return $c;
	     }
	}
 }

function Controller($c){
	$if_file  = file_exists("app/".$c['c'].'/controller/'.$c['c'].'.php');
	 if ($if_file ) {
	 	  require_once "app/".$c['c'].'/controller/'.$c['c'].'.php';
          include_once "config/config.php";
	   }else{

     include_once "config/config.php";
   
	       if ($config['de_bug']) {
	         exit('<span style="font-size:200px;margin-left: 50px;" >):</span> 
	<span style="margin-left: 100px;color:red;" >not find controller '.$c['c'].'</span>');
	       }
	   
	   }

       if ($if_file) {
             $file  = file_get_contents("app/".$c['c'].'/controller/'.$c['c'].'.php');
       }else{
          $file  = file_get_contents("app/".$config['c'].'/controller/'.$config['c'].'.php');
	 	  require_once "app/".$config['c'].'/controller/'.$config['c'].'.php';

       }
      
       if (strpos($file,$c['f'].'()')) {
         @eval('$obj = new '.$c['c'].'; $obj->'.$c['f']."();");
       }else{
          if ($config['de_bug']) {
       	  exit('<span style="font-size:200px;margin-left: 50px;" >):</span> 
	      <span style="margin-left: 100px;color:red;" >not find function '.$c['c'].'->'.$c['f'].'</span>');
         }else{
          
         	eval('$obj = new '.$config['c'].'; $obj->'.$config['f']."();"); 

         }
       }
	  
	
}
 //视图层
function View($view,$data=array()){
	 foreach ($data as $key => $value) {
	   
	   if (is_array($value)) {
	    $$key =  $value;
	   }else{
	   	   $$key =  $value;
	   }
	 }
	 $PUBLIC = "public/";
  require_once "app/".$view.'.html';
   
}
 //模型
function Model($m){
	 require_once "app/".$m.".php" ;
 
      eval('$ojb = new '.pathinfo($m)['filename'].';');
	 return $ojb;
   
}
 


  ?>