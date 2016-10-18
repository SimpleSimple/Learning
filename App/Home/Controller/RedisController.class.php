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
        //获取所有用户，遍历Redis键值
        $list = D('user')->select();
        foreach ($list as $k => $v) {
            print_r('user:userid:'.$v['id'].':username '.$redis->get("user:userid:".$v['id'].":username"));
            print_r("<br/>");
        }        

    }
}
