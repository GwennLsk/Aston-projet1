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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Accueil - Stone Éducation</title>
  </head>
  <body class="white_grey_bg">

    <!-- Image and text -->
    <nav class="navbar navbar-light">

      <h1 class="h1-title">
        <a href="index.php" class="a-nav">
          Stone éducation
        </a>
      </h1>
      <div>
        <div class="a-nav" value="register">Inscription</div>
        <div class="a-nav" value="auth">Connexion</div>
    </nav>
    <?php

      include('auth.html');
      include('register.html');
      include('reset_pwd.html');
      include('menu.html');
      include('profil.html');
      // include('administration.html');
      include('basket.html');
    ?>

    <div class="container">
      <div class="row">
        <div class="col-12 center">
          <div class="clickable" value="basket">
            Basket
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid dev-nav text-white">
      <div class="row">
        <div class="col-3"><h6>Dev-nav(hide this on prod)</h6></div>
        <div class="col-9 d-flex justify-content-between">
          <div id="auth-link" class="clickable" value="auth">connexion</div>
          <div id="basket-link" class="clickable" value="basket">panier</div>
          <div id="main-link" class="clickable" value="menu">menu</div>
          <div id="profil-link" class="clickable" value="profil">profil</div>
          <div id="register-link" class="clickable" value="register">inscription</div>
          <div id="reset-link" class="clickable" value="reset-pwd">reset pwd</div>
          <div></>
        </div>
      </div>

    </footer>
    <div class="close-nav"> x </div>
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
