<?php
namespace Common\Model;
use Think\Model;

class AdminUserModel extends Model {

	protected $tableName = "admin_user";

	protected $_validate = array(
		array('admin_name', 'require', '用户名必须！'), //默认情况下用正则进行验证
		array('admin_pass', 'require', '密码必须！'),
		array('admin_pass', '6,12', '密码格式不正确', 0, 'length'),
	);

	public function get($data = '') {
		if (empty($data)) {
			$data = I('post.');
		}
		var_dump($data);
	}
}