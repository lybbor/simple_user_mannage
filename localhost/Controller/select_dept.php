<!--班级信息查询-->

<?php require_once "../Model/common.php";?>
<?php
if(empty($_POST['show_dept_name'])){

    die("<script>alert('请输入班级编号!')</script>");
}

$get_dept_ID= ($_POST['show_dept_name']);
/*$get_user_name1= empty($_POST['show_user_name'])? die("请输入用户姓名!"):
mysqli_escape_string($_POST['show_user_name']) ;*/
//echo "$get_user_name1 <br>";


$sql="SELECT * FROM dept
WHERE dept_id='"."$get_dept_ID"."'";
$tem=mysqli_query($con,$sql);
if(!($tem))
{
    die('数据读取出错，请重新查询！');
}
else
{
    
    if(! $row=mysqli_fetch_array($tem))
    {
    echo "<script>alert('无此班级！')</script>";
    }
    else{

        echo ("<script>alert('查询成功！')</script>");
        echo "班级编号为："."{$row['dept_id']} <br>";
        echo "班级名字为："."{$row['dept_name']} <br>";
        echo "班级领导人为："."{$row['dept_leader']} <br>";
        echo "班级位置为："."{$row['dept_location']} <br>";
    }
}


//echo "$get_user_name1 <br>";
//echo $get_user_dept1;

