<!--完成-->
<?php require_once "../Model/common.php";?>
<html>
<head><title>查看用户</title>
</head>
<body>
<h3>查看用户</h3>
<form id="show_user" name="show_user" method="post" action="select_user.php">
用户姓名：<input type="text" name="show_user_name"/><br/>
所属班级：<select name="show_user_dept">
<option value=0>所有班级</option>

<?php
$sql="select * from dept";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_row($result)){
echo "<option value=".$rows[0].">".$rows[1]."</option>";
}
?>


</select><br/>
<br/>
<input type="submit" value="查看"/>
</form>
</body>
</html>