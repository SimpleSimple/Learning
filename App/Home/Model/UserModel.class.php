<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
	protected $tableName = 'user'; 

	public function updateToken($token, $userid = 0){
		if($userid <= 0){
			return [];
		}
		$data['token'] =$token;
		$data['expire_time']= date('Y-m-d H:i:s', time()+30*60);
		$flag = $this->where("id='".$userid."'")->save($data);
		return $flag;
	}

}