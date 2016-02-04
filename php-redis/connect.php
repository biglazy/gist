#!/usr/bin/php

<?php
    $redis = new redis();
    $result = $redis->connect('127.0.0.1',6379);
    var_dump($result);

