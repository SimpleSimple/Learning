<?php
namespace Home\Controller;
use Home\Controller\BaseController;

class MenuController extends BaseController {
	public function index() {
		$list = D('Menu')->select();
		$retstr = empty($list) ? [] : $list;
		
		$this->assign("MenuInfo", $retstr);
		return $this->display();
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