<?php
// 配置参数不区分大小写（因为无论大小写定义都会转换成小写），
return array(
	//'配置项'=>'配置值'
	'TMPL_ACTION_ERROR' => APP_PATH . MODULE_NAME . '/View/Public/error.html', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS' => APP_PATH . MODULE_NAME . '/View/Public/success.html', // 默认成功跳转对应的模板文件
	'TMPL_EXCEPTION_FILE' => APP_PATH . MODULE_NAME . '/View/Public/exception.html', // 异常页面的模板文件
	'TMPL_PARSE_STRING' => array(
		'__JS__' => __ROOT__ . '/Public/js/' . MODULE_NAME,
		'__IMG__' => __ROOT__ . '/Public/images/' . MODULE_NAME,
	),

    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),  //可访问模块
    'DEFAULT_MODULE'       =>    'Home',   //默认模块

);