<?php
$servername="localhost";
$username="admin";
$password="98765";
$dbname_="midterm_project";

//creat connection
$conn =new mysqli($servername,$username,$password,$dbname_);
//檢查連線
if($conn->connect_error){
    die("連線失敗: ". $conn->connect_error);
}else{
     // echo "連線成功";
}