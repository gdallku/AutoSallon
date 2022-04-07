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
                    <a href="..\Ballina\Ballina.html">
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
                <li><a href="..\LogIn\LogIn.php">LogIn</a></li>
				<li><a href="..\LogIn\SingUp.php">SingUp</a></li>
            </ul>
        </div>
    </div>
    <main>
        <div class="kutia">
            
			
			
			 <div class="login forma forma-style">
                <form action="\Projekti\includes\singup.inc.php" method="post" />
                    <label for="Emri:"></label>
                    <input type="text" class="input"  name="name" id="username" placeholder="emri..." />
                    <label for="Mbiemri:"></label>
                    <input type="text" class="input" name="lastname" placeholder="mbiemri..." />
                    <label for="Email:"></label>
                    <input type="text" class="input"  name="email" placeholder="emailin..." />
                    <label for="Fjalekalimi:"></label>
                    <input type="password" class="input"  name="pass" id="password" placeholder="fjalekalimi..." />
                    
                    <button id="submit" type="submit" name="submitSign" class="input submit" value="SingUp" onclick="validate(0)">SingUp</button>
                   <!-- <input id="submit" type="submit" name="submit" class="input submit" value="SingUp" onclick="validate(1)" /> -->
                    </form>
				
             </div>	
             </div>	
				
				 <div class="footer">
            <i>&copy;</i>
        </div>
		 </main>

</body>

</html>