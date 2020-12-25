<!--该页面已完成-->


<?php require_once "../Model/common.php";?>
<html>
<head>
<title>添加班级</title>
</head>
<body>
<h3>添加班级</h3>
<form id="add_dept" name="add_dept" method="post" action="insert_dept.php">
班级名：<input type="text" name="get_dept_name"/><br/>
班级负责人：<input type="text" name="get_dept_leader"/><br/>
班级位置：<input type="text" name="get_dept_location"/><br/>


    <br/>
<input type="submit" value="添加"/>
</form>
</body>
</html>