<?php
namespace Home\Controller;

use Think\Controller;

class RedisController extends Controller {

    // public function __construct(argument)
    // {
    //     # code...
    // }

    public function index() {
        // $redis = new \Home\Model\RedisModel();
        // var_dump($redis->ping());

        $redis = new \Think\Cache\Driver\Redis(array('host' => '127.0.0.1', 'port' => 6379, timeout => 60));
        print_r($redis->get("user:userid:1:username"));
        print_r($redis->get("*"));

    }
}
