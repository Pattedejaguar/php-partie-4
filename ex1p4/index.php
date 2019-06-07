<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex1p4</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex1p4</h1>
          <p class="lead">Faire une fonction qui retourne true. </p>
            <hr class="my-2">
          </div>
        </header>
        <!-- main -->
        <main class="text-center">
          <?php
            function retour() {
              return true;
            }
          // Appel de la fonction
          $res = retour();
          echo 'Valeur retournée par la fonction = '.$res;
          ?>
        </main>
      </div>
      <!-- scripts JQuery Popper et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
    </body>
    </html>
