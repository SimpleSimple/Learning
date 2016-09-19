<? 
//为了避免重复包含文件而造成错误，加了判断函数是否存在的条件： 
if(!function_exists(pageft)){ 
//定义函数pageft(),三个参数的含义为： 
//$totle：信息总数； 
//$displaypg：每页显示信息数，这里设置为默认是20； 
//$url：分页导航中的链接，除了加入不同的查询信息“page”外的部分都与这个URL相同。 
//　　　默认值本该设为本页URL（即$_SERVER["REQUEST_URI"]），但设置默认值的右边只能为常量，所以该默认值设为空字符串，在函数内部再设置为本页URL。 
function pageft($totle,$displaypg=20,$url=''){ 
[size=-1]//定义几个全局变量： 
//$page：当前页码； 
//$firstcount：（数据库）查询的起始项； 
//$pagenav：页面导航条代码，函数内部并没有将它输出； 
//$_SERVER：读取本页URL“$_SERVER["REQUEST_URI"]”所必须。 
global $page,$firstcount,$pagenav,$_SERVER; 
[size=-1]//为使函数外部可以访问这里的“$displaypg”，将它也设为全局变量。注意一个变量重新定义为全局变量后，原值被覆盖，所以这里给它重新赋值。 
$GLOBALS["displaypg"]=$displaypg; 
[size=-1]if(!$page) $page=1; 
[size=-1]//如果$url使用默认，即空值，则赋值为本页URL： 
if(!$url){ $url=$_SERVER["REQUEST_URI"];} 
[size=-1]//URL分析： 
$parse_url=parse_url($url); 
$url_query=$parse_url["query"]; //单独取出URL的查询字串 
if($url_query){ 
//因为URL中可能包含了页码信息，我们要把它去掉，以便加入新的页码信息。 
//这里用到了正则表达式，请参考“PHP中的正规表达式” 
$url_query=ereg_replace("(^|&)page=$page","",$url_query); 
[size=-1]//将处理后的URL的查询字串替换原来的URL的查询字串： 
$url=str_replace($parse_url["query"],$url_query,$url); 

//在URL后加page查询信息，但待赋值： 
if($url_query) $url.="&page"; else $url.="page"; 
}else { 
$url.="?page"; 
} 
[size=-1]页码计算： 
$lastpg=ceil($totle/$displaypg); //最后页，也是总页数 
$page=min($lastpg,$page); 
$prepg=$page-1; //上一页 
$nextpg=($page==$lastpg ? 0 : $page+1); //下一页 
$firstcount=($page-1)*$displaypg; 
[size=-1]//开始分页导航条代码： 
$pagenav="显示第 <B>".($totle?($firstcount+1):0)."</B>-<B>".min($firstcount+$displaypg,$totle)."</B> 条记录，共 $totle 条记录<BR>"; 
[size=-1]//如果只有一页则跳出函数： 
if($lastpg<=1) return false; 
[size=-1]$pagenav.=" <a href='$url=1'>首页</a> "; 
if($prepg) $pagenav.=" <a href='$url=$prepg'>前页</a> "; else $pagenav.=" 前页 "; 
if($nextpg) $pagenav.=" <a href='$url=$nextpg'>后页</a> "; else $pagenav.=" 后页 "; 
$pagenav.=" <a href='$url=$lastpg'>尾页</a> "; 
[size=-1]//下拉跳转列表，循环列出所有页码： 
$pagenav.="　到第 <select name='topage' size='1'>\n"; 
for($i=1;$i<=$lastpg;$i++){ 
if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n"; 
else $pagenav.="<option value='$i'>$i</option>\n"; 
} 
$pagenav.="</select> 页，共 $lastpg 页"; 
} 
} 
?> 

<!-- 好，分页函数已经写好了，保存为“pageft.php”，要分页时就包含它并调用pageft()函数。不过它并没有输出任何东西，但产生几个全局变量供使用：$firstcount、$displaypg、$pagenav。 
下面举例说明它的用法：  -->
<? 
//（前面程序略） 
include("pageft.php"); //包含“pageft.php”文件 
$page=$_GET['page'];//加上这句即可 
//取得总信息数 
$result=mysql_query("select * from mytable"); 
$total=mysql_num_rows($result); 
if ($total==0 )die("暂时没有信息！");//如果记录为0 
//调用pageft()，每页显示10条信息（使用默认的20时，可以省略此参数），使用本页URL（默认，所以省略掉）。 
pageft($total,10); 
//现在产生的全局变量就派上用场了： 
$result=mysql_query("select * from mytable limit $firstcount,$displaypg "); 
while($row=mysql_fetch_array($result)){ 
//（列表内容略） 
} 
[size=-1]//输出分页导航条代码： 
echo $pagenav; 
[size=-1]//（后面程序略） 
?>