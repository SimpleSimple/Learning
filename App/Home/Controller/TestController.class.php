<?php
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller {

	public function index() {
		return $this->display();
	}

	public function demo01() {
		return $this->display();
	}

	public function demo02() {
		return $this->display();
	}

	public function demo03() {

		$rules = array(
			array('admin_name', 'require', '用户名必须！'), //默认情况下用正则进行验证
			array('admin_pass', 'require', '密码必须！'),
			array('admin_pass', '6,12', '密码格式不正确', 0, 'length'),
			// array('name', '', '帐号名称已经存在！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
			// array('value', array(1, 2, 3), '值的范围不正确！', 2, 'in'), // 当值不为空的时候判断是否在一个范围内
			// array('repassword', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
			// array('password', 'checkPwd', '密码格式不正确', 0, 'function'), // 自定义函数验证密码格式
		);

		if (IS_POST) {
			// var_dump($_POST);
			$AdminUser = D('AdminUser');
			if (!$AdminUser->validate($rules)->create()) {
				exit($AdminUser->getError());
			}
			var_dump('hello');
		}
		return $this->display();
	}

}
