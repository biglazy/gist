#!/usr/bin/php

<?php
    $redis = new redis();
    $result = $redis->connect('127.0.0.1',6379);
    if(!$result){
        die("Redis连接失败；\n");
    }
    $set_result = $redis->set('test1','test1-info-value');
    var_dump($set_result);
    if(!$set_result){
        die("Redis set 操作失败；\n");
    }else{
        die("Redis set 操作成功；\n");
    }


