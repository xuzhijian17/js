<?php
//MAX Value
	$arr = array(8,4,1,2,5,3,8,1,2,4,3);

	function mysort($a1,$a2){
		if ($a1>=$a2) {
			return $a1;
		}else{
			return $a2;
		}
	}
	function mymax($arr){
		$arr1 = array();
		foreach ($arr as $key => $value) {
			if ($key<count($arr)-1) {
				$a = mysort($arr[$key],$arr[$key+1]);
				$arr1[]=$a;
			}
		}
		
		if (count($arr1)>1) {
			mysort1($arr1);
		}else{
			print_r($arr1);
		}
		
	}
	mymax($arr);

?>