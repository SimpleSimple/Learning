<?php
/**
* 常用类
*/
class Common
{
	/**
	 * 自动生成随机用户名
	 * @param  integer $len 生成用户名长度
	 */
	public function genUserNumber($len=6)
	{
	    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    $username = "";
	    for ( $i = 0; $i < $len; $i++ )
	    {
	    	$rand=mt_rand(0, strlen($chars));	    	
			$username .= $chars[mt_rand(0, strlen($chars))];
	    }
	    //var_dump($username);
	    return strtoupper(base_convert(time() - 1420070400, 10, 36)).$username;
	}	
}

$common=new Common();
$username=$common->genUserNumber(4);
var_dump($username);