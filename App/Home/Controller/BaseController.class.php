<?php

namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller
{
	public function sucJson($array = [], $code = 0, $data='', $msg='')
	{
		if(!empty($array)){
			echo json_encode($array);
			return;	
		}
		$array = ['code'=>$code,'$data'=>$data,'msg'=>$msg];
		echo json_encode($arr);
		return;
	}
}