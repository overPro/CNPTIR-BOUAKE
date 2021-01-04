<?php 
$m1 = 0;
$char = '0123456789';
$num = '';

        for ($i = 0; $i < 15; $i++) {
            $num .= $char[rand() % strlen($char)];

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


 echo $num."<br>";
 echo ($m1)."<br>";   
 echo (10 - ($m1)%10)."<br>"; 
 $nbre = (10 - ($m1)%10);
 if($nbre>=10){
 	echo ($num.(0))."<br>";
 }else{
 	echo ($num.(10 - $m1%10))."<br>";
 }
 

			




 ?><br>