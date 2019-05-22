<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Het Dagelijkse Recept</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Css.css">
  </head>
  <style>
    .doosjeopmijnflik{
        background-size:cover;
        width:200px;
        height:200px;
        float:left;
        margin:30px;
    }
    
    .wraps{
        background-image:url("assets/wraps.jpg"); 
    }
    .spaghetti{
        background-image:url("assets/spaghetti.jpeg");
    }
    .ching{
        background-image:url("assets/splash.jpg");
    }
        </style>
  <body>
    <?php include "header.html"; ?>
    <div class="splash">
      
    </div>
    <section>
      <h2>Welkom bij het Dagelijks-Recept!</h2>
        <p>
          Via onze website kunt u online uw bestelling plaatsen. Deze kunt u aan
          de deur of online betalen.
        </p>

    
       
        <div id="wrappy" class="doosjeopmijnflik wraps"> </div> 
        <div id="hekkie" class="doosjeopmijnflik spaghetti"> </div> 
        <div id="vlackie" class="doosjeopmijnflik ching"></div>



        <div id="wrap" class="modal">
        
        <!-- Modal content -->
        <div class="modal-content">
          <span id="wrappygotslappy">&times;</span>
            <div>
                  <div id="modalbw">
                       <br>
                       <h1 id=modalbwkop>  Bereidings weizen</h1>
                       <br>
                       <br>
                       <p id="moadalbwtxt">
                              SkunkGanngg PPBBBb. <br>
                              Verhit een scheutje olie in de paellapan en fruit de fijngehakte ui, rode peper en knoflook aan.<br> 
                              Voeg de chorizo in kleine stukjes toe. Snijd de kippendijen in stukjes en bak deze gaar in dezelfde pan. <br>
                              Voeg ondertussen ook de paprika in blokjes en het paprikapoeder toe. <br>
                              Roer de paellarijst er door en voeg de warme saffraan bouillon er aan toe en roer ook het blikje tomatenpuree er door.<br><br>
                          
                              Laat de rijst ongeveer 20 minuten gaar pruttelen en schep af en toe om.<br><br> 
                              Voeg de laatste 3 minuten de doperwten toe. Bak de gamba’s een paar minuten in een koekenpan.<br> 
                              Als al het vocht is opgenomen door de rijst en de rijst gaar is leg de gamba’s er bovenop samen met de partjes citroen.<br> 
                              Mocht je geen paella rijst kunnen vinden, dan kun je ook risottorijst gebruiken<br>
                       </p>
                  </div>
                  <div id="modalinh">
                       <br>
                       <h1 id="moadalinhkop">  Inhoud</h1>
                       <br>
                       <br>
                       <p id="moadalinhtxt">
                              – 100 gram paellarijst<br>
                              – paellakruiden<br>
                              – vis en kippenbouillon<br>
                              – 2 kipkluifjes<br>
                              – tomatenblokjes met knoflook<br>
                              – 1 sjalot<br>
                              – 1 grote teen knoflook<br>
                              – 3 snijbonen<br>
                              – reepjes geroosterde paprika<br>
                              – een schaaltje gemengde zeevruchten<br>
                              – 3 grote garnalen
                      </p>
                  </div>
                  <div id="bestelbut">
                          <form method="post" action="mandje.php">
                              <input type="hidden" name="product" value="Wraps">
                              <button type="submit">Continue</button>
                          </form>
                      </div>
                  <div id="modalom">
                       <br>   
                       <h1 id="modalomkop">  omschrijving</h1>
                       <br>
                       <br>
                       <img id=modalomimg src="1er0QIte.jpeg">
                       <p id="modalomtxt">
                              Paella is een oorspronkelijk Valenciaans en tegenwoordig typisch Spaans gerecht
                      </p>
        </div>        
        </div>
        </div>  
      </div>



      <!--Jeweetzelfufff-->
      <div id="spaghetti" class="modal">
        
        <!-- Modal content -->
        <div class="modal-content">
          <span id="hekkiegotsmacky">&times;</span>
            <div>
                  <div id="modalbw">
                       <br>
                       <h1 id=modalbwkop>  Bereidings weizen</h1>
                       <br>
                       <br>
                       <p id="moadalbwtxt">
                              Skoetnoen <br>
                              Verhit een scheutje olie in de paellapan en fruit de fijngehakte ui, rode peper en knoflook aan.<br> 
                              Voeg de chorizo in kleine stukjes toe. Snijd de kippendijen in stukjes en bak deze gaar in dezelfde pan. <br>
                              Voeg ondertussen ook de paprika in blokjes en het paprikapoeder toe. <br>
                              Roer de paellarijst er door en voeg de warme saffraan bouillon er aan toe en roer ook het blikje tomatenpuree er door.<br><br>
                          
                              Laat de rijst ongeveer 20 minuten gaar pruttelen en schep af en toe om.<br><br> 
                              Voeg de laatste 3 minuten de doperwten toe. Bak de gamba’s een paar minuten in een koekenpan.<br> 
                              Als al het vocht is opgenomen door de rijst en de rijst gaar is leg de gamba’s er bovenop samen met de partjes citroen.<br> 
                              Mocht je geen paella rijst kunnen vinden, dan kun je ook risottorijst gebruiken<br>
                       </p>
                  </div>
                  <div id="modalinh">
                       <br>
                       <h1 id="moadalinhkop">  Inhoud</h1>
                       <br>
                       <br>
                       <p id="moadalinhtxt">
                              – 100 gram paellarijst<br>
                              – paellakruiden<br>
                              – vis en kippenbouillon<br>
                              – 2 kipkluifjes<br>
                              – tomatenblokjes met knoflook<br>
                              – 1 sjalot<br>
                              – 1 grote teen knoflook<br>
                              – 3 snijbonen<br>
                              – reepjes geroosterde paprika<br>
                              – een schaaltje gemengde zeevruchten<br>
                              – 3 grote garnalen
                      </p>
                  </div>
                  <div id="bestelbut">
                          <form method="post" action="mandje.php">
                          <input type="hidden" name="product" value="Spaghetti">
                              <button type="submit">Continue</button>
                          </form>
                      </div>
                  <div id="modalom">
                       <br>   
                       <h1 id="modalomkop">  omschrijving</h1>
                       <br>
                       <br>
                       <img id=modalomimg src="1er0QIte.jpeg">
                       <p id="modalomtxt">
                              Paella is een oorspronkelijk Valenciaans en tegenwoordig typisch Spaans gerecht
                      </p>
        </div>        
        </div>
        </div>  
      </div>



      <div id="ching" class="modal">
        
        <!-- Modal content -->
        <div class="modal-content">
          <span id="vlackiegotblackie">&times;</span>
            <div>
                  <div id="modalbw">
                       <br>
                       <h1 id=modalbwkop>  Bereidings weizen</h1>
                       <br>
                       <br>
                       <p id="moadalbwtxt">
                              Verwarm de gangsters zijn bouillon in een pan en voeg de saffraan toe. <br>
                              Verhit een scheutje olie in de paellapan en fruit de fijngehakte ui, rode peper en knoflook aan.<br> 
                              Voeg de chorizo in kleine stukjes toe. Snijd de kippendijen in stukjes en bak deze gaar in dezelfde pan. <br>
                              Voeg ondertussen ook de paprika in blokjes en het paprikapoeder toe. <br>
                              Roer de paellarijst er door en voeg de warme saffraan bouillon er aan toe en roer ook het blikje tomatenpuree er door.<br><br>
                          
                              Laat de rijst ongeveer 20 minuten gaar pruttelen en schep af en toe om.<br><br> 
                              Voeg de laatste 3 minuten de doperwten toe. Bak de gamba’s een paar minuten in een koekenpan.<br> 
                              Als al het vocht is opgenomen door de rijst en de rijst gaar is leg de gamba’s er bovenop samen met de partjes citroen.<br> 
                              Mocht je geen paella rijst kunnen vinden, dan kun je ook risottorijst gebruiken<br>
                       </p>
                  </div>
                  <div id="modalinh">
                       <br>
                       <h1 id="moadalinhkop">  Inhoud</h1>
                       <br>
                       <br>
                       <p id="moadalinhtxt">
                              – 100 gram paellarijst<br>
                              – paellakruiden<br>
                              – vis en kippenbouillon<br>
                              – 2 kipkluifjes<br>
                              – tomatenblokjes met knoflook<br>
                              – 1 sjalot<br>
                              – 1 grote teen knoflook<br>
                              – 3 snijbonen<br>
                              – reepjes geroosterde paprika<br>
                              – een schaaltje gemengde zeevruchten<br>
                              – 3 grote garnalen
                      </p>
                  </div>
                  <div id="bestelbut">
                          <form method="post" action="mandje.php">
                          <input type="hidden" name="product" value="Paella">
                              <button type="submit">Continue</button>
                          </form>
                      </div>
                  <div id="modalom">
                       <br>   
                       <h1 id="modalomkop">  omschrijving</h1>
                       <br>
                       <br>
                       <img id=modalomimg src="1er0QIte.jpeg">
                       <p id="modalomtxt">
                              Paella is een oorspronkelijk Valenciaans en tegenwoordig typisch Spaans gerecht
                      </p>
        </div>        
        </div>
        </div>  
      </div>
        <p>
          Onze sevice:
          <ul>
            <li>
              Alle producten zijn vers
            </li>
            <li>
              Levering in vershouddoos
            </li>
            <li>
              Snelle levering door heel het land 
            </li>
          </ul>
        </p>
        <p>
          Wij bezorgen dagelijs van 12:00 uur-22:00 uur.. Bestelt u liever telefonisch? Bel
          dan 06 32167211.
        </p>
      </section>
    
      <?php include "footer.html"; ?>
   </body>

   
