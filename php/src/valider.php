<?php
if (isset($_POST['password']) AND $_POST['password'] ==
"Carlory") // Si le mot de passe est bon
{
// On affiche les codes
?>
<a href="ajouter.php" >Cliquez ici pour ajouter </a><br>
<a href="rechercher.php" >Cliquez ici pour rechercher </a>
<?php
}
else // Sinon, on affiche un message d'erreur
{
echo '<p>Mot de passe incorrect</p>';
}
?>