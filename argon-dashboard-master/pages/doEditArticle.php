<?php
require_once("../db_connect.php");

$id=$_POST["id"];
$title=$_POST["editTitle"];
$content=$_POST["editContent"];
// $photo=$_POST["editPhoto"];

$sql="UPDATE article SET title='$title' ,content='$content' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
   // echo "更新成功";
} else {
    echo "更新資料錯誤: " . $conn->error;
}
$conn->close();

//header("location: articles.php");



