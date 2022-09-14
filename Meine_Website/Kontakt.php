<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>My TodoList</title>
    <link rel="stylesheet" type="text/css" href="Kontakt.css">
    <link rel="icon" type="image/x-icon" href="Bilder/SimpleLogo.ico">
  </head>
  <body>
    <div class="wrapper">
    <div id="header">
      <div id="Logo"></div>
      <hr id="splitLine01">
      <p id="Links">
        <a href="Home.html" title="Home">Home</a>
        <a href="#" title="Über Uns">Über Uns</a>
        <a href="#" title="Shop">Shop</a>
        <a href="Kontakt.php" title="Kontakt">Kontakt</a>
      </p>
    </div>

    <?php
      if(isset($_POST["submit"])) {
        mail("leonardo.bontorno@sek-hibi.ch", $_POST["betreff"], $_POST["nachricht"]);
      }
    ?>

    <form id="Anmeldung" action="Kontakt.php" method="post">
      <h1 id="Titel">Kontaktiere uns</h1>
      <hr id="block">
      <div id="Inputs">
        <h4 id="E-Mail" class="extras">E-Mail:</h4>
        <input id="E-Mail_Input" class="extras" type="text" name="email" placeholder="Bitte gib deine E-Mail ein">
        <h4 id="Betreff" class="extras" >Betreff:</h4>
        <input id="Betreff_Input" class="extras" type="text" name="betreff" placeholder="Bitte gib den Betreff ein">
        <h4 id="Nachricht" class="extras">Nachricht:</h4>
        <textarea id="Nachricht_Input" class="extras" type="text" name="nachricht" rows="10" cols="35" placeholder="schreib uns was..."></textarea>
        <input id="submit" type="submit" class="extras" name="submit" value="Absenden">
      </div>
    </form>

  </body>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="login.js"></script>
</html>
