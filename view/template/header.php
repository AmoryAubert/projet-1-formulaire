<?php include './functions/global.php';?>

<nav class="navbar navbar-expand-lg navbar-light col-12">
  <a class="navbar-brand" href="index.php"><img  width="150px" src="./assets/img/hackers-poulette-logo.png" alt="Hackers Poulette logo header"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

      <?php menu($items,$link);?>

    </div>
  </div>
</nav>
