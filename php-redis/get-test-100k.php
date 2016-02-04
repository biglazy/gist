#!/usr/bin/php

<?php
// 100k memcached get 测试

    $mem= new memcached();
    $result = $mem->addServer('127.0.0.1',11211);
    if(!$result){
        die("Memcached连接失败；\n");
    }

    $time_start = time();
    $get_limit = 100000;
    $get_num = 0;
    $error_num = 0;
    while($get_num <= $get_limit){
        $get_num++;

        $get_result = $mem->get('test:'.rand(1,100000));
        if($get_result === false){
            $error_num ++;
        }

    };
    $time_end = time();

    echo "Total get num : ".$get_limit."  .\n";
    echo "All time : ".($time_end - $time_start)."s. \n";
    echo "Error : ".$error_num."\n";