</html>
<script>
        // Get the modal
        var wrapmodal = document.getElementById("wrap");
        var spaghettimodal = document.getElementById("spaghetti");
        var traywaymodal = document.getElementById("ching");
        
        // Get the button that opens the modal
        var wrappy = document.getElementById("wrappy");
        var hekkie = document.getElementById("hekkie");
        var vlackie = document.getElementById("vlackie");
        
        // Get the <span> element that closes the modal
        var wrappygotslappy = document.getElementById("wrappygotslappy");
        var hekkiegotsmacky = document.getElementById("hekkiegotsmacky");
        var vlackiegotblackie = document.getElementById("vlackiegotblackie");
        
        // When the user clicks the button, open the modal 
        wrappy.onclick = function() {
          wrapmodal.style.display = "block";
        }
        hekkie.onclick = function() {
          spaghettimodal.style.display = "block";
        }
        vlackie.onclick = function() {
          traywaymodal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        wrappygotslappy.onclick = function() {
            wrapmodal.style.display = "none";
        }
        hekkiegotsmacky.onclick = function() {
            spaghettimodal.style.display = "none";
        }
        vlackiegotblackie.onclick = function() {
            traywaymodal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == wrapmodal) {
            wrapmodal.style.display = "none";
          }}
          window.onclick = function(event) {
          if (event.target == spaghettimodal) {
            spaghettimodal.style.display = "none";
          }}
          window.onclick = function(event) {
          if (event.target == traywaymodal) {
            traywaymodal.style.display = "none";
          }
        }
        </script>