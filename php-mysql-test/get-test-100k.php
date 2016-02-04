#!/usr/bin/php

<?php
    $mysqli = @new mysqli("127.0.0.1","root","root",'test');
    if($mysqli->connect_error){
        echo "mysql 连接失败。\n";
    }

    $time_start = time();
    $get_limit = 100000;
    $get_num = 0;
    $error_num = 0;
    $empty_num = 0;
    while($get_num <= $get_limit){
        $get_num++;

        $get_result = $mysqli->query("select * from test_innodb where id = ".rand(1,30000));
        if(!$get_result){
            $error_num ++;
        }else{
            if($mysqli->affected_rows <= 0){
                $empty_num ++;
            }
        }

    };
    $time_end = time();

    echo "Total get num : ".$get_limit."  .\n";
    echo "All time : ".($time_end - $time_start)."s. \n";
    echo "Error : ".$error_num."\n";
    echo "Empty : ".$empty_num."\n";

