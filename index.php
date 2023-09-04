<?php
// Hae nykyisen sivun tiedostonimi ilman tiedostotunnistetta
$currentFileName = basename($_SERVER["SCRIPT_FILENAME"], ".php");

// Luo body-elementin id-attribuutti
$bodyId = strtolower($currentFileName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Meiltä löydät kattavan valikoiman sisä- ja ulkokasveja sekä tietysti kaikki työkalut ja muut tarvikkeet niiden hoitoon. Osaava ja puutarhanhoidosta innostunut henkilökuntamme on aina valmiina auttamaan sinua valitsemaan juuri sinulle sopivimmat tuotteet.">
  <meta name="keywords" content="kasvit, sisäkasvit, ulkokasvit, puutarhanhoito, työkalut, puutarhatarvikkeet, henkilökunta, puutarhaostokset, valikoima, sopivimmat tuotteet">
  <title>Puutarhaliike Neilikka </title>
  <link rel="icon" type="image/png" href="img/favicon-puutarhaliike-neilikka.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body id="page-<?php echo $bodyId; ?>">
<?php include 'nav.php'; ?>
  <!-- Welcome section with background image -->
  <div class="background-image"></div>
  <header class="welcome-section text-center">

    <div class="container">
      
      <div class="row">
        <div class="col">
            <div class="masonry-container">

                <div class="masonry-item double-width">
                    <img src="img/masonry-image-01.jpg" alt="Kuva 1">
                    <div class="masonry-inner-txt">
                    <h1 class="slogan-text font-color-green">PUUTARHAAN!</h1>
                    <h2>Tervetuloa Puutarhaliike Neilikan kotisivuille!</h2>
                    <h6>Etsitkö laadukkaita sisä- ja ulkokasveja? Meiltä löydät 
                        laajan valikoiman laadukkaita kasveja sekä kaikki tarvittavat välineet ja asiantuntevan henkilökuntamme neuvot niiden 
                        hoitamiseen. </h6>
                        
                      <h6>Tutustu sivuihimme ja tule vierailemaan myymälässämme joko <a href="https://www.google.com/maps?q=Fabianinkatu42,00100Helsinki" target="_blank">Helsingissä</a> tai 
                        <a href="https://www.google.com/maps?q=Kivenlahdentie10,00100Helsinki" target="_blank">Espoossa</a>. </h6>
                  
                        
                        <h6>Luodaan unelmiesi puutarha yhdessä.</h6>
                    </div>
                  </div>
                  <div id="masonry-item-open-hours" class="masonry-item">
                    <div class="parent-div-circle">
                    <div class="div-circle-purple">
                        Avoinna<br>
                        ma-ke 9-17<br>
                        la 12-18
                      </div>  
                     </div> 
                     <div  class="masonry-inner-txt">
                      <h1 class="material-icons slogan-text font-color-green">storefront</h1>
                      <h6><a href="https://www.google.com/maps?q=Fabianinkatu42,00100Helsinki" target="_blank">Fabianinkatu 42<br>
                        00100 Helsinki</a><br>
                        Puh. <a href="tel:puhelinnumero">xx-xxxxxxx</a></h6>
                        
</div>
<div class="div-space"></div>                       
<div  class="masonry-inner-txt"> 
  <h1 class="material-icons slogan-text font-color-green">storefront</h1>
  <h6>                 
<a href="https://www.google.com/maps?q=Kivenlahdentie10,00100Helsinki" target="_blank">Kivenlahdentie 10<br>
                        02320 Espoo</a><br>
                        Puh. <a href="tel:puhelinnumero">xx-xxxxxxx</a>
                        </h6>  
                  </div>
                  </div>

                  <div id="masonry-item-news" class="masonry-item ">

                        <div class="parent-div-circle">
                            <div class="div-circle-red">
                               Neilikka uutisia
                              </div>  
                             </div> 

                    <div class="masonry-inner-txt">
                    <h3 class="slogan-text font-color-green">Hyvää uuttavuotta</h3>
                    Uuden vuoden kunniaksi myymälöissämme upeita tarjouksia.
                    </div>
                    <div class="div-space"></div>  
                    <div class="masonry-inner-txt">
                      <h3 class="slogan-text font-color-green">Joulukukat edullisesti meiltä.</h3>
                      Myymälöissämme myös kattava ja edullinen valikoima joulukuusia.
                    </div>
                    <div class="div-space"></div>  
                    <div class="masonry-inner-txt">
                      <h3 class="slogan-text font-color-green">Puutarhan lepokausi</h3>
                      Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten. Meiltä löydät kaikki työkalut ja tarvikkeet.
                    </div>
                  </div>
                  <div class="masonry-item">
                    <img src="img/kysy-puutarhanhoidosta.jpg" alt="Kuva 4">
                    

                    <div class="masonry-inner-txt highlight"><h3 class="slogan-text font-color-green">Kysy puutarhasta</h3>Asiantuntijamme vastaavat kysymyksiin puutarhanhoidosta.</div>
                  </div>
                  <div class="masonry-item">
                    <img src="img/viikon-vinkki.jpg" alt="Kuva 4">
                    

                    <div class="masonry-inner-txt highlight"><h3 class="slogan-text font-color-green">Viikon vinkki</h3>Asiantunjamme Multasormi kertoo kuinka perustat ja hoidat perennasi kukoistavana vuodesta toiseen.</div>
                  </div>
                  <div class="masonry-item">
                    <img src="img/tilaa-uutiskirje.jpg" alt="Kuva 4">
                    

                    <div class="masonry-inner-txt highlight"><h3 class="slogan-text font-color-green">Tilaa uutiskirje</h3>
                      Uutiskirjeemme tilaajana saat uusimmat tarjouksemme ja vinkit puutarhan hoitoon</div>
                  </div>
                  <div class="masonry-item">
                    <img src="img/avaamme-verkkokaupan.jpg" alt="Kuva 4">
                    

                    <div class="masonry-inner-txt highlight"><h3 class="slogan-text font-color-green">Verkkokauppa</h3>Avaamme pian uuden verkkokauppamme.</div>
                  </div>
        </div>

      </div>
    </div>
    </div>
  </header>


  <?php include 'footer.php'; ?>


</body>
</html>
