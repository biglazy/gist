#!/usr/bin/php

<?php
    $mysqli = @new mysqli("127.0.0.1","root","root",'test');
    if($mysqli->connect_error){
        echo "mysql 连接失败。\n";
    }

    $result = $mysqli->query("insert into test_myisam (`value`) values(".time().rand(1000,10000).");");

    if($result === true){
        echo "插入成功\n";
    }else{
        echo "插入失败:".$mysqli->error."\n";
    }
