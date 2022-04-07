<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="..\Veturat\styleV.css">
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


    <main>

    
           
            
        <div class="Veturat">

         <h2 >Vetura te ndryshme</h2>
            <div>
                <ul>
                    <li>
                    <?php

    require '../includes/db.inc.php';

    $sql = "SELECT * FROM veturat;";
    if($result= mysqli_query($conn,$sql)){
    while($row = mysqli_fetch_array($result)){
    echo "<li>";
    echo "<img src='{$row['FotoV']}' alt=''>";
    echo "<h4>{$row['EmriV']}</h3>";
    echo "<h6>{$row['PershkrimiV']}</h6>";
    echo "</li>";
        }
    }
?>
                    </li>

                    <li>
                        <img src="vetura01.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button"> Shiko me shumë!</button>
                    </li>
                    <br><br>
                    <br>
                    <li>
                        <img src="vetura02.jpg" alt="">
                        <h4>Vetura e perdorur</h4>
                        <h6>12.000Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                   
                    <li><img src="vetura03.jpg" alt="">
                        <h4>Vetura e perdorur</h4>
                        <h6>120.000Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
               <!-- </ul>
                <ul> -->
                    <li><img src="vetura04.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                    <li><img src="vetura05.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                    <li><img src="vetura06.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                
                    <li><img src="vetura07.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                    <li><img src="vetura08.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                    <li><img src="vetura09.jpg" alt="">
                        <h4>Vetura e paperdorur</h4>
                        <h6>00Km</h6>
                        <button style="border-radius: 30%;" type="button">Shiko me shumë!</button>
                    </li>
                </ul>
            </div>

        </div>
    </main>
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
        </div>

    </footer>
</body>

</html>