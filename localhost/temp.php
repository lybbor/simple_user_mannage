<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>人员信息管理</title>
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <center>
        <br>
        <h1>成员信息管理</h1>
        <ul class="tabs">
            <li>
                <input type="radio" name="tabs" id="tab1" checked />
                <label for="tab1">所有成员</label>
                <div id="tab-content1" class="tab-content">
                    <?php
                    //如果结果集没有数据 就打印错误信息在表头
                    var_dump($result);
                    if (!$result->num_rows > 0) {
                        echo "<center><caption><h2>数据为空！</h2></caption></center>";
                    }
                    ?>
                    <table border="1" style="text-align: center;">
                        <colgroup>
                            <col width="150">
                            <col width="150">
                            <col width="300">
                            <col width="100">
                            <col width="100">
                        </colgroup>
                        <thead>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>手机号码</th>
                            <th>修改</th>
                            <th>删除</th>
                        </thead>
                        <?php
                        //遍历数据集并插入表格
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                    <td>' . $row["mname"] . '</td>
                                    <td>' . $row["sex"] . '</td>
                                    <td>' . $row["tel"] . '</td>
                                    <td><button onclick="modify(' . $row['id'] . ')">修改</button></td>
                                    <td><button onclick="deleteM(' . $row['id'] . ')">删除</button></td>
                                </tr>';
                        }

                        ?>
                    </table>
                </div>
            </li>

            <li>
                <input type="radio" name="tabs" id="tab2" />
                <label for="tab2">添加成员</label>
                <div id="tab-content2" class="tab-content">
                    <form action="../Controller/insert.php" method="post" class="basic-grey">

                         <label>
                                <span>新成员姓名:</span>
                                <input id="name" type="text" name="name" placeholder="新成员姓名" style="height:36px" required>
                        </label>
                        <label>
                                <span>新成员电话:</span>
                                <input id="tel" type="text" name="tel" placeholder="新成员电话" style="height:36px" required>
                        </label>
                        <label>
                                <span>新成员性别:&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <select name="sex" style="height:36px" required>
                                <option>--请选择--</option>
                                <option value="男">男🚹</option>
                                <option value="女">女🚺</option>
                            </select>
                        </label>
                        <label>
                            <input type="submit" class="button" value="提交" style="height:36px;width:72px;margin-left:20%" />
                            <input type="reset" class="button" value="重置" style="height:36px;width:72px;margin-left:24%" />
                        </label>
                    </form>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" id="tab3" />
                <label for="tab3" onclick="alert('请在所有人员中选择需要修改的成员！');location.reload();">修改成员信息</label>
                <div id="tab-content3" class="tab-content">
                </div>
            </li>
        </ul>
    </center>
</body>
<script>
    //删除成员
    function deleteM(id) {
        window.location.href = "../Controller/delete.php?id=" + id;
    }

    function modify(id) {
        window.location.href = "modify.php?id=" + id;
    }
</script>

</html>