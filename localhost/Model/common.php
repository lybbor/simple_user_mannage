<!--连接完成-->

<?php
$servername = "localhost";
$username = "root"; //用户名
$password = "root"; //密码
$dbname = "db_user"; //对应的数据库
 
// 创建连接
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
}


//echo "连接成功";
// $sql="select * from dept";
// $result=mysqli_query($con,$sql);
//  while($rows=mysqli_fetch_row($result)){
//        echo "<option value=".$rows[0].">".$rows[1]."</option>";
//   }

