<?php
namespace Home\Controller;

use Think\Controller;

class RedisController extends Controller
{

    // public function __construct(argument)
    // {
    //     # code...
    // }

    public function index()
    {
        $host = C('REDIS_HOST') ? C('REDIS_HOST') : "127.0.0.1";
        $port = C("REDIS_PORT") ? C('REDIS_PORT') : "6379";

        // $redis = new Redis();
        // $redis->connect($host, $port);
        // $redis->set('test', 'hello redis');
        // $redis->set('test2', 'hello redis 2');
        // echo $redis->get('test');

        $redis = new \Think\Cache\Driver\Redis(array($host, $port));
        //$redis->connect($host, $port);
        $redis->set('test', 'hello redis');
        $redis->set('test2', 'redis set');
        echo $redis->get('test');

        $redis->set("newsid", array(10001, 10002, 10003, 10004));
        var_dump($redis->get("newsid"));

    }
}
