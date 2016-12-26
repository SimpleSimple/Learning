<?php
namespace Home\Controller;
use Home\Controller\BaseController;

class TestController extends BaseController {
	/**
	 * 首页
	 * @return
	 */
	public function index() {

		// array_push
		$arr1 = ['SH10000', 'SZ10000', 'SH100002'];
		$array = [];
		foreach ($arr1 as $key => $value) {
			array_push($array, $value);
		}
		var_dump($array);

		// 数组去重
		$arr = array(
			'0' => array('code' => 'SH100001', 'name' => '平安中国'),
		);
		$arr2 = array(
			'0' => array('code' => 'SH100001', 'name' => '平安中国', 'price' => '34.95'),
		);
		$list = array_merge($arr, $arr2);
		var_dump($list);
		$list = $arr2+$arr;
		var_dump($list);

		

		// array_combine 合并两个数组为一个新的数组，其中一个数组元素为键名，另一个为键值
		$fname = array('Bill','Steve','Mary');
		$age = array(60, 56, 31);
		$c = array_combine($fname, $age);
		var_dump($c);		
		// array_walk
		
		// $class = new \Home\Controller\JsonResult();
		// $class->getMarket();

		return $this->display();
	}

	/**
	 * 使用Vue做下拉分页数据加载
	 * @return
	 */
	public function demo07() {
		return $this->display();
	}

	/**
	 * radon-ui
	 * @return
	 */
	public function demo06() {
		return $this->display();
	}

	/**
	 * JS学习
	 * @return
	 */
	public function demo05() {
		return $this->display();
	}

	/**
	 * Vue学习页面
	 */
	public function demo04() {
		if (IS_POST) {
			$list = D('Menu')->select();
			// $arr = ['code'=>1, 'data'=>'', 'msg'=>''];
			// print_r(json_encode($arr));die();
			$retstr = empty($list) ? [] : $list;
			echo (json_encode($retstr));
			return;
		}
		return $this->display();
	}

	public function demo01() {
		return $this->display();
	}

	public function demo02() {
		return $this->display();
	}

	public function demo03() {

		// $rules = array(
		// 	array('admin_name', 'require', '用户名必须！'), //默认情况下用正则进行验证
		// 	array('admin_pass', 'require', '密码必须！'),
		// 	array('admin_pass', '6,12', '密码格式不正确', 0, 'length'),
		// 	// array('name', '', '帐号名称已经存在！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
		// 	// array('value', array(1, 2, 3), '值的范围不正确！', 2, 'in'), // 当值不为空的时候判断是否在一个范围内
		// 	// array('repassword', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
		// 	// array('password', 'checkPwd', '密码格式不正确', 0, 'function'), // 自定义函数验证密码格式
		// );

		if (IS_POST) {
			$AdminUser = D('AdminUser');
			$data = $AdminUser->get();
			$result = $AdminUser->add();
			if (!$result) {
				return $this->error('添加失败');
			}
			return $this->error('添加成功');
		}
		$this->display();

		// if (IS_POST) {
		// 	$AdminUser = D('AdminUser');
		// 	// $model = $AdminUser->create();
		// 	// var_dump($model);
		// 	if (!$AdminUser->create($_POST)) {
		// 		exit($AdminUser->getError());
		// 	}
		// 	$data = $AdminUser->create($_POST);
		// 	$res = $AdminUser->add();
		// 	// var_dump($AdminUser->getLastSql());
		// 	if (!$res) {
		// 		return $this->error('添加失败');
		// 	}
		// 	return $this->success('添加成功');
		// }
		// return $this->display();
	}

	public function add() {
		if (IS_POST) {
			$arr = array('code' => -100, 'data' => '', 'msg' => '');
			echo json_encode($arr);
			return;
		}
		$arr = array('code' => -100, 'data' => '', 'msg' => '');
		$this->sucJson($arr);
	}
}
