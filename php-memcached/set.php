#!/usr/bin/php

<?php
    $mem= new memcached();
    $result = $mem->addServer('127.0.0.1',11211);
    if(!$result){
        die("Memcached连接失败；\n");
    }
    $set_result = $mem->set('test1','test1-info-value');
    var_dump($set_result);
    if(!$set_result){
        die("Memcached set 操作失败；\n");
    }else{
        die("Memcached set 操作成功；\n");
    }


