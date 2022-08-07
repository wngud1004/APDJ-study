<?php   
 	$TDarr = array( 
 		'승원' => array(88, 98, 96, 77, 63), 
        '도희' => array(86, 77, 66, 86, 93),
    	'수빈' => array(74, 83, 95, 86, 97)
    );
 	$c = 0;
 	/*
	for ($x=0; $x<sizeof($TDarr); $x++) {
	    for ($y=0; $y<5; $y++) {
	    	$arr[5*$x + $y] = $TDarr[$x][$y];
	    }
	}
	*/
	foreach($TDarr as $x) {
	    for ($y=0; $y<5; $y++) {
	    	$arr[$c] = $x[$y];
	    	$c++;
	    }
	}

	$count = count($arr);
	/*
    for($i=$count-2; $i>=0; $i--) {
	    for($j=0; $j<=$i; $j++) {
			if($arr[$j] > $arr[$j+1]) {
		    	$tmp = $arr[$j]; 	      
		    	$arr[$j] = $arr[$j+1];	
		    	$arr[$j+1] = $tmp;		
	   		}
	    }
    }

	echo "버블 정렬(오름차순) 후 : ";		
	for ($a=0; $a<$count; $a++) {			
	    echo $arr[$a]." ";
	}
	*/
		echo "버블 정렬(내림차순) 후 : ";		
	for ($a=0; $a<$count; $a++) {			
	    echo $arr[$a]." ";
	}

	for($i=0; $i<=$count-1; $i++) {
	    for($j=$i+1; $j<=$count-1; $j++) {
			if($arr[$j] < $arr[$i]) {
		    	$tmp = $arr[$i]; 	      
		    	$arr[$i] = $arr[$j];	
		    	$arr[$j] = $tmp;		
	   		}
	    }
    }

	echo "<br>버블 정렬(내림차순) 후 : ";		
	for ($a=0; $a<$count; $a++) {			
	    echo $arr[$a]." ";
	}
?>


