<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,900" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Accueil - Stone Éducation</title>
  </head>
  <body class="white_grey_bg">

    <!-- Image and text -->
    <nav class="navbar navbar-light">

    <h1 class="h1-title"> <a href="index.php" class="a-nav">Stone éducation</a></h1>
    <div>
      <div class="a-nav" value="register">Inscription</div>
      <div class="a-nav" value="auth">Connexion</div>
  </nav>

  <?php
    include('auth.html');
    include('register.html');
  ?>

    <!-- Menu en accordéon -->


    <div class="row" id="menu1">
      <div class="col-2 m-0 p-0">
        <div class="cote">
          <div class="lolilol">
            <p>Lundi</p>
          </div>
        </div>
      </div>
      <div class="col-2 m-0 p-0">
        <div class="cote">
          <div class="lolilol">
            <p>Mardi</p>
          </div>
        </div>
      </div>
      <div class="col-2 m-0 p-0">
        <div class="cote">
          <div class="lolilol">
            <p>Mercredi</p>
          </div>
        </div>
      </div>
      <div class="col-2 m-0 p-0">
        <div class="cote">
          <div class="lolilol">
            <p>Jeudi</p>
          </div>
        </div>
      </div>
      <div class="col-2 m-0 p-0">
        <div class="cote">
          <div class="lolilol">
            <p>Vendredi</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/main_js.js"></script>
  </body>
</html>
