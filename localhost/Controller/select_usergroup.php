<?php require_once "../Model/common.php";?>
<?php
if(empty($_POST['show_group_id'])){

    die("<script>alert('请输入小组编号!')</script>");
}

$get_Grp_ID= ($_POST['show_group_id']);
/*$get_user_name1= empty($_POST['show_user_name'])? die("请输入用户姓名!"):
mysqli_escape_string($_POST['show_user_name']) ;*/
//echo "$get_user_name1 <br>";


$sql="SELECT * FROM usergroup
WHERE group_id='"."$get_Grp_ID"."'";
$tem=mysqli_query($con,$sql);
if(!($tem))
{
    die('数据读取出错，请重新查询！');
}
else
{
    
    if(! $row=mysqli_fetch_array($tem))
    {
    echo "<script>alert('无此小组！')</script>";
    }
    else{

        echo ("<script>alert('查询成功！')</script>");
        echo "小组编号为："."{$row['group_id']} <br>";
        echo "小组名字为："."{$row['group_name']} <br>";
        echo "小组介绍为："."{$row['group_desc']} <br>";
    }
}


//echo "$get_user_name1 <br>";
//echo $get_user_dept1;

