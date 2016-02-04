#!/usr/bin/php

<?php
    $mem= new memcached();
    $result = $mem->addServer('127.0.0.1',11211);
    if(!$result){
        die("Memcached连接失败；\n");
    }
    $get_result = $mem->get('test1');
    var_dump($get_result);
    if(!$get_result){
        die("Memcached get 操作失败；\n");
    }else{
        die("Memcached get 操作成功；\n");
    }


