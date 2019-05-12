<?php 
/**
*  @description 网盘
*  @version  5.2.10 V
*  @author   Fd
*  @Company:自由网@
*  @email: nokialj18239055606@outlook.com 1315295001@qq.com
*  @date : 2019年3月1日20:36:56
*/  
session_start();
header('Content-type:text/html;charset=utf8');
class index 
{
	 
    public function Admin($type=""){ 
      // $author_open = "MASONJDSSF4S4SFbkdbknk165f1s35d1135DSS1";//加载临时存储目录文件
      $author_open = "";//加载临时存储目录文件
       // $if_input = "";
      foreach (scandir('config/') as $key => $value) {
        if (substr($value,0,5)=="AAAFD") {
          $author_open =  $value;
        }
      }
      
      $data = file_get_contents("config/".$author_open);  //0为 管理员密码 1 为临时密码   2 备忘录
      if (!file_exists("config/".$author_open)) {
           echo json_encode(array('status'=>'-1'));exit();
       }
      // echo json_encode(array('admin123','dasdknsadbasba641f5saf'));
          if ($type==2) {
              return json_decode($data,true);
          }else if($type =='path'){
                  return $author_open;
          }
    }
    public function Visitor(){
          //临时访客
        $name['pwd'] =  isset($_POST['temp_name'])?$_POST['temp_name']:'';
        $name['time'] =  isset($_POST['temp_time'])?$_POST['temp_time']:'';
        $name['type'] =  0;
        $name['add_time'] =  time();
        if (empty($name['pwd'])||empty($name['time'])) {
          echo json_encode(array('code'=>'-1'));exit();
        }
        if (!file_exists("config/".$this->Admin('2')[1])) {
           echo json_encode(array('code'=>'-1'));exit();
        }
        $temp = fopen("config/".$this->Admin('2')[1], 'a+');
         $name['pwd'] = md5($name['pwd'].'fd');
        fwrite($temp, 'f,d'.json_encode($name));
        fclose($temp);
        ob_clean();
        ob_flush();
        echo json_encode(array('code'=>1));die();
    }
    public function Visitor_PWD(){
        //密码
        $name['init_pwd'] =  isset($_POST['init_pwd'])?$_POST['init_pwd']:'';
        $name['new_pwd'] =  isset($_POST['new_pwd'])?$_POST['new_pwd']:'';
        if (empty($name['init_pwd'])||empty($name['new_pwd'])) {
          echo json_encode(array('code'=>'-1'));exit();
        }
        $json = json_decode(file_get_contents("config/".$this->Admin('path')),true);
       if (md5($name['init_pwd'].'fd')!=$json[0]) {
          echo json_encode(array('code'=>'-2'));exit();
       }
       $json[0] = md5($name['new_pwd'].'fd');
       $ifs =   file_put_contents("config/".$this->Admin('path'),json_encode($json));
       if ($ifs) {
           echo json_encode(array('code'=>'1'));exit();
       }else{
          echo json_encode(array('code'=>'-2'));exit();
       }
       //成果修改

    }
    public function Code(){
          View('index/view/code');
    }
     public function Visitor_clear(){
          //临时访客 清除
    
        $temp = fopen("config/".$this->Admin('2')[1], 'w+');
         $name['pwd'] = md5($name['pwd'].'fd');
        fwrite($temp,'');
        fclose($temp);
        ob_clean();
        ob_flush();
        echo json_encode(array('code'=>1));die();
    }
    public function Login(){

       View('index/view/Login');
    }
    public function Login_check(){

      // $_SESSION['user'] = 1;
        $s_code = isset($_SESSION['code_fd'])?$_SESSION['code_fd']:'fd_not';
        if ($s_code!='fd_not') {
           if ($s_code=='yes') {
               unset($_SESSION['user_error']); //清空
                 unset($_SESSION['code_fd']);
           }else{
             // echo json_encode(array('code'=>'-2','location'=>'验证码错误'));die();
               echo json_encode(array('code'=>'-2','location'=>'index.php'));die();
           }
        }
         $ajax =   isset($_POST['ajax'])?$_POST['ajax']:'not';
         if ($ajax=='not') {
             echo json_encode(array('code'=>'-1'));die();
         }
         $json = json_decode(file_get_contents("config/".$this->Admin('path')),true);
         if (md5($ajax.'fd')==$json[0]) { //超级用户 longlong
            $_SESSION['user_error'] = 0;
            $_SESSION['user'] = array('static'=>1,'type'=>'admin');
            echo json_encode(array('code'=>'1','location'=>'index.php'));die();
         }else{ //临时用户
             if (!file_exists("config/".$json[1])) {//文件不存在
                  echo json_encode(array('code'=>'-1'));die();
             }
             $js  =  explode('f,d',file_get_contents("config/".$json[1]));
             unset($js[0]);
             foreach ($js as $key => $value) { //临时客户
               $temp_user =  json_decode($value,true);
                 if (md5($ajax.'fd')==$temp_user['pwd']&&time()<=strtotime($temp_user['time'])) {//判断密码 与密码有效时间
                     $_SESSION['user_error'] = 0; //临时客户登入OK
                    $_SESSION['user'] = array('static'=>1,'type'=>'temp_0');
                    echo json_encode(array('code'=>'1','location'=>'index.php'));die();
                 }
             }
           ///////////没有yes
              $num =   isset($_SESSION['user_error'])?$_SESSION['user_error']:1;
               $_SESSION['user_error'] = $num+1;
              
               if ($num>=3) {
                echo json_encode(array('code'=>'-2','location'=>'index.php'));die();
               }else{
                echo json_encode(array('code'=>'-1','location'=>$num));die();
               }

         }
    } 

