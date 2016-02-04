#!/usr/bin/php

<?php
// 100k memcahced set 测试

    $mem= new memcached();
    $result = $mem->addServer('127.0.0.1',11211);
    if(!$result){
        die("Memcached连接失败；\n");
    }

    $time_start = time();
    $set_limit = 100000;
    $set_num = 0;
    $error_num = 0;
    while($set_num <= $set_limit){
        $set_num++;

        $set_result = $mem->set('test:'.$set_num, time().' - '.rand(1000,10000));
        if(!$set_result){
            $error_num ++;
        }

    };
    $time_end = time();

    echo "Total set num : ".$set_limit."  .\n";
    echo "All time : ".($time_end - $time_start)."s. \n";
    echo "Error : ".$error_num."\n";
