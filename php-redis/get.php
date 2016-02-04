#!/usr/bin/php

<?php
    $redis = new redis();
    $result = $redis->connect('127.0.0.1',6379);
    if(!$result){
        die("Redis连接失败；\n");
    }
    $get_result = $redis->get('test1');
    var_dump($get_result);
    if($get_result === false){
        die("Redis get 操作失败；\n");
    }else{
        echo "Value : ".$get_result."\n";
        die("Redis get 操作成功；\n");
    }


