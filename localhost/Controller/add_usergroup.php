<?php require_once "../Model/common.php";?>
<html>
<head>
<title>添加小组</title>
</head>
<body>
<h3>添加小组</h3>
<form id="add_usergroup" name="add_usergroup" method="post" action="insert_usergroup.php">
小组名：<input type="text" name="add_group_name"/><br/>
小组描述：<input type="text" name="add_group_des"/><br/>

    <br/>
<input type="submit" value="添加"/>
</form>
</body>
</html>