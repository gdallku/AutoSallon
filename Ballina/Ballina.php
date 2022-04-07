<?php
       session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="..\Ballina\style.css">
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

            </ul>
        </div>
    </div>

    <main>
        <br>
        <div class="hyrja">
            <p><b>MIRE SE VINI</p>
            <h1>AutoSallon FlawLess</h1>
            <br>
            <img src="logot.png" alt="">
        </div>
        <p id="pershkrimi">Auto salloni FlawLess bën shitjen, blerjen dhe ndërrimin e të gjitha llojeve të veturave. Ne kemi dëshmuar përvojën tonë në tregtinë e automobilizmit. Ndjehuni më komod me veturat tona. Auto salloni FlawLess gjendet në Prishtinë</p>
    
    <br>
     <div class="kutiat">
    <div id="kutia1">
       <ul>
           <li>
            <img src="vetura.jpg" alt="">
            <p>TË GJITHA BRENDET</p>
            
            <h6>Në Auto FlawLess ju mund të gjeni të gjitha llojet e veturave nga brendet më të njohura botërore</h6>
           </li>
           <br><br><br><br>
           <li>
               <img src="chat2.jpg" alt="">
               <p>SHËRBIMI NDAJ KLIENTIT</p>
               <h6>Ju keni vëmendjen tonë të plotë dhe mbështetjen maksimale 24/7 me telefon dhe email</h6>
           </li>
           <li>
               <img src="kuleta.jpg" alt="">
               <p>ÇMIME TË ARSYESHME</p>
               <h6>Tek AutoFlawLess gjeni të gjitha llojet e veturave me çmime të arsyeshme.</h6>
           </li>
       </ul>
    </div>
    <div></div>
    <div></div>

</div>

<div class="Veturat">
    <br>
    <br>
    <br>
    <p>Vetura te ndryshme</p>
    <h6>Shiko veturat</h6>
    <div>
        <ul>
            <li>
                <img src="vetura01.jpg" alt="">
                <h4>Vetura e paperdorur</h4>
                <h6>00Km</h6>
                <form action="../Veturat/Veturat.php">
                <button  style="border-radius: 30%;" type="submit"  > Shiko me shumë!</button>
            </form>

            </li>
            <br><br>
            <br>
            <li>
                <img src="vetura02.jpg" alt="">
                <h4>Vetura e perdorur</h4>
                <h6>12.000Km</h6>
                <form action="../Veturat/Veturat.php">
                <button style="border-radius: 30%;" type="submit">Shiko me shumë!</button>
            </form>
            </li>
        </ul>
        <ul>
            <li><img src="vetura03.jpg" alt="">
            <h4>Vetura e perdorur</h4>
            <h6>120.000Km</h6>
            <form action="../Veturat/Veturat.php">
            <button style="border-radius: 30%;" type="submit">Shiko me shumë!</button>
        </form>
             </li>
             <li><img src="vetura04.jpg" alt="">
             <h4>Vetura e paperdorur</h4>
             <h6>00Km</h6>
             <form action="../Veturat/Veturat.php">
             <button style="border-radius: 30%;" type="submit">Shiko me shumë!</button>
            </form>
            </li>
        </ul>
    </div>
</div>
<div class="slider">
    <h2>Konsumatore te kenaqur</h2>
    <div class="slider-content active">
        <img src="blersi01.jpg" alt="" />
        <p>Jam shume i kenaqur me sherbimin dhe kualitetin e veturave</p>
        
    </div>
    <div class="slider-content not-active">
        <img src="blersi02.jpg" alt="" />
        <p>Jam shume e kenaqur me pritjen</p>
        
    </div>
    <div class="slider-content not-active">
        <img src="blersi03.jpg" alt="" />
        <p>Jam shume e kenaqur me mundesin e zgjedhjeve te shumta</p>

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
</div >

    </footer>
<script>
    // slideri
    var divElelments=document.getElementsByClassName('slider-content');
    var sliderIndex=0;
    document.getElementsByClassName('slider')[0].addEventListener('click',function(event){
        divElelments[sliderIndex].classList.remove('active');
        divElelments[sliderIndex].classList.add('not-active');
      
        sliderIndex++;
        if(sliderIndex==divElelments.length) sliderIndex=0;
        
        divElelments[sliderIndex].classList.remove('not-active');
        divElelments[sliderIndex].classList.add('active');
        
    })
</script>
</body>

</html>