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
		// var_dump(I());die();
		if (IS_POST) {
			$Menu = D('Menu');
			$data['name'] = I('name');
			$data['menu_url'] = I('menuurl');
			$result = $Menu->add($data);
			if(!$result){
				$arr = array('code' => -100, 'data' => '', 'msg' => '添加失败');
				return $this->sucJson($arr);
			}
			$arr = array('code' => 0, 'data' => '', 'msg' => '添加成功');
			return $this->sucJson($arr);
		}
		$arr = array('code' => -100, 'data' => '', 'msg' => '');
		$this->sucJson($arr);
	}
}