<!--用户信息查询-->
<!--完成-->

<?php require_once "../Model/common.php";?>
<?php
if(empty($_POST['show_user_name'])){

    die("请输入用户姓名!");
}

$get_user_name1= ($_POST['show_user_name']);
/*$get_user_name1= empty($_POST['show_user_name'])? die("请输入用户姓名!"):
mysqli_escape_string($_POST['show_user_name']) ;*/
//echo "$get_user_name1 <br>";

$get_user_dept1=($_POST['show_user_dept']);


$sql="SELECT * FROM users 
WHERE user_name='"."$get_user_name1"."'"." AND user_dept='"."$get_user_dept1"."'";
$tem=mysqli_query($con,$sql);
if(!($tem))
{
    die('数据读取出错，请重新查询！');
}
else
{
    if(! $row=mysqli_fetch_array($tem))
    {
    echo "<script>alert('无此用户！')</script>";
    }
    else{
        echo  ("<script>alert('查询成功！')</script>");
        do
        {
        echo "用户编号为："."{$row['user_id']} <br>";
        echo "用户名字为："."{$row['user_name']} <br>";
        echo "用户密码为："."{$row['user_psw']} <br>";
        echo "用户性别为："."{$row['user_sex']} <br>";
        echo "用户年龄为："."{$row['user_age']} <br>";
        echo "用户班级为："."{$row['user_dept']} <br>";
        echo "用户小组为："."{$row['user_group']} <br><br>";
        }while($row=mysqli_fetch_array($tem));
    }
}


//echo "$get_user_name1 <br>";
//echo $get_user_dept1;

