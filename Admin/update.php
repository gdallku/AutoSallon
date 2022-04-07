<?php
              if(isset($_POST['update']))
              {
                require_once '../includes/db.inc.php';
                require_once '../includes/funcition.inc.php';

                  $uid = $_POST['usersId'];
                  $username = $_POST['usersName'];
                  $email = $_POST['usersEmail'];

                  $sql = "UPDATE `users` SET `usersName`='".$username."',`usersEmail`='".$email."' WHERE `usersId` = $uid";
                $result = mysqli_query($conn, $sql);
                
                if($result)
                {
                    echo 'Data Updated';
                    header ("refresh:1; url=../Admin/admin.php");
                }else{
                    echo 'Data Not Updated';
                }
                mysqli_close($conn);
              }
