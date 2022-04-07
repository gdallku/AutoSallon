<?php
if (isset($_POST['upload'])) {

    require_once '../includes/db.inc.php';
     require_once '../includes/funcition.inc.php';

    $Emri = $_POST['EmriV'];
    $Pershkrimi = $_POST['PershkrimiV'];
    $foto = $_POST['FotoV'];

        //konektimi i Vetura formes ne databazen "Vetura".  
        $sql = "SELECT 'FotoV' FROM veturat Where 'FotoV'=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../Admin/admin.php?error=sqlerror");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $foto);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../Admin/admin.php?error=wrongtitle&Title=".$foto);
                exit();
            }
            else{
                //vendodja e te dhenave ne databaze veturat.
                $sql = "INSERT INTO veturat (EmriV, PershkrimiV, FotoV) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../Admin/admin.php?error=sqlerror");
                    exit();
                    }
                    else{
                        // mesazhi success.
                        mysqli_stmt_bind_param($stmt, "sss", $Emri, $Pershkrimi, $foto);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../Admin/admin.php?sent=success");
                        exit();

                    }
            }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
}
else {
    header("Location: ../Admin/admin.php");
    exit();
}

?>