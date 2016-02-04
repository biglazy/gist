#!/usr/bin/php

<?php
// 10s redis get 测试

    $redis = new redis();
    $result = $redis->connect('127.0.0.1',6379);
    if(!$result){
        die("Redis连接失败；\n");
    }

    $time_limit = 10;
    $time_start = time();
    $time_length = 0;
    
    $i = 0;
    $error_num = 0;
    while($time_length <= $time_limit){
        $i++;

        //$get_result = $redis->get('test:'.rand(1,100000));
        $get_result = $redis->get('test:88888');
        if($get_result === false){
            $error_num ++;
        }
        $time_length = time() - $time_start;       
    };

    echo "Total time : ".$time_limit." s .\n";
    echo "All : ".$i."\n";
    echo "Error : ".$error_num."\n";
