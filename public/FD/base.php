<?php 

$s ="";

for ($i=1; $i <=2 ; $i++) { 
   $str = file_get_contents($i.".png");
     $s .=',"data:image/png;base64,'.base64_encode($str).'"';
}
echo $s;
 ?>