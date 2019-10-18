<title>库存</title>
<?php
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
?>
<hed><link href="store.css" type="text/css" rel="stylesheet"></hed>
<div class="store">
    <div class="storetop">库存管理</div>
    <div class="storein">
        <table class="storet" border="2" cellpadding="20">
            <tr class="storeset">
                <th>货物种类</th>
                <th>库存数量</th>
                <th>备注信息</th>
            </tr>
            <tr style="font-size: 40px">
                <td><b>1号</b></td>
                <td><?php echo $sum[0];?></td>
                <td><?php if($sum[0] < 5){echo '<article style="color: red">*库存不足！</article>';} ?></td>
            </tr>
            <tr style="font-size: 40px">
                <td><b>2号</b></td>
                <td><?php echo $sum[1];?></td>
                <td><?php if($sum[1] < 5){echo '<article style="color: red">*库存不足！</article>';} ?></td>
            </tr>
            <tr style="font-size: 40px">
                <td><b>3号</b></td>
                <td><?php echo $sum[2];?></td>
                <td><?php if($sum[2] < 5){echo '<article style="color: red">*库存不足！</article>';} ?></td>
            </tr>
        </table>
    </div>
    <form>
        <div>
            <a href="in.html"><div class="storea">进货</div></a>
            <a href="out.html"><div class="storea">出货</div></a>
        </div>
    </form>
</div>
