<!--已完成-->
<?php require_once "../Model/common.php";?>
<?php
if(empty($_POST['add_group_name'])
||empty($_POST['add_group_des']))
{
    die("请将信息填写完整！");
}
else
{
$GrpName=($_POST['add_group_name']);
//echo $UserName;
$GrpDes =($_POST['add_group_des']);
// echo $UserName."<br>";
// echo $UserPsw."<br>";
// echo $UserSex."<br>";
// echo $UserCls."<br>";
// echo $UserGrp."<br>";

$sql = "insert into usergroup(group_name,group_desc)values('$GrpName','$GrpDes')" ;

//插入数据库
if (!(mysqli_query( $con , $sql )))
{
   echo "<script>alert('数据库操作失败')</script>" ;
    
}
else
{
echo "<script>alert('小组添加成功！')</script>" ;

$q="select * from usergroup where group_name='".$GrpName."'";//设置查询指令
$result=mysqli_query($con,$q);//执行查询
$row=mysqli_fetch_assoc($result);

echo "小组编号：".$row['group_id']."<br>";
echo "小组名：".$row['group_name']."<br>";
echo "小组描述：".$row['group_desc']."<br>";

}


}

