<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- CSS: FONTAWESOME -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <!-- GOOGLE FONT : ROBOTO -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
     <!-- CSS: MY CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- JS: JQUERY -->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- JS: MOMENT -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
     <!-- JS: CHART -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
     <!-- JS: HANDLEBARS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
     <!-- JS: MY TEMPLATE -->
     <script id="template" type="text/x-handlebars-template">
     </script>
     <!-- JS: MY JS -->
     <script type="text/javascript" src="script.js"></script>
     <title></title>
   </head>
   <body>
     <nav>
       <div class="titles">
         <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
         <span>Privacy e termini</span>
       </div>
       <div class="items">
         <span>Introduzione</span>
         <span>Norme sulla privacy</span>
         <span>Termini di servizio</span>
         <span>Tecnologie</span>
         <span>Domande frequenti</span>
       </div>
     </nav>
     <section>
       <?php

       include "vars.php";

       foreach ($faq as $value) {

         $domanda = $value["domanda"];
         $risposta = $value["risposta"];

         echo "<h2>$domanda</h2>";
         echo "<br>";
         echo "<p>$risposta</p>";
         echo "<br><br>";
       }
       ?>
     </section>
     <footer>
       <span>Tutto su Google</span>
       <span>Privacy</span>
       <span>Termini</span>
     </footer>
   </body>
 </html>
