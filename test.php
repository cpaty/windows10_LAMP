<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once './mysql_connect.php';//导入刚才写的数据库连接文件
    $link = connect();//调用文件中的函数
    $query = "select * from users";//定义sql语句
    $result = mysqli_query($link,$query);//执行语句
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);//处理数据库返回的数据
print_r('hello');
    foreach ($data as $val){
        $html =<<<GGB
        <p>{$val['id']}</p>
        <p>{$val['username']}</p>
        <p>{$val['password']}</p>
GGB;
echo $html;}
    ?>
</body>
</html>