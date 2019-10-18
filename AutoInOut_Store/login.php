<title>登录验证</title>>
<?php
    $user=trim($_POST['user']);
    $pass=trim($_POST['pass']);//接收表单数据

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "dbname";
    $conn = new mysqli($servername,$username,$password,$dbname);//登录到sql

    $sql = "SELECT name,password FROM users";
    $result = $conn->query($sql);
    $if = '0';
    while($row = $result->fetch_assoc()) {
        if($user === $row["name"] && $pass === $row["password"]) $if=1;
    }
    if($if === '0'){
        echo "<script> alert('用户名或密码有误，请重新登录。'); location.href='login.html'; </script>";
    }
    else{
        header("location:store.php");
    }
    ?>