<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connected to MySQL server successfully!";
}
?>
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
                    
                    <label><b>Nom Utilisateur</b></label>
                    <input type="text" placeholder="Entrer votre nom d'utilisateur" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

                    

                    <input type="submit" id='submit' value='Ajouter' >
                
                </form>

            </div>
        
       
        
        </body>

     </html>