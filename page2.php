<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <script
        src="https://kit.fontawesome.com/d8b5bf98b4.js"
        crossorigin="anonymous"
        ></script>
       
        <link rel="stylesheet" type="text/css" href="assets/CSS/style.css" />  
       
        <title>Test Annex</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
      </head>

      <body>
         
        <header>
            <h2 id="resultat"></h2>
             <?php 
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $a = (int)$_POST['codePostal'];
               $b = preg_match('/^\d+$/', $a);
               $c = strlen($a);
              if(!preg_match('/^\d+$/', $_POST['codePostal'])){
                if($c != 5){ exit("Le code postal doit comporter 5 chiffres uniquement");}                
              }
                
              } 
            
           
             function codePostal() {   
              $code = (int)$_POST['codePostal'];
              $cpreduit =   substr($code,0, 2);           
              
               if(($cpreduit) == 31){exit("Toulouse");}
               if(($cpreduit) == 33){exit("Bordeaux");}
               echo  "Code postal inconnu ";
             }
             codePostal();
            
            
          // echo " Le code postal est et la ville est $code  ";  
          // echo  "$cpreduit";                

          ?>
        </header>
      </body>

</html>