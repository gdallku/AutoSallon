<?php
if (isset($_POST['submit'])) {
    
    require_once 'db.inc.php';
    require_once "funcition.inc.php";

    

    $name= $_POST["emri"];
    $lastname=$_POST["mbiemri"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    //validimi i kontakt formes ne Contact.php.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)){
        header("Location: ../Kontakti.php?error=invalidmailuid");
        exit();  
    }
    
    // preg_match shikon se a jone match parametrat
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        header("Location: ../Kontakti.php?error=invaliduid&mail=".$email);
        exit();  
    }
    else{

        //konektimi i contact formes ne databazen "con".  
        $sql = "SELECT emri FROM kontakti WHERE emri=?";
            //mysqli_stmt_init e inicializon nje variabel dhe kthej nje objekt per tu krahasuar  ->mysqli_stmt_prepare 
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../Kontakti.php?error=sqlerror");
        exit();
        }
        else{
    // mysqli_stmt_bind_param   perdoret per te lidhur variablat me parapmetrat e nje deklarate tjt
            mysqli_stmt_bind_param($stmt, "s", $name);
            // e ekzekkuton nje variabel te derguar 
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            // kthen nr e rreshtav 
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../Kontakti.php?error=wrongemail&mail=".$email);
                exit();
            }
            else{
                //insertimi i te dhenave ne databaze "con" ku eshte simoluar nje emailserver.
                $sql = "INSERT INTO kontakti (emri,mbiemri ,emial,pershtypja) VALUES (?, ?, ?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../Kontakti.php?error=error");
                    exit();
                    }
                    else{
                        //perfundimi i ekzekutimit te komandave perfaqesuse ne databaze dhe mesazhi success.
                        // mysqli_stmt_bind_param   perdoret per te lidhur variablat me parapmetrat e nje deklarate tjt
                        mysqli_stmt_bind_param($stmt, "ssss", $name,$lastname, $email, $message);
                        mysqli_stmt_execute($stmt);
                        header("location: ..\Ballina\Ballina.php?Email u dergu");
                        exit();

                    }
            }

        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../Kontakti.php");
    exit();
}