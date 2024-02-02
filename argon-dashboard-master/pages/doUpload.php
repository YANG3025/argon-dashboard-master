<?php
require_once("../db_connect1.php");

if (!isset($_POST["name"])) {
    echo "請循正常管道進入此頁";
    exit;
}
if ($_FILES["pic"]["error"] == 0) {
    $filename=time();
    $fileExt=pathinfo($_FILES["pic"]["name"],PATHINFO_EXTENSION);
    $filename=$filename.".".$fileExt;
    //echo $filename;
    //exit;

    if (move_uploaded_file($_FILES["pic"]["tmp_name"], "../picture/" .$filename)) {
        // $filename = $_FILES["pic"]["name"];

        $now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO article_img (filename ,created_at)
        VALUES ('$filename','$now')";
        if ($conn->query($sql)) {
           // echo "新增資料完成";
        } else {
            echo "新增資料錯誤: " . $conn->error;
        }


        echo "upload success!";
    } else {
        echo "upload failed!";
    }
}
// var_dump($_FILES["pic"]);
$conn->close();
