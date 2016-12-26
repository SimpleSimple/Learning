<?php

function check($extName){
	if($extName!='jpg'&&$extName!='gif'&&$extName!='png'){
		return false;
	}
	return true;
}

$files=$_FILES['upload_file'];
$array=explode('.', $files['name']);
$extName=strtolower(end($array));

//var_dump($extName);
//var_dump(check($extName));
if(check($extName)){
	$fileName=date('Ymdhis').rand(0,100).'.'.$extName;	
	$uploadDir='./uploads/';
	if(!is_dir($uploadDir)){
		mkdir($uploadDir);
		chmod($uploadDir,0777);
	}
	$uploadFile=$uploadDir.$fileName;
	if(move_uploaded_file($files['tmp_name'], $uploadFile)){
			echo '上传成功';
	}else{
		echo '上传失败';
	}
}else 
	echo '文件格式不正确';

?>