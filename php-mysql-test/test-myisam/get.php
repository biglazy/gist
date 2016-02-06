#!/usr/bin/php

<?php
    $mysqli = @new mysqli("127.0.0.1","root","root",'test');
    if($mysqli->connect_error){
        echo "mysql 连接失败。\n";
    }

    //$mysqli->query("select * from test_myisam where id = ".rand(1,100000));
    $result = $mysqli->query("select * from test_myisam where id = 3");

    if(!$result){
        echo "查询失败:".$mysqli->error."\n";
    }else{
        echo "查询成功.\n";
        if($mysqli->affected_rows > 0){
            echo "查到 ".$mysqli->affected_rows." 行.\n";
        }else{
            echo "没有查到数据.\n";
        }
    }
