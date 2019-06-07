<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex7P4</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex7p4</h1>
        <p class="lead">voir consigne.</p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
      function carac($gender,$age){
          if ($gender == 'femme') {
            if ($age < 18) {
              return 'Vous êtes une femme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
            } else {
              return 'Vous êtes une femme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
            }
          } else {
            if ($gender =='homme') {
              if ($age < 18) {
                return 'Vous êtes un homme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
              } else {
                return 'Vous êtes un homme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
              }
            }
          }
        }
        // Appel de la fonction
        $res = carac('femme',39);
        // echo '<p>Premier paramètre = "23", deuxième paramètre = "homme"</p>';
        echo '<p>Résultat : '.$res.'</p>';
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
