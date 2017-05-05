<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../assets/css/ui.jqgrid.css" />
</head>
<body>
Welcome page!!!!
<table id="grid_table"></table>
<div id="jqGridPager"></div>
<script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script> 
<!-- <script src="/assets/js/bootstrap.min.js"></script> -->
<script src="../assets/js/jqGrid/i18n/grid.locale-cn.js"></script>
<script src="../assets/js/jqGrid/jquery.jqGrid.src.js"></script>
<script type="text/javascript">
function buildColumnNames(cols) {
    var fields = cols.split(',');
    var columns = [];
    for (var i = 0; i < fields.length; i++) {
        columns.push(fields[i]);
    }
    return columns;
}

jQuery(function($){
	 var grid_selector = "#grid_table";
	 var pager_selector="#jqGridPager";
	 var url = "server.php";
	 var cols = "菜单编号, 菜单名称, 菜单路径, 状态, 父路径";
	 
	 $(grid_selector).jqGrid({
	 	url: url,
		datatype: "json",
		colNames:buildColumnNames(cols),
		colModel:[
			{ name: 'MenuId', index: 'MenuId', width: 55, editable: false, editrules: { required: true } },
		    { name: 'MenuName', index: 'MenuName', width: 90, editable: true },
		    {
		        name: 'Url', index: 'Url', width: 100, editable: true,
		        formatter: function (cellvalue, options, rowObject) {
		            if (cellvalue == '') return '#';
		            else return cellvalue;
		        }
		    },
		    {
		        name: 'Status', index: 'Status', width: 80, align: "right", editable: true, edittype: "select",editoptions: {value: "1:显示;0:隐藏"},
		        formatter: function (cell, options, row) {
		            console.log(cell, options, row);
		            if (row.Status == 1) return "<span style='color:green'>显示</span>";
		            else return "<span style='color:red'>隐藏</span>";
		        }
		    },
            {
                name: 'ParentId', index: 'ParentId', width: 80, align: "right"
            },
		],
		viewrecords: false,
        rowNum: 20,
        rowList: [10, 20, 30],
        pager: pager_selector,
	 });
})
</script>
</body>
</html>