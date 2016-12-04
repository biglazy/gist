<?php

	function compare($a,$b){
		if($a == $b){
			return 0;
		}	
		$rst = 0;
		foreach($a as $k => $v){
			if($v < $b[$k]){
			       	$rst = -1 ;
			}elseif($v > $b[$k]){
			       	$rst = 1 ;
			}
			if($rst){break;}
		}
		return $rst;
	}
	$num = 100000;
	$data1 = array();
	for($i=0;$i<$num;$i++){
		$data1[$i]['id1'] = mt_rand();
		$data1[$i]['id2'] = mt_rand();
		$data1[$i]['id3'] = mt_rand();
		$id1[$i] = $data1[$i]['id1'];
		$id2[$i] = $data1[$i]['id2'];
		$id3[$i] = $data1[$i]['id3'];
	}
	$data2 = $data1;

	$start_time1 = time();
	array_multisort($id1,$id2,$id3,$data1);
	$end_time1 = time();
	echo "Sort $num length array with array_multisort() function:\n";
	echo "start time is : {$start_time1} \n";
	echo "end time is : $end_time1 \n";
	echo "all used time is : ".($end_time1-$start_time1)."\n";

	$start_time2 = time();
	usort($data2,'compare');
	$end_time2 = time();
	echo "Sort $num length array with usort() function:\n";
	echo "start time is : $start_time2 \n";
	echo "end time is : $end_time2 \n";
	echo "all used time is : ".($end_time2-$start_time2)."\n";

	if($data2 == $data1){
		echo "Result of type1 is same as type2.\n";
	}else{
		echo "Result of type1 is different with type2.\n";
	}
?>
