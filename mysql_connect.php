<?php
function connect() {
    $host     = 'localhost';#和数据库的host保持一致
    $username = 'root';#和phpstudy数据库的用户保持一致
    $password = 'root';#和phpstudy数据库的密码保持一致
    $dbname   = 'test1';#和navicat创建的数据库名字保持一致
    $port     = '3308';#和phpstudy数据库配置文件中端口保持一致
    $link     = @mysqli_connect($host,$username,$password,$dbname,$port); 

    if (!$link) {
        return "null";
        die('连接错误 (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } else {
        mysqli_set_charset($link,'utf8');
        return $link;
    }
}
?>