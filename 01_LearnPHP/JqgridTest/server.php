<?php

$response=array(
array('MenuId'=1,'MenuNo'=>'01','MenuName'=>'菜单管理','Url'=>'','Status'=>1,'ParentId'=>''),
array('MenuId'=2,'MenuNo'=>'01001','MenuName'=>'菜单列表','Url'=>'/menu/index','Status'=>1,'ParentId'=>'01'),
array('MenuId'=3,'MenuNo'=>'02','MenuName'=>'用户管理','Url'=>'','Status'=>1,'ParentId'=>''),
array('MenuId'=4,'MenuNo'=>'02001','MenuName'=>'用户列表','Url'=>'','Status'=>1,'ParentId'=>'02'),
	);

echo json_encode($response);