	public function Indexs(){
    $if_input = "";
      foreach (scandir('config/') as $key => $value) {
        if (substr($value,0,5)=="AAAFD") {
          $if_input =  $value;
        }
      }
    

   // $ifsd =  file_get_contents("app/index/controller/index.php");
    if ($if_input=="") {
     //存在 进入初始化    
      $arr =array();
      //操作系统检测
       $arr['os'] = array('status'=>1,'display'=>php_uname()); 
       if (ini_get('file_uploads')) { //文件删除检测 //MX检测
          $arr['max_file'] = array('status'=>1,'display'=>ini_get('upload_max_filesize').'    &nbsp &nbsp- &nbsp&nbsp &nbsp大于'.ini_get('upload_max_filesize').'会遭到上传失败!'); 
       }else{
          $arr['max_file'] = array('status'=>'-1','display'=>'未开启文件上传!');
       }
       $tmp = function_exists('gd_info') ? gd_info() : array();//GD检测
       // print_r($tmp); die();
       if (empty($tmp['GD Version'])) { 
         $arr['gd'] = array('status'=>'-1','display'=>'没要检测到GD库 !');
        }else{
         $arr['gd'] = array('status'=>'1','display'=>$tmp['GD Version']);
        } //磁盘空间大小检测
         $disk = floor(disk_free_space("/") / (1024*1024)).'M';
         $arr['disk']   = array('status'=>'1','display'=>$disk);
        //检测文件是否可写 is_writable()
          if (is_writable('File/')) {
             $arr['write_dir']   = array('status'=>'1','display'=>'磁盘可写');
          }else{
             $arr['write_dir']   = array('status'=>'-1','display'=>'磁盘不可写 !');
          }
          //PHP 版本检测 不能低于  5.6
        if (PHP_VERSION>=5.6) {
            $arr['php_v']   = array('status'=>'1','display'=>PHP_VERSION);
         } else{
             $arr['php_v']   = array('status'=>'-1','display'=>PHP_VERSION);
         }
        if (ini_get('date.timezone')) {
           if (ini_get('date.timezone')=='PRC') {
             $arr['P']   = array('status'=>'1','display'=>ini_get('date.timezone'));
           }else{
              $arr['P']   = array('status'=>'-1','display'=>'时区不符合(PRC) 时间可能会遭到影响');
           }
        
        }else{
          $arr['p']   = array('status'=>'-1','display'=>'未开启时区 !');
         // echo date_default_timezone_get(); 
        }
        // print_r($arr);
        // date_default_timezone_set("PRC");
        // ini_set('date.timezone','Asia/Shanghai');
        View('init/init',['arr'=>$arr]);  die();
    };
       // die();
        $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
	 	 $path  =  isset($_GET['path'])?$_GET['path']:'File/';
	 	 $ajax =   isset($_POST['ajax'])?$_POST['ajax']:'not';
	 	 $file =  scandir($path);
	 	  unset($file[0]); unset($file[1]);
	  
		// $m = Model('index/Model/Mindex');
		// $m->m();
	 	  $ar = array(
	 	  	'zip'=>'zip',
	 	  	'tar'=>'zip',
	 	  	'gz'=>'zip',
	 	  	'bz2'=>'zip',
	 	  	'xz'=>'zip',
	 	  	'win'=>'zip',
	 	  	'lzh'=>'zip',
	 	  	'lzh'=>'zip',
            'txt'=>'txt',
            'json'=>'txt',
            'xml'=>'txt',
            'iso'=>'iso',
            'exe'=>'exe',
            'docx'=>'docx',
            'doc'=>'docx',
            'xls'=>'xls',
            'xlsx'=>'xls',
            'pptx'=>'ppt',
            'ppt'=>'ppt',
	 	  	'apk'=>'apk',
	 	  	'mp4'=>'mp4',
	 	  	'ogg'=>'mp4',
	 	  	'wav'=>'mp3',
	 	  	'mp3'=>'mp3',
            'ico'=>'img',
	 	  	'png'=>'img',
            'jpg'=>'img',
	 	  	'bmp'=>'img',
	 	  	'gif'=>'img',
	 	  	'jpge'=>'img',
	 	  	'file'=>'file',
            'js'=>'js',
            'php'=>'php',
	 	  	'css'=>'css',
            'html'=>'html',
            'stl'=>'3d',
            'slb'=>'3d',
            'stp'=>'3d',
            'prt'=>'3d',
            'asm'=>'3d',
            'dwg'=>'3d',
            'stl'=>'3d',
            'obj'=>'3d',
            'amf'=>'3d',
            '3mf'=>'3d',
	 	  	'file_not'=>'file'
	 	  	);
	 	
        $array = $this->if_dir($file,$path,$ar);
     //      $new_files = array();
	 	  // foreach ($array as $key => $value) {
	 	  // 	    if (substr($key,0,4)=='file') {//判断是否为文件夹
	 	  	    	 
	 	  // 	    }
	 	  // }
	 	  // print_r($array);
         $memory['init'] = floor((disk_total_space('/')/1024)/1024/1024);
         $memory['use'] = $memory['init']-floor((disk_free_space('/')/1024)/1024/1024);
         $memory['t'] =  100-(floor(floor((disk_free_space('/')/1024)/1024/1024)/$memory['init']*100));
            if ($ajax=='not') {
              View('index/view/index',['files_all'=>$array,'path'=>$path,'memory'=>$memory]);
            }else{
            	$temp['data'] = $array;
            	$temp['path'] = $path;
           echo json_encode($temp,JSON_FORCE_OBJECT);
            	// print_r($temp['data'] );
            }
	 	


	 }
   public function  Init(){

    foreach (scandir('config/') as $key => $value) {
        if (substr($value,0,5)=="AAAFD") {
         echo "请勿重复安装";
       View('index/view/Login');
         die();
        }
      }
      
     $pwd =  isset($_POST['pwd'])?$_POST['pwd']:'';
      if (empty($pwd)) {
        $this->Indexs(); die();
      }
      $pwd = md5($pwd.'fd');
      //进行开始全局配置
      //生成文件1 2 3  / 倒叙开始生成;;;
      $str = "ffaFdsadFSfaaSFSAiunua9526".time().rand(10000,999999);
      $str1 = "ffaFdsadasdssadafwef6f5ew610f526".time().rand(10000,999999);
      $strs[] = md5(str_shuffle($str)); //穿件文件 3 
      $strs[] = md5(str_shuffle($str.$str1)); //穿件文件  
      $str_one = md5(str_shuffle($str.'fd'.rand(10000,999999))); //穿件文件  
      foreach ($strs as $key => $value) {
        $f = fopen("config/".$value,'a+');
        fclose($f);
      }
      $json =  json_encode(array($pwd,$strs[0],$strs[1]));
        $f = fopen("config/".'AAAFD'.$str_one,'a+');
         fwrite($f, $json);
         fclose($f);
        $files =  file_get_contents("app/index/controller/index.php");
        $if  =  str_replace("[NEW_KEY]",$pwd, $files);
        if ($if) {
         $this->Indexs(); die();
        }else{
          echo "出现点问题,代码损坏 !!! 或 读写执行没有权限,请尝试重新下载文件 并且设置权限";die();
        }

   }
	 public function if_dir($arr,$path,$type){//判断文件
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
	 	$new_ar  = array();
	 	$new_ar_dir  = array();
	 	$x = 0;
         foreach ($arr as $key => $value) {
         	  if(is_dir($path.$value)) {
         	  	 $arrsd['type'] = 'dir'; 
         	  	 $arrsd['name'] = $value; 
                 $arrsd['path']= $path;
         	    $new_ar_dir['file'.$x] = $arrsd;
         	    $x++;
         	  }else{
         	  	// $new_ar[]=$value; path
         	  	$ty = pathinfo($value);
         	  	$ty = isset($ty['extension'])?$ty['extension']:'not';//判断是否存在文件后缀
                 if ($ty=='not') {
                 	$tesd['type']= 'file_not';
                    $tesd['name']= $value;
                 	$tesd['path']= $path;
         	        $new_ar[]= $tesd;
                 	 
                 }else{
                      if(array_key_exists($ty,$type)){//判断是否存在
                    $tesd['type']= $type[$ty];
                 	$tesd['name']= $value;
                    $tesd['path']= $path;
         	        $new_ar[]= $tesd;
                      }else{
                    $tesd['type']= 'file_not';
                 	$tesd['name']= $value;
                    $tesd['path']= $path;
         	        $new_ar[]= $tesd;
                      }
                 }
         	  }
         }
         $temp = array();
         foreach ($new_ar_dir as $key => $value) {
         	$temp[] =  $value;
         }
         foreach ($new_ar as $key => $value) {
         	$temp[] =  $value;
         }
        return $temp;
	 }
	static function scanf($file,$path=''){ //静态绑定查询存在的文件
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
		static $array = array();
		static $now = 'File';//当前路径

		   foreach ($file as $key => $value) {
			   	 if (is_dir($now.'/'.$value)) {
			   	 	   $now.= '/'.$value;
			   	 	   echo $now;
			   	 	   $file_c =  scandir($now);
				 	   unset($file_c[0]); unset($file_c[1]);
				 	   $array[] =  $file_c;
			   	       self::scanf($file_c,$now);
			   	       print_r($file_c);
			   	 }else{

			   	 }
		   }
		  
	}
	public function Update_file(){
		$path = isset($_GET['path'])?$_GET['path']:false;
		$name = isset($_GET['name'])?$_GET['name']:false;
		 if ($path==false||$name==false) {
		 	 $this->Indexs();die();
		 }
		$data =  file_get_contents($path);
         View('index/view/Update_file',['data'=>$data,'path'=>$path]);

	} 
	public function Save_file(){
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
		$value = isset($_POST['value'])?$_POST['value']:false;
		$path = isset($_POST['path'])?$_POST['path']:false;
		if ($path==false||$value==false) {
		 	 echo -1;die();
		 }
		 $data =  fopen($path,'w+');
		 fwrite($data,$value);
		 fclose($data);
		 echo 1;die();
	}
    public function File_down(){ //w文件下载
    	$file =   isset($_GET['path'])?$_GET['path']:false;
    	// echo filesize($file);die();
    	 if (file==false) {
		 	 ob_clean();
            flush();
            echo "-1";die();
		 }
	     if(file_exists($file)){
		header("Content-type:application/octet-stream");
		$filename = basename($file);

		header("Content-Disposition:attachment;filename = ".$filename);
		header("Accept-ranges:bytes");
		header("Accept-length:".filesize($file));
		ob_clean();
	    flush();
		readfile($file);
		}else{
        	ob_clean();
            flush();
            echo "-1";die();
        }
    }
    public function File_move(){ //文件移动
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
    	$to = $_POST['to'];
    	$form = $_POST['form'];
    	 if (@rename($form,$to)) {
    	  exit('1');
    	 }else{
          exit('-1');
    	 }
    }
    public function File_copy(){ //文件复制
        $to = $_POST['to'];
        $form = $_POST['form'];
         if (@copy($form,$to)) {
          exit('1');
         }else{
          exit('-1');
         }
    }
    public function File_delete(){
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
    	//循环删除目录和文件函数 
         $dirName = $_POST['path'];
         if (is_file($dirName)) {
           //文件直接删除
           if ( unlink($dirName)) {
            echo json_encode(array('type'=>'文件','code'=>'1')); die();
           }else{
           	 echo json_encode(array('type'=>'文件','code'=>'-1')); die();
           }
         }else{
         	$all = scandir($dirName);
			 unset($all[0]);
			 unset($all[1]);
			 // print_r($all);die();
	        $arr =  self::inside($all,$dirName,0);
	         
	        for ($i=count($arr)-1; $i >=0 ; $i--) { 
	            rmdir($arr[$i]);
	        }
	       if (rmdir($dirName)) {
	         echo json_encode(array('type'=>'文件','code'=>'1')); die();
	       }else{
	       	echo json_encode(array('type'=>'文件','code'=>'-1')); die();
	       }
	        
         }
		
		 
    }
    static function inside($data,$paths,$static){// 删除
    	static  $path ; //静态路径
    	static  $num ; //静态 error
    	static $array;
    	
    	if ($static==0) {
    	$path.=$paths;
    	}
       foreach ($data as $key => $value) {
            if (is_dir($path.'/'.$value)) { //是文件件夹
                $path .='/'.$value;
                $alls = scandir($path);
				 unset($alls[0]);
				 unset($alls[1]);
				 $array[] = $path;
            	 self::inside($alls,$path,1);
             
            }else{ //是文件

              if (!unlink($path.'/'.$value)) {
               $num++;
              } 
            	// echo $path.'<br>';

            }
            $path = "";
            $path.=$paths;
       }
   return $array;
    }
    public function Mkdir(){
    	$path = $_POST['path'];
    	if (mkdir($path,0777,true)) {
    		echo "1";die();
    	}else{
    		echo "-1";die();
    	}
    }
    public function Fopen(){
    	$path = $_POST['path'];
    	$fi = fopen($path, 'w+');
    	if ($fi) {
    		echo "1";die();
    	}else{
    		echo "-1";die();
    	}
    }
    public function Zip_open(){
 
           $path = $_POST['path'];
           $all_path = pathinfo($path);
        // echo  $all_path['dirname'].'\\'.$all_path['filename'];
     
         include_once "pclzip.lib.php";
            // 初始化类
        $zip = new \PclZip($path);
         $ifs =  @$zip->extract(PCLZIP_OPT_PATH, iconv('UTF-8', 'GB2312',$all_path['dirname'])); 
         // $zip->extract(PCLZIP_OPT_SET_CHMOD,0777);    
        // $zip->extract(PCLZIP_OPT_PATH, 'File/A', PCLZIP_OPT_REMOVE_PATH, 'File/S');
         if ($ifs) {
          echo json_encode(array('code'=>1));die();
         }else{
          echo json_encode(array('code'=>-1));die();
         }
 
   }
    public function Zip_add(){
 
           $path = $_POST['path'];

            // die($path);
           $all_path = pathinfo($path);
        // echo  $all_path['dirname'].'\\'.$all_path['filename'];
    
         include_once "pclzip.lib.php";
            // 初始化类
        $zip = new \PclZip($all_path['dirname'].'\\'.$all_path['filename'].'.zip');
         $ifs =  @$zip->create(iconv('UTF-8', 'GB2312', $path),PCLZIP_OPT_REMOVE_ALL_PATH);
         // die(); 
        // $zip->extract(PCLZIP_OPT_PATH, 'File/A', PCLZIP_OPT_REMOVE_PATH, 'File/S');
         if ($ifs) {
          echo json_encode(array('code'=>1));die();
         }else{
          echo json_encode(array('code'=>-1));die();
         }
 
   }
    public function Excel_show(){
      include_once "public/dll/Classes/PHPExcel.php";
      $file = isset($_GET['ur'])?$_GET['ur']:'';
      if (empty($file)||!file_exists($file)) {
        die('加载失败...');
      }
       
        $excel=\PHPExcel_IOFactory::load('File/a.xls');
        $arr = array();
        $x = 0;
    // 2 选择需要操作的工作表
    $sheetphpexcel=$excel->getSheet(0);     // getSheet(0) 获取索引是0的工作表，就是从左往右数第1张工作表
    // 3 获取工作表中数据区（有数据的区域）的行数（最大行）
    $highestrow=$sheetphpexcel->getHighestRow();
    //echo $rows;
    // 4 获取工作中数据区的列数
    $columns= $sheetphpexcel->gethighestcolumn();//获取列      // 注意，返回的是工作表的列标（列标是字母）
    // echo $columns;
    // 5 使用循环读取工作表中数据，外层循环的是行，内层循环的是列
        for($i=1;$i<=$highestrow;$i++){
            for($j='A';$j<=$columns;$j++){
                     $arr[$i][] = $sheetphpexcel->getCell($j.$i)->getValue().' ';      //  将每个单元格中的值放到二维数组中
            }
        }
        // print_r($arr);
          View('index/view/Excel_show',['data'=>$arr]);
        
    }
    public function Word_show(){
     
    }  

