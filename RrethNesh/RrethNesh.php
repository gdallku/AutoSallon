<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="..\RrethNesh\styleN.css">
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

    <div id="foto">
        <p>Ambientet tona te brendshme</p>
        <dl>
            <img src="foto1.jpg" alt="">
            <img src="foto2.jpg" alt="">
            <img src="foto3.jpg" alt="">
            <img src="foto4.jpg" alt="">
        </dl>

    </div>

    <p id="historiku">Kompania FlawLess është themeluar në vitin 1999 nga vëllezërit Skënder dhe Enver Bajrami nga Vushtrria, në fillim kompania merrej me shit-blerjen e automjeteve, në atë kohë automjetet më të shitura ishin automjetet të prodhimit gjermanë.Pas një analize
        të fizibilitetit nga ana ekspertëve, menaxhmenti i kompanisë vendosi që në vitin 2009 të transferohet me seli në Prishtinë, Gjatë dy viteve të punimeve intensive, ne dhjetor të vitit 2011, hapet salloni, qendra për shitjen e automjeteve në Prishtinë.
        Një objekt impozant dhe ultramodern me të gjitha e kësaj veprimtarie, ku ofrohen edhe shërbimet e servisimit nga ana e stafit të palodhshëm dhe profesional , me aparaturë bashkëkohore si dhe me Auto pjesë origjinale nga prodhuesit evropian dhe
        botëror. Gjithashtu, në dispozicion është edhe restaurant-bar në shërbim të klientëve. Sot, kompania bën shitjen e prodhimeve të të gjithë prodhuesve kryesorë evropiane dhe botëror të veturave.Puna jonë ndërton urën dhe besueshmërinë ndaj klientëve
        tanë, dhe qëllimi ynë është t'i ofrojmë klientit tanë makinën më të mirë me çmimin më të volitshëm. Ne jemi një kompani lidere e shitjes së automjeteve në Kosovë.</p>



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
    <script>
        var divElelments = document.getElementsByClassName('slider-content');
        var sliderIndex = 0;
        document.getElementsByClassName('slider')[0].addEventListener('click', function(event) {
            divElelments[sliderIndex].classList.remove('active');
            divElelments[sliderIndex].classList.add('not-active');

            sliderIndex++;
            if (sliderIndex == divElelments.length) sliderIndex = 0;

            divElelments[sliderIndex].classList.remove('not-active');
            divElelments[sliderIndex].classList.add('active');

        })
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
                    <li> <a href="../Veturat/Veturat.php">Vetura ne shtitje</a></li>
                    <li><a href="..\Kontakti\Kontakti.php">Kontakti</a></li>
                    <li><a href="..\LogIn\LogIn.php">LogIn</a></li>
                </div>
            </div>
        </div>

    </footer>
</body>


</html>