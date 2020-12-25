<!-- 已完成 -->
<?php require_once "../Model/common.php";?>

<?php

$get_user_id=($_POST["the_user_id"]);
$get_user_name=($_POST['the_user_name']);
$get_user_psw=($_POST['the_user_psw']);
$get_user_sex=($_POST['the_user_sex']);
$get_user_age=($_POST['the_user_age']);
$get_user_dept=($_POST['the_user_dept']);
$get_user_group=($_POST['the_user_group']);


echo "$get_user_name <br/>";

$sql="UPDATE users SET user_name='".
$get_user_name."',user_psw='".$get_user_psw."',user_sex='".
$get_user_sex."',user_age='".$get_user_age."',user_dept='".
$get_user_dept."',user_group='".$get_user_group."'".
" WHERE user_id='";
$sql=$sql.$get_user_id;




    $sql="UPDATE users SET user_name='".
    $get_user_name."',user_psw='".$get_user_psw."',user_sex='".
    $get_user_sex."',user_age='".$get_user_age."',user_dept='".
    $get_user_dept."',user_group='".$get_user_group."'".
    " WHERE user_id=";
    $sql=$sql.$get_user_id.";";
// echo $get_user_group;
// echo $sql;

if(mysqli_query($con,$sql))
    echo "用户修改成功!<br>";
else
    echo "用户修改失败!<br>";

