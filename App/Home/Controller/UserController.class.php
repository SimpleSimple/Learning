<?php
namespace Home\Controller;

class UserController extends \Think\Controller
{
	public function login(){
		$UserModel = D('user');
		if(IS_POST){
			$username = I('username');
			$password = I('password');
			$res = $UserModel->where("username='".$username."' AND password='".$password."'")->find();
			var_dump($res);die;
			if($res){
				$userid = $res['id'];
				$token = md5($username + $password);
				$flag = $UserModel->updateToken($token , $userid);
				if($flag == 0){
					redirect('Index/index');
				}
				else{
					$this->error();
				}
			}
		}
		$this->redirect('Public/login');
	}
}