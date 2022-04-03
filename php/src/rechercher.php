<!DOCTYPE html>
     <html>
        <head>
                <meta charset="utf-8" />
                <title>Rechercher</title>
                 <link rel="stylesheet" href="rechercher.css" media="screen" type="text/css" />
        </head>

        <body>
           <div id="container">
                  <!-- zone de connexion -->
                  
                  <form action="" method="POST">
                     <h3>Mettez l'adresse que vous voulez rechercher</h3>
                     
                     <label for="adresse"><b>Votre Adresse</b></label>
                     <input type="name" id="adresse" name="adresse" autocomplete="adresse" required>

                    

                     <button type="submit" name="submit">Générer</button>
                  
                  </form>
            
         </div> <br/>
               <?php
               if(isset($_POST['submit'])){

               $adresse=$_POST['adresse'];
               $adresseGps=str_replace("","+",$adresse);
               ?>
               <iframe src="https://maps.google.com/maps?&q=<?php $adresseGps; ?> &output=embed   "
               width="100%" height="500"
               >
               </iframe>
               <?php }
               
               ?>
         
   
        </body>

     </html>

    