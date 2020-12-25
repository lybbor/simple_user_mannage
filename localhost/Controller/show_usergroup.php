<!--该页面已完成-->
<?php require_once "../Model/common.php";?>
<html>
<head><title>查看小组</title>
</head>
<body>
<h3>查看小组</h3>
<form id="show_usergroup" name="show_usergroup" method="post" action="select_usergroup.php">
小组编号：<input type="text" name="show_group_id"/><br/>

<input type="submit" value="查看"/>
</form>
</body>
</html>