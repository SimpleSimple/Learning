<?php
namespace Home\Controller;
use Home\Controller\BaseController;

class MenuController extends BaseController {
	public function index() {
		if (IS_POST) {
			$where = [];
			$list = D('Menu')->where($where)->select();
			$count = D('Menu')->where($where)->count();
			foreach ($list as $key => $val) {
				if ($val['level'] == 0) {
					$list[$key]['level_name'] = '根节点';
				} elseif ($val['level'] == 1) {
					$list[$key]['level_name'] = '一级节点';
				}

			}
			$arr = ['rows' => $list, 'total' => $count];
			$this->assign("MenuList", $list);
		}
		
		return $this->display();
	}

	public function add() {
		// var_dump(I());die();
		if (IS_POST) {
			$Menu = D('Menu');
			$data['name'] = I('name');
			$data['menu_url'] = I('menuurl');
			$result = $Menu->add($data);
			if (!$result) {
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