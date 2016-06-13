<?php
    $max = 800000;
    $workers = 5;
     
    $pids = array();
    for($i = 0; $i < $workers; $i++){
        $pids[$i] = pcntl_fork();
        switch ($pids[$i]) {
            case -1:
                echo "fork error : {$i} \r\n";
                exit;
            case 0:
                //$param = array(
                //    'lastid' => $max / $workers * $i,
                //    'maxid' => $max / $workers * ($i+1),
                //);
                //$this->executeWorker($input, $output, $param);
		sleep(1000);
                exit;
            default:
                break;
        }
    }
     
    foreach ($pids as $i => $pid) {
        if($pid) {
            pcntl_waitpid($pid, $status);
        }
    }
?>
