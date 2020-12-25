<!--已完成-->

<?php require_once "../Model/common.php";?>
<?php
if(empty($_POST['get_dept_name'])
||empty($_POST['get_dept_leader'])||empty($_POST['get_dept_location']))
{
    die("请将信息填写完整！");
}
else
{
//echo $UserName;
$DeptName =($_POST['get_dept_name']);
$DeptLdr =($_POST['get_dept_leader']);
$DeptLct =($_POST['get_dept_location']);
// echo $UserName."<br>";
// echo $UserPsw."<br>";
// echo $UserSex."<br>";
// echo $UserCls."<br>";
// echo $UserGrp."<br>";

$sql = "insert into dept(dept_name, dept_leader, dept_location
)values('$DeptName','$DeptLdr','$DeptLct')" ;

//插入数据库
if (!(mysqli_query( $con , $sql )))
{
   echo "<script>alert('数据插入失败');//window.location.href='../'</script>" ;
}
else
{
echo "<script>alert('班级添加成功！')</script>" ;

$q="select * from dept where dept_name='".$DeptName."'";//设置查询指令
$result=mysqli_query($con,$q);//执行查询
$row=mysqli_fetch_assoc($result);

echo "班级编号：".$row['dept_id']."<br>";
echo "班级名：".$row['dept_name']."<br>";
echo "班级负责人：".$row['dept_leader']."<br>";
echo "班级位置：".$row['dept_location']."<br>";
}


}

