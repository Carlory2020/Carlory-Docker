<!DOCTYPE html>
     <html>
        <head>
                <meta charset="utf-8" />
                <title>Ajouter</title>
                <link rel="stylesheet" href="ajouter.css" media="screen" type="text/css" />
        </head>

        <body>
         <div id="container">
                <!-- zone de connexion -->
                
                <form action="valider.php" method="POST">
                    <h3>Remplir les champs suivants</h3>
                    
                    <label><b>Adresse</b></label>
                    <input type="text" placeholder="Entrer une adresse" name="adresse" required>

                    <label><b>Ville</b></label>
                    <input type="text" placeholder="Entrer une ville" name="ville" required>

                    <label><b>Pays</b></label>
                    <input type="text" placeholder="Entrer un pays" name="pays" required>

                    <label><b>Code Postal</b></label>
                    <input type="text" placeholder="Entrer un code postal" name="codepostal" required>

                    <input type="submit" id='submit' value='Ajouter' >
                
                </form>

                        <a href="rechercher.php" >Cliquer ici pour Rechercher une information</a>
            </div>
        
       
        
        </body>

     </html>