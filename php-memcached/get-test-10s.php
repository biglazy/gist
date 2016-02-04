#!/usr/bin/php

<?php
// 10s memcached get 测试

    $mem= new memcached();
    $result = $mem->addServer('127.0.0.1',11211);
    if(!$result){
        die("Memcached连接失败；\n");
    }

    $time_limit = 10;
    $time_start = time();
    $time_length = 0;
    
    $i = 0; 
    $error_num = 0;
    while($time_length <= $time_limit){
        $i++;

        $get_result = $mem->get('test:'.rand(1,100000));
        if(!$get_result){
            $error_num ++;
        }
        $time_length = time() - $time_start;       
    };

    echo "Total time : ".$time_limit." s .\n";
    echo "All : ".$i."\n";
    echo "Error : ".$error_num."\n";
