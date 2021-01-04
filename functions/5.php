<?php 
$m1 = 0;
$char = '0123456789';
$number = '';

        for ($i = 0; $i < 14; $i++) {
            $number .= $char[rand() % strlen($char)];
         }
    $num = "9".$number;

         for ($i = 0; $i < 15; $i++) {

            if(($i%2)==0){
					$x = $num[$i]*2;
					if($x>9){
						$m1 += $x-9;
						
					}else{
						$m1 += $x;
						
					}
				}else{
					$m1 += $num[$i];
					
				}
          
        }

 $m2= (10+$m1);
 echo (date("Y")+1)."<br>";
echo $num."<br>";

 echo ($m2)."<br>";   
 echo (10 - ($m2)%10)."<br>"; 
 $nbre = (10 - ($m2)%10);
 if($nbre>=10){
 	echo ($num.(0))."<br>";
 }else{
 	echo ($num.(10 - $m2%10))."<br>";
 }


 ?><br>