<?php
// Récupération de l'adresse IP
$ip = $_SERVER['REMOTE_ADDR'];

// Enregistrement de l'adresse IP dans un fichier txt
$file = fopen("ip.txt", "w");
fwrite($file, $ip);
fclose($file);

// Contenu de la page
$content = "
<!DOCTYPE html>
<html>
<head>
<title>Non, sérieux faites attention</title>
<style>
body {
  background-color: orange;
}

h1 {
  font-family: Impact, sans-serif;
  font-size: 24px;
  color: black;
  text-align: center;
}

p {
  font-family: Impact, sans-serif;
  font-size: 24px;
  color: black;
  text-align: left;
}

</style>
</head>
<body>
<h1>We are anonymous</h1>
<p>Faites attention à où vous cliquez, j'aurais pu être malveillant et vous montrer des vidéos de chat.</p>
<p>Écrivez-vous avez de la chance, j'aime les chiens 😉</p>
<img src=\"cute-dog.gif\" alt=\"Chien mignon\">
</body>
</html>
";

// Envoi des entêtes HTTP
header("Content-type: text/html");
header("Content-Disposition: inline; filename=index.php");
echo $content;
?>
