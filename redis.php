<?php
$redis = new Redis();
$host  = C('REDIS_HOST') ? C('REDIS_HOST') : "127.0.0.1";
$port  = C("REDIS_PORT") ? C('REDIS_HOST') : 6379;
$redis->connect($host, $port);
$redis->set('test', 'hello redis');
$redis->set('test2', 'hello redis 2');
echo $redis->get('test');
