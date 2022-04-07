<?php
if(isset($_POST["submitLog"] )) {

    $name = $_POST["uid"];
    $pwd = $_POST["pwd"];
	

    require_once 'db.inc.php';
    require_once 'funcition.inc.php';

    if (emptyInputLogin($name,$pwd) !== false) {
        header("location: ..\Ballina\Ballina.php?error== spobonnn");
        exit();
   }

    loginUser($conn,$name,$pwd);
}
else {
    header("location: ../Veturat/Veturat.php?error== spobon");
    exit();
}

