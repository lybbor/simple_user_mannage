<!--已完成-->
<?php require_once "../Model/common.php";?>


<?php
if(empty($_POST['user_name'])||empty($_POST['user_psw'])
||empty($_POST['user_sex'])||empty($_POST['user_age']))
{
    die("请将信息填写完整！");
}
else
{
$UserName=($_POST['user_name']);
//echo $UserName;
$UserPsw =($_POST['user_psw']);
$UserSex =($_POST['user_sex']);
$UserAge =($_POST['user_age']);
$UserCls =($_POST['show_user_name']);
$UserGrp =($_POST['user_group']);
// echo $UserName."<br>";
// echo $UserPsw."<br>";
// echo $UserSex."<br>";
// echo $UserCls."<br>";
// echo $UserGrp."<br>";

$sql = "insert into users(user_name, user_psw, user_sex,user_age,user_dept,
user_group)values('$UserName','$UserPsw','$UserSex','$UserAge',
'$UserCls','$UserGrp')" ;

//插入数据库
if (!(mysqli_query( $con , $sql )))
{
   echo "<script>alert('数据插入失败');//window.location.href='../'</script>" ;
    
}
else
{
echo "<script>alert('注册成功！')</script>" ;

$q="select * from users where user_name='".$UserName."'";//设置查询指令
$result=mysqli_query($con,$q);//执行查询
$row=mysqli_fetch_assoc($result);

echo "用户编号：".$row['user_id']."<br>";
echo "用户姓名：".$UserName."<br>";
echo "用户密码：".$UserPsw."<br>";
echo "用户性别：".$UserSex."<br>";
echo "用户年龄：".$UserAge."<br>";
echo "用户班级：".$UserCls."<br>";
echo "用户小组：".$UserGrp."<br>";

}


}

