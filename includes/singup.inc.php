<?php
if(isset($_POST["submitSign"])) {

   $name = $_POST["name"];
   $lastname = $_POST["lastname"];
   $email = $_POST["email"];
   $pwd = $_POST["pass"];
   
   require_once 'db.inc.php';
   require_once 'funcition.inc.php';
   
   if (emptyInputSignup($name,$lastname,$email,$pwd) !== false) {
    header("location: ..\LogIn\LogIn.php?error==emptyinput");
    exit();

   }
   if (invalidUid($name) !== false) {
    header("location: ..\LogIn\LogIn.php?error==invalidUid");
    exit();
   }
   if (invalidEmail($email) !== false) {
    header("location: ..\LogIn\LogIn.php?error==invalidEmail");
    exit();
   }
   if (UidExist($conn, $name,$email) !== false) {
    header("location: ..\LogIn\LogIn.php?error==usernametaken");
    exit();
   }

createUser($conn,$name,$lastname,$email,$pwd);

}

else {
    header("location: ..\LogIn\LogIn.php?error==itsOK");
    exit();
   
}