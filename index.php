<?php 
/**
*  @description 网盘
*  @version  5.2.10 V
*  @author   Fd
*  @Company:自由网@
*  @email: nokialj18239055606@outlook.com 1315295001@qq.com
*  @date : 2019年3月1日20:36:56
*/  

$value = isset($_GET['fd'])?$_GET['fd']:'indexIndexs';
 // 65  -90 
 if (strlen($value)<7) {
 	$value  =  'indexIndexs';
 }
require_once 'routes/routes.php';


Controller(ifCA($value));
 
   
 ?>