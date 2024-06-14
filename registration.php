<?php
include "./db.php";
$email = $_POST['theemail'];
$created_at = date("Y-m-d H:i:s");
$created = date('Y-m-d');
$theemail = trim($email);
$emaile = mysqli_real_escape_string($conn, $theemail);

//check if email exists
$emailsql = "SELECT email FROM users WHERE email = '$emaile'";
$queryemail = mysqli_query($conn,$emailsql);

$countemail = mysqli_num_rows($queryemail);

if($countemail > 0){

  echo json_encode(['emailexists' => 'Email Exists!']);
    
}else{
    $whsql = "INSERT INTO users (email,created,created_at) VALUES ('$emaile','$created','$created_at')";

    $re = mysqli_query($conn,$whsql);
    if($re) {
        $last_id = mysqli_insert_id($conn);
        $wola = $last_id;
        $message = "Successfull!";

        echo json_encode(['session_value'=>$wola,'message'=>$message]);
        
    }

}



 
?>