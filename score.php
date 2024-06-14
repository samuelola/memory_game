<?php
session_start();
include "./db.php";
$moves = $_POST['movess'];
$stars = $_POST['starss'];
$seconds = $_POST['secondss'];
$created_at = date("Y-m-d H:i:s");
$user_id = $_POST['user_id'];

//get user attemps

$userattemp = "SELECT * FROM score_board WHERE user_id = $user_id";
$result = mysqli_query($conn,$userattemp);
//count
$countt = mysqli_num_rows($result);

if($countt == 3){

//    $message = "You have made $countt Attempts";
//    $woll = $countt;
//    echo json_encode(['valuee'=>$woll,'message'=>$message]);

}else{
    $whsql = "INSERT INTO score_board (moves,points,secs,user_id,created_at) VALUES ('$moves','$stars','$seconds','$user_id','$created_at')";

    $re = mysqli_query($conn,$whsql);

    $userattemp = "SELECT * FROM score_board WHERE user_id = $user_id";

    $result = mysqli_query($conn,$userattemp);

    $countter = mysqli_num_rows($result);
    
    if($countter > 0){
        
        $message = "You have made $countter Attempts";

        echo json_encode(['valuee'=>$countter,'message'=>$message]);
    }

}


 
?>