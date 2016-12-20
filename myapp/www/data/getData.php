<?php
header('Content-Type:application/json;charset=UTF-8');
$conn = mysqli_connect('127.0.0.1','root','','ionic-demo',3306);
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql = "SELECT * FROM news3";
$result = mysqli_query($conn,$sql);
$arr = [];
while(($essay = mysqli_fetch_assoc($result))!=null){
    $arr[] = $essay;
}
echo json_encode($arr);
