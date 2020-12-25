<!--已完成-->

<?php require_once "../Model/common.php";?>

<head><title>删除用户</title>
</head>
    <form action="" method="post">
        输入需要删除的用户编号:<input type="text" name="delete_id" />
        <input type="submit" name="submit" value="确定">
    </form>

    <?php
//验证---
//$sql="select * from users";
//$result=mysqli_query($con,$sql);
//while($rows=mysqli_fetch_row($result)){
//echo "$rows[0] <br>";
//}
//------


    if(empty($_POST['delete_id'])){
    die("请输入需要删除的用户编号!");
    }


    $the_delete_user_id=($_POST['delete_id']);
    echo "$the_delete_user_id";
    $sql="DELETE FROM users WHERE user_id=";
    $sql=$sql.$the_delete_user_id;
    
    //echo $sql;
    //var_dump(mysqli_query($con,$sql));

    ///有问题部分
    if(mysqli_query($con,$sql))
        echo "用户删除成功！<br>";
    else
        echo "用户删除失败！<br>";
    ?>