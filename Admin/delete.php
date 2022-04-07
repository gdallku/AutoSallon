<?php
    require_once '../includes/db.inc.php';
    require_once '../includes/funcition.inc.php';

$sql= "DELETE FROM users where usersId='$_GET[id]'";

if(mysqli_query($conn,$sql))
    header ("refresh:1; url=../Admin/admin.php");
    else
    echo "Not deleted";
?>
<?php
       require_once '../includes/db.inc.php';
       require_once '../includes/funcition.inc.php';

$sql   = "DELETE FROM kontakti where id='$_GET[id]'";

if(mysqli_query($conn,$sql))
    header ("refresh:1; url=../Admin/admin.php");
    else
    echo "Not deleted";
?>
<?php
 require_once '../includes/db.inc.php';
 require_once '../includes/funcition.inc.php';

$sql   = "DELETE FROM veturat where idV='$_GET[id]'";

if(mysqli_query($conn,$sql))
    header ("refresh:1; url=../Admin/admin.php");
    else
    echo "Not deleted";
?>
