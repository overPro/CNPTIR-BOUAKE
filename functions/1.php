<?php
// generateur de code 
        $char = '0123456789';
        $number = '';
        for ($i = 0; $i < 10; $i++) {
            $number .= $char[rand() % strlen($char)];
        }

//$num=3621343561746337;
        $num = "9"."20001".$number;

		if(strlen($num) == 16){	// 16 caractères
			// Séparation de tous les caractères
			$c = array();
			for($i=0; $i<16; $i++){
				if(is_numeric(substr($num,$i,1))){	// Uniquement des chiffres
					$c[$i] = substr($num,$i,1);
				}else{
					return false;
				}
			}
			// Contrôle
			$m1 = 0;
			for($i=0; $i<16; $i++){
				if(($i%2)==0){
					$x = $c[$i]*2;
					if($x>9){
						$m1 += $x-9;
					}else{
						$m1 += $x;
					}
				}else{
					$m1 += $c[$i];
				}
			}
			if(($m1%10)!=0){	// Doit être multiple de 10
				echo "Doit être multiple de 10";
				return false;

			}
			// Pas d'erreur
			echo "Pas d'erreur";
			echo $num;
			return true;

		}else{
			echo "ok";
			return false;

		}



?>