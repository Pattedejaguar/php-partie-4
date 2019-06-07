<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex4p4</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">

  </div>
  <!-- header -->
  <header>
    <div class="jumbotron">
      <h1 class="display-3">PHP ex4p4</h1>
      <p class="lead"> Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner : Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième Les deux nombres sont identiques si les deux nombres sont égaux
      </p>
      <hr class="my-2">
    </header>
    <!-- main -->
    <main class="text-center">
      <!-- utilisation d'un tableau array -->
      <?php
      function nombres($nb1,$nb2) {
      if ($nb1>$nb2) {
        return 'le premier nombre est plus grand.';
      } elseif ($nb1<$nb2) {
        return 'le deuxième nombre est plus grand.';
      } else {
        return 'les deux chiffes sont identiques';
      }
    }
    // appel de la fonction
    $res = nombres(2,2);
    echo $res
      ?>
    </main>
    <!-- footer -->
    <footer>

    </footer>
  </div>
  <!-- scripts JQuery Popper et Bootstrap-->
  <script src="assets/js/jquery-3.4.0.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- mon script principal -->
  <script src="assets/js/main.js"></script>
</body>
</html>
