<?php
    $cur_pid = getmypid();
    $pid = pcntl_fork();
    if($pid == -1){
 	die('could not fork');
    }else if($pid){
	pcntl_wait($status);
	file_put_contents('file.txt', "This is parent process-$cur_pid.child_pid=".$pid."\n", FILE_APPEND|LOCK_EX);
    }else{
	file_put_contents('file.txt', "This is child process-$cur_pid.pid=".$pid."\n", FILE_APPEND|LOCK_EX);
    }
?>
