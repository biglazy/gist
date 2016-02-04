#!/usr/bin/php

<?php
    $memcached= new Memcached();
    $result = $memcached->addServer('127.0.0.1',11211);
    var_dump($result);
    if($result){
        echo "连接成功\n";
    }else{
        echo "连接失败\n";
    }

