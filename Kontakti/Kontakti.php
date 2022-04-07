<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Kontakti\styleK.css">
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
                <li><a href="..\LogIn\LogIn.php">LogIn</a></li>
            </ul>
        </div>
    </div>

    <div class="main">
    <dl>
        <h2>Konktakti</h2>
    </dl>
    <div class="container">
        <form name="Konktakti" id="Konktakti" action="../includes/kontaktform.php" method="post" onsubmit="return validateForm()">
            <label for="fname">Emri</label>
            <input type="text" class="kontakt" id="fname" name="emri" placeholder="Emri juaj..">

            <label for="lname">Mbiemri</label>
            <input type="text" class="kontakt" id="lname" name="mbiemri" placeholder="Mbiemri juaj..">

            <label for="email">Email</label>
            <input type="email" class="kontakt" id="email" name="email" placeholder="Emaili juaj..">


            <label for="subject">Pershtypjet</label>
            <textarea id="subject" class="kontakt" name="message" placeholder="Pershtypjet e juaja.." style="height:120px"></textarea>
            
            <button type="submit" name="submit">Dergo</button>

    </div>
    </div>

    <script>
        function validateForm() {
            console.log("test");

            var inputList = document.getElementsByClassName("kontakt");

            if (inputList[0].value == "" | inputList[1].value == "" | inputList[2].value == "" | inputList[3].value == "") {
                alert("Ju lutem plotsoni te dhenat e juaja");
            } else {
                alert("Ju keni derguar mesazhin  me sukses");
            }

        }
    </script>


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
                    <li><a href="../Veturat/Veturat.php">Veturat ne shtije</a></li>
                    <li><a href="..\LogIn\LogIn.php">LogIn</a></li>
                    <li><a href="../Kontakti\Kontakti.php">Kontakti</a></li>

                </div>
            </div>
        </div>

    </footer>

</body>



</html>