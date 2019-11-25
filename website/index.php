<!DOCTYPE html>
<html lang="de-de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hauptseite | ipago.io</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--[if lt IE 7]><p>Du nutzt einen <strong>veralteten</strong> Browser. Bitte <a href="http://browsehappy.com/">nutze einen neueren Browser</a> um deine Erfahrung zu verbessern</p><![endif]-->
  
  <?php
    if($_GET){
      $site = $_GET['s'];

      include 'php/'.$site.'.php';
    } else {

    }
  ?>
</body>
</html>
