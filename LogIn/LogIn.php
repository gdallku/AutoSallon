<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="..\LogIn\styleLog.css">
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
                <li><a href="..\Ballina\Ballina.php">Ballina</a></li>
                <li><a href="..\RrethNesh\RrethNesh.php">Rreth Nesh</a></li>
                <li> <a href="../Veturat/Veturat.php">Veturat</a></li>
                <li><a href="..\Kontakti\Kontakti.php">Kontakti</a></li>
                <li><a href="..\LogIn\LogIn.php">Login</a></li>
            
            </ul>
        </div>
    </div>
    <main>
        <div class="kutia">
            <div class="log-reg">
                <a id="log" href="#" onclick="changeForm(0)">LogIn</a>
                <a href="#" onclick="changeForm(1)">Register</a>
            </div>

          
                <div class="login forma forma-style">
                  <form action="\Projekti\includes\login.inc.php" method="post" >
                    <label for="Emri:"></label>
                    <input type="text" class="input" name="uid" placeholder="emri..." />
                    <label for="Fjalekalimi:"></label>
                    <input type="password" class="input" name="pwd" placeholder="fjalekalimi..." />
                    <button  id="submit" type="submit" name="submitLog" class="input submmit" value="LogIn" onclick="validate(0)">LogIn</button>
                    </form>
                   <!-- <input id="submit" type="submit" class="input submmit" value="LogIn" onclick="validate(0)" /> -->
                </div>

                <div class="register forma hidden">
                <form action="\Projekti\includes\singup.inc.php" method="post" >
                    <label for="Emri:"></label>
                    <input type="text" class="input"  name="name" id="username" placeholder="emri..." />
                    <label for="Mbiemri:"></label>
                    <input type="text" class="input" name="lastname" placeholder="mbiemri..." />
                    <label for="Email:"></label>
                    <input type="text" class="input"  name="email" placeholder="emailin..." />
                    <label for="Fjalekalimi:"></label>
                    <input type="password" class="input"  name="pass" id="password" placeholder="fjalekalimi..." />
                    
                    <button id="submit" type="submit" name="submitSign" class="input submit" value="SingUp" onclick="validate(1)">SingUp</button>
                    </form>
                </div> 
            </div>
           	
<?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "invalidUid"){
                echo "<p>Chooose a proper username!</p>";
            }
            else if($_GET["error"] == "invalidEmail"){
                echo "<p>Chooose a proper Emial!</p>";
            }
            else if($_GET["error"]=="stmtfailed"){
                echo "<p> something went wrong! Try again </p>";
            }
            else if($_GET["error"]=="usernametaken"){
                echo "<p>Username in taken!</p>";
            }
            else if($_GET["error"]=="none"){
                echo "<p>Everything is OK!</p>";
            }
        }
        
        ?>

        </div>
        
       

        <div class="footer">
            <i>&copy;</i>
        </div>
        <script>
            function changeForm(number) {
                console.log("test");
                var divElements = document.getElementsByClassName('forma');
                if (number == 0) {
                    divElements[0].classList.remove('hidden')
                    divElements[0].classList.add('forma-style')
                    divElements[1].classList.add('hidden')
                    divElements[1].classList.remove('forma-style')

                } else if (number == 1) {
                    divElements[1].classList.remove('hidden')
                    divElements[1].classList.add('forma-style')
                    divElements[0].classList.add('hidden')
                    divElements[0].classList.remove('forma-style')
                }
            }

            function validate(number) {
                var inputList = document.getElementsByClassName("input");
                if (number == 0) {
                    if (inputList[0].value == "" | inputList[1].value == "" | inputList[2].value == "") {
                        alert("Ju lutem plotsoni te dhenat e juaja");
                    } else {
                        alert("Ju jeni kyqur ne  llogari me sukses");
                    }
                } else if (number == 1) {
                    if (inputList[2].value == "" | inputList[3].value == "" | inputList[4].value == "" | inputList[5].value == "") {
                        alert("Ju lutem plotsoni te dhenat e juaja ");
                    } else {
                        alert("Ju keni krijuar llogarine me sukses");
                    }
                }
            }
        </script>
    </main>

</body>

</html>