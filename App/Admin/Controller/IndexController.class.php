<?php
/**
 * ThinkPHP的命名空间使用规范。注意：命名空间定义必须写在所有的PHP代码之前声明，否则会出错
 * 命名空间和实际的控制器文件所在的路径是一致的，
 */
namespace Admin\Controller;

// use Admin\Controller\CommonController;
use Think\Controller;
class IndexController extends Controller {
    public function index(){


    	//$this->out('error', 'aaaaaaaaaaaaaaa');
		$this->display();
    }
}