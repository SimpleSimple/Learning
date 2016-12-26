<?php
// namespace Home\Controller;

class JsonResult {
	const ERR_NO_PARAMETER = 1;

	public static $marketEnum = array('SH' => '1', 'SZ' => '2');

	public static $code2Msg = array(
		self::ERR_NO_PARAMETER => '没有参数',
	);

	public static function getMarket() {
		echo 'market:' . $marketEnum['SH'];
	}
}

$class = new JsonResult();
$class::getMarket();