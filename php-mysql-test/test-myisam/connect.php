#!/usr/bin/php

<?php
    $mysqli = @new mysqli("127.0.0.1","root","root",'test');
    if($mysqli->connect_error){
        echo "mysql 连接失败。\n";
    }else{
        echo "mysql 连接成功。\n";
    }
