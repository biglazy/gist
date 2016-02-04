#!/usr/bin/php

<?php
    $mysqli = @new mysqli("127.0.0.1","root","root",'test');
    if($mysqli->connect_error){
        echo "mysql 连接失败。\n";
    }

    $time_start = time();
    $set_limit = 10000;
    $set_num = 0;
    $error_num = 0;
    while($set_num <= $set_limit){
        $set_num++;

        $set_result = $mysqli->query("insert into test_innodb (`value`) values(".time().rand(1000,10000).");");
        if($set_result !== TRUE){
            $error_num ++;
        }

    };
    $time_end = time();

    echo "Total set num : ".$set_limit."  .\n";
    echo "All time : ".($time_end - $time_start)."s. \n";
    echo "Error : ".$error_num."\n";

