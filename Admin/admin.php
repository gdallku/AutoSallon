<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="..\Admin\styleA.css">
</head>

<body>

    <div class="Header">
        <div id="menuM">
            <ul>
                <li>
                    <a href="..\Ballina\Ballina.php">
                        <img src="logo2.png" alt=""></a>

                </li>
            </ul>
    </div>
        <div id="menuD">
        <ul>
                <li><a href="..\Admin\Admin.php">Dashboard</a></li>
                <li><a href="..\Ballina\Ballina.php">Ballina</a></li>
                <li><a href="..\RrethNesh\RrethNesh.php">Rreth Nesh</a></li>
                <li> <a href="../Veturat/Veturat.php">Veturat</a></li>
                <li><a href="..\Kontakti\Kontakti.php">Kontakti</a></li>             
                <li><a href="..\LogIn\LogIn.php">LogIn</a></li>
        </ul>
        </div>
    </div>
    <body>
          <div class="Admin-Panel">          
          
          <?php
           require_once '../includes/db.inc.php';
            $sql = "SELECT * from users;";
          
            if($result = mysqli_query($conn,$sql) ){
              if(mysqli_num_rows($result) > 0){
                echo "<h3>Users e regjistruar ne faqen tone:</h3>";
                echo "<table id='customers'>";
                echo "<tr>";
                    echo "<th>usersName:</th>";
                    echo "<th>usersEmail:</th>";
                    echo "<th>usersUid:</th>";
                     echo "<th>Delete User:</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>" . $row['usersName']."</td>";
                  echo "<td>" . $row['usersEmail']."</td>";
                  echo "<td>" . $row['usersId']."</td>";
                  
                  echo "<td><a href=../Admin/delete.php?id=" . $row['usersId'].">Delete</a></td>";
                  echo "</tr>";
                }    
                echo "</table>";
              }else{
                echo "No Data Try Later";
              }
            }
          ?>   

          <br>
          
          <?php

              $sql = "SELECT * FROM kontakti;";
              if($result= mysqli_query($conn,$sql)){
                if(mysqli_num_rows($result) > 0){
                  echo "<h3>Emali i derguar nga Useri:</h3>";
                  echo "<table id='customers'>";
                  echo "<tr>";
                      echo "<th>Emri:</th>";
                      echo "<th>Mbiemri:</th>";
                      echo "<th>Emails:</th>";                     
                      echo "<th>Pershtypja:</th>";
                      echo "<th>Delete Messages:</th>";
                  echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['emri']."</td>";
                    echo "<td>" . $row['mbiemri']."</td>";
                    echo "<td>" . $row['emial']."</td>";                    
                    echo "<td>" . $row['pershtypja']."</td>";
                    echo "<td><a href=delete.php?id=" . $row['id'].">Delete</a></td>";
                    echo "</tr>";
                  }    
                  echo "</table>";
                }else{
                  echo "No Data Try Later";
                }
              }
        ?>
                  <br>
          <?php

              $sql = "SELECT * FROM veturat;";
              if($result= mysqli_query($conn,$sql)){
                if(mysqli_num_rows($result) > 0){
                  echo "<h3>Veturat e shtuara:</h3>";
                  echo "<table id='customers'>";
                  echo "<tr>";                     
                      echo "<th>Image Link:</th>";
                      echo "<th>Emri V:</th>";
                      echo "<th>Pershkrimi:</th>";
                      echo "<th>Delete Messages:</th>";
                  echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                    echo "<tr>";                    
                    echo "<td>" . $row['EmriV']."</td>";
                    echo "<td>" . $row['PershkrimiV']."</td>";
                    echo "<td>" . $row['FotoV']."</td>";
                    echo "<td><a href=delete.php?id=" . $row['IdV'].">Delete</a></td>";
                    echo "</tr>";
                  }    
                  echo "</table>";
                }else{
                  echo "No Data Try Later";
                }
              }
        ?>
        </div>
        <div class="GUI">
          <div class="kutia1">
                  <h3>Vetuart e shtuara GUI:</h3>
                  <br>
            <div class="KutiaGiu">
            <h2>Vetura e shtuara</h2>
            <form action="upload.php" method="post">
                <div class="more">
                <label class="pe">Emri:</label><br>
                <input class="con" type="text" name="EmriV"><br>
                <label class="pe">Pershkrimim:</label><br>
                <textarea id="subject" name="PershkrimiV" placeholder="Write something.." style="height:100px"></textarea><br>
                <label class="pe">Fotoja:</label><br>
                <input class="con" type="url" name="FotoV"><br>
                <button id="Upload" type="submit" name="upload">Upload</button>
            </div>

              </form>
              </div>
          </div>
          
            <div class="kutia1">  
            <h3>Users Permisimi GUI:</h3>
            <br>
            <div class="KutiaGiuup">
            <h2>Permisimi i te dhenave te Userit</h2>
            <div class="moreup">
              <form action="update.php" method="post">
              <label class="up">Id e userit:</label><br>
                 <input class="update" type="text" name="usersId"><br>
                 <label class="up">Emri i ri:</label><br>
                <input class="update" type="text" name="usersName" ><br>
                <label class="up">Email i ri:</label><br>
                <input class="update" type="text" name="usersEmail" ><br>
                <button id="update" type="submit" name="update">Update</button>
                </form>
                </div>
                </div>
           </div>
            </div>
            
          </div>                    
                        
</body>
</html>
        
    </body>




    <footer>

<div class="fundi">
    <dl>
         <img src="logo2.png" alt="">
        
    </dl>
<div>
<div id="shkrimi">
    <br>
    <h4>Auto salloni FlawLess bën shitjen, blerjen dhe ndërrimin e të gjitha llojeve të veturave. Ne kemi dëshmuar përvojën tonë në tregtinë e automobilizmit. Ndjehuni më komod me veturat tona. Auto salloni FlawLess gjendet në Prishtinë</h4>

</div>
<div id="lincet">
    <br>
    <h3>Lincet :</h3>
    <li> <a href="../Veturat/Veturat.php">Vetura ne shtitje</a></li>
    <li><a href="..\Kontakti\Kontakti.php">Kontakti</a></li>
    <li><a href="..\LogIn\LogIn.php">LogIn</a></li>
    </div>
</div>
</div >

    </footer>
    </body>

</html>