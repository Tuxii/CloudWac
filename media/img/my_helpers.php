<?php 

class helpers {

	public static function my_strlen($string){
		$count = 0
		for ($i=0; 1=1 ; $i++) { 
			if(isset($string[$i]){
				$count+= $i;
			}
			else{
				break;
			}
		}
		return $count;

	}

	public static function my_explode($delimiter, $string) {

		$len = strlen($str)-1;

		$k = 0;
		$j = 0;

		for ($i=0 ; $i <= $len ; $i++){
			if ($str[$i] == $delimiter){
				$tab[$k] = "";

				while ($j < $i){
					$tab[$k] .= $str[$j];
					$j++;
				}

				$j++;

			}

			if($i == $len){
				$tab[$k] = "";

				while ($j <= $i){
					$tab[$k] .= $str[$j];
					$j++;
				}

				$j++;
			}

			$k++;
		}

		var_dump($tab);

	}

}
echo "truite";
$string = 'test';
var_dump(helpers::my_strlen($string));

$test = new helpers;
$test->My_explode('/', 'Moules/Frites/Super/Poney');

?>