    public function Files_u(){
        $path  =  $_GET['path'];
        $file = $_FILES['file'];
        move_uploaded_file($file['tmp_name'],$path.$file['name']);
      print_r($_FILES['file']);
    } 
    public function System_set(){
        //system 设置
        // 需要进行权限访问???????????
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
         if ($user['type']!='admin') {
          echo "无法访问....";
            View('index/view/fd'); die();
         }
        $system['sy']   =  php_uname();
        $system['free'] = '5.2.10'; 
        $system['php_version'] = PHP_VERSION; 
        $system['apache_getversion'] = apache_get_version();  
        $system['disk'] = floor((disk_free_space('/')/1024)/1024/1024);
        $file  =json_decode(file_get_contents("config/".$this->Admin('path')),true);
        $json = file_get_contents("config/".$file[2]); //笔记
        // print_r($json); die();
          View('index/view/system_set',['system'=>$system,'mem'=>$json]);
    }
    public function System_set_note(){
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
        $val =  isset($_POST['value'])?$_POST['value']:'%1w';
        if ($val=="%1w'") {
              echo json_encode(array('code'=>'-1'));exit();
        }
        $file  =json_decode(file_get_contents("config/".$this->Admin('path')),true);
        // $json = file_get_contents("config/".$file[2]);
        if (file_put_contents("config/".$file[2], $val)) {
              echo json_encode(array('code'=>'1'));exit();
            
        }else{
              echo json_encode(array('code'=>'-1'));exit();

        }

    }
     static function File_search_self($data,$paths,$static,$dir=true){// 静态文件搜索
        static  $path ; //静态路径
        static  $num ; //静态 error
        static $array;
        static $arrays;
        
        if ($static==0) {
        $path.=$paths;
        }
       foreach ($data as $key => $value) {
            if (is_dir($path.'/'.$value)) { //是文件件夹
                $path .='/'.$value;
                $alls = scandir($path);
                 unset($alls[0]);
                 unset($alls[1]);
                 
                 $array[] = $path;
                 self::File_search_self($alls,$path,1,$dir);
              
                 if ($dir) {
                      $arrays[] = $path.'/';
                 }
             
            }else{ //是文件

               $arrays[] = $path.'/'.$value;
                // echo $path.'<br>';

            }
            $path = "";
            $path.=$paths;
       }
   return $arrays;
    }
    public function File_search_TYPE($file){
         $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  

    $ar = array(
            'zip'=>'zip',
            'tar'=>'zip',
            'gz'=>'zip',
            'bz2'=>'zip',
            'xz'=>'zip',
            'win'=>'zip',
            'lzh'=>'zip',
            'lzh'=>'zip',
            'txt'=>'txt',
            'json'=>'txt',
            'xml'=>'txt',
            'iso'=>'iso',
            'exe'=>'exe',
            'docx'=>'docx',
            'doc'=>'docx',
            'xls'=>'xls',
            'xlsx'=>'xls',
            'pptx'=>'ppt',
            'ppt'=>'ppt',
            'apk'=>'apk',
            'mp4'=>'mp4',
            'ogg'=>'mp4',
            'wav'=>'mp3',
            'mp3'=>'mp3',
            'ico'=>'img',
            'png'=>'img',
            'jpg'=>'img',
            'bmp'=>'img',
            'gif'=>'img',
            'jpge'=>'img',
            'file'=>'file',
            'js'=>'js',
            'php'=>'php',
            'css'=>'css',
            'html'=>'html',
            'stl'=>'3d',
            'slb'=>'3d',
            'stp'=>'3d',
            'prt'=>'3d',
            'asm'=>'3d',
            'dwg'=>'3d',
            'stl'=>'3d',
            'obj'=>'3d',
            'amf'=>'3d',
            '3mf'=>'3d',
            'file_not'=>'file'
            );
       $path = pathinfo($file);
        if (!is_dir($file)) {
         //存在 查询文件类型
           if (@array_key_exists($path['extension'],$ar)) {
             $temp['name'] = $path['basename'];
            $temp['type'] = $ar[$path['extension']];
            $temp['path'] = $path['dirname'].'/';
            return  $temp;
           }else{ //不存在
            $temp['name'] = $path['basename'];
            $temp['type'] = 'file_not';
            $temp['path'] = $path['dirname'].'/';
            return  $temp;
           }
        }else{
          //不存在 file_not 为DIR 文件类型
            $temp['name'] = $path['basename'];
            $temp['type'] = 'dir';
            $temp['path'] = $path['dirname'].'/';
            return  $temp;
        }
    }
    public function File_search(){
        //w文件搜索 strpos()
       $user =   $_SESSION['user']; //先验证登入访问
        if (empty($user)) {
            $this->Login(); die();
         }  
        $ifs =    isset($_POST['cont'])?$_POST['cont']:'';
        $path =   isset($_POST['now_path'])?$_POST['now_path']:'';
        // echo  $path;
        if (empty($ifs)||empty($path)) {
          die();
        }
        $arr_ifs = array();
         $data = scandir($path);
                 unset($data[0]);
                 unset($data[1]);
       $data =  self::File_search_self($data,$path,0,true);
       foreach ($data as $key => $value) {
          // print_r($this->File_search_TYPE($value));
         $name = pathinfo($value)['basename'];
         if (strpos('__'.$name,$ifs)) {
           $arr_ifs[] = $this->File_search_TYPE($value);
         }
         
       }

      ob_clean();
      ob_flush();
            $temp['data'] = $arr_ifs;
            $temp['path'] = $path;
             // $temp['path'] = 'File/';
           echo json_encode($temp,JSON_FORCE_OBJECT);

    }
     public function File_search_fd(){
        //w文件搜索FD strpos()

        $ifs =    isset($_POST['cont'])?$_POST['cont']:'';
        $path =   isset($_POST['now_path'])?$_POST['now_path']:'';
        // echo  $path;
        if (empty($ifs)||empty($path)) {
          die();
        }
        $ars =  explode(',',$ifs);
        $arr_ifs = array();
         $data = scandir($path);
                 unset($data[0]);
                 unset($data[1]);
       $data =  self::File_search_self($data,$path,0,true);
       foreach ($data as $key => $value) {
          // print_r($this->File_search_TYPE($value));
         $name = pathinfo($value)['basename'];
           foreach ($ars as $keys => $values) {
                if (strpos('__'.$name,'.'.$values)) {
                   $arr_ifs[] = $this->File_search_TYPE($value);
                 }
           }
         
       }

      ob_clean();
      ob_flush();
            $temp['data'] = $arr_ifs;
            $temp['path'] = $path;
             // $temp['path'] = 'File/';
           echo json_encode($temp,JSON_FORCE_OBJECT);

    }
     public function File_search_V(){
        //w文件搜索FD strpos()

        $ifs =    isset($_POST['cont'])?$_POST['cont']:'';
        $path =   isset($_POST['now_path'])?$_POST['now_path']:'';
        $sizes =   isset($_POST['size'])?$_POST['size']:'';
        $sizes =  intval($sizes)?intval($sizes):'1';
        if (empty($ifs)||empty($path)) {
          die();
        }
    
        $arr_ifs = array();
         $data = scandir($path);
                 unset($data[0]);
                 unset($data[1]);
       $data =  self::File_search_self($data,$path,0,false);
       foreach ($data as $key => $value) {
          // print_r($this->File_search_TYPE($value));
         // $name = pathinfo($value)['basename'];
         $size = filesize($value)/1024/1024;
            if ($sizes>=$size) {   
                $value_file = file_get_contents($value);
                 if (strpos('__'.$value_file,$ifs)) {
                   $arr_ifs[] = $this->File_search_TYPE($value);
                 }
            }
         
       }
 // print_r($arr_ifs);
      ob_clean();
      ob_flush();
            $temp['data'] = $arr_ifs;
            $temp['path'] = $path;
             // $temp['path'] = 'File/';
           echo json_encode($temp,JSON_FORCE_OBJECT);

    }


}



 ?> 