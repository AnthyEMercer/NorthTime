<title>进货后台</title>
<?php
$gd=$_POST['gd'];
$sm=$_POST['sum'];

if($sm < 1){
    echo "<script> alert('出货数量不可小于1，请重新输入!'); location.href='out.html'; </script>";
}
else{
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "dbname";
    $conn = new mysqli($servername,$username,$password,$dbname);//登录到sql

    $goods = "SELECT sum FROM goods";
    $gsum = $conn->query($goods);
    $sum=array();
    while($s = $gsum->fetch_row()){
        $sum[] = $s[0];
    }
    $gd=$gd-1;
    $pre=$sum[$gd]-$sm;
    if($pre < 0){
        echo "<script> alert('库存不足！请重新选择出货数量！'); location.href='out.html'; </script>";
    }
    else{
        $gd=$gd+1;
        mysqli_query($conn,"UPDATE goods SET sum=$pre WHERE id=$gd");
        echo "<script> alert('出货成功！'); location.href='store.php'; </script>";
    }
}

mysqli_close($conn);
?>