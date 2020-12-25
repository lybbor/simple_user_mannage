<!--
暂时没用上:P 
-->
<?php require_once "../Model/common.php";?>
<html>
<head><title>修改用户</title>
</head>
<body>
    <h3>修改用户</h3>
    <form id="add_user" name="add_user" method="post" action="update_user.php" >
    需要修改的用户的id：<input type="text" name="the_user_id"/><br/>
    <!--  ?user_id=
    ?php echo trim($_GET['user_id']);?>
    -->
    <br/>
    用户姓名：<input type="text" name="the_user_name"/><br/>
    用户口令：<input type="text" name="the_user_psw"/><br/>
    用户性别：<input type="text" name="the_user_sex"/><br/>
    用户年龄：<input type="text" name="the_user_age"/><br/>
    所属班级：<select name="the_user_dept">
    <option value=0>请选择班级</option>
    <?php
    $sql="select * from dept";
    $result=mysqli_query($con,$sql);
    while($rows=mysqli_fetch_row($result)){
        echo "<option value=".$rows[0].">".$rows[1]."</option>";
    }
    ?>
    </select><br/>
小组名：<select name="the_user_group">
    <option value="0">请选择小组</option>
    <?php
    $sql="select * from usergroup";
    $res=mysqli_query($con,$sql);
    while($rows=mysqli_fetch_row($res)) {
        echo "<option value=".$rows[0].">".$rows[1]."</option>";
    }

    ?>
    </select><br/>
<br/>
<input type="submit" value="修改用户信息"/>
</form>
</body>
</html>
