<?php
 function emptyInputSignup($name,$lastname,$email,$pwd) {
     $result;
     if(empty($name) || empty($email) || empty($lastname) || empty($pwd) ) {
        $result = true ; 
     }

     else {
   
     
        $result = false;
    }
    return $result;
     
 }
 function invalidUid($name) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name )){
       $result= true;
    }
    else{
       $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
       $result= true;
    }
    else{
       $result = false;
    }
    return $result;
}
function UidExist($conn,$name,$email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ..\LogIn\LogIn.php?error==stmtfailed");

    }

    mysqli_stmt_bind_param($stmt, "ss",$name,$email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
      
    }
  return $result;
    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$lastname,$email,$pwd){
    $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES(?,?,?,?); ";
    //mysqli_stmt_init e inicializon nje variabel dhe kthej nje objekt per tu krahasuar  ->mysqli_stmt_prepare 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ..\LogIn\LogIn.php?error==stmtfailed");

    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    // mysqli_stmt_bind_param   perdoret per te lidhur variablat me parapmetrat e nje deklarate tjt
    mysqli_stmt_bind_param($stmt, "ssss",$name,$email,$lastname,$hashedPwd);
    // e ekzekkuton nje variabel te derguar 
    mysqli_stmt_execute($stmt);
    // e mbyll nje parameter te derguar
    mysqli_stmt_close($stmt);
    header("location: ..\LogIn\LogIn.php?error==none");
}
// shikon se a eshte i zbrazur parametrat
function emptyInputLogin($name,$pwd) {
    $result;
    if(empty($name) || empty($pwd) ) {
       $result = true ; 
    }

    else {    
       $result = false;
   }
   return $result;  
}

function loginUser($conn,$name,$pwd){
    $uidExists = uidExist ($conn,$name,$pwd);

    if($uidExists === false){
        header("location: ../LogIn/LogIn.php?error==wrongLogIn");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    // password_verify shikon se a jon te njejt psw me hash psw
    $checkPwd = password_verify($pwd,$pwdHashed);

    if($checkPwd === false){
        header("location: ..\LogIn\LogIn.php?error==wrongLogIn");
        exit();
    }
    else if($checkPwd === true){
        
        session_start();
        $_SESSION["userid"]=$uidExists["usersId"];
        $_SESSION["useruid"]=$uidExists["usersUid"];
        header("location: ..\Admin\admin.php");
        exit();
    }

}