<html lang="fr">
     <head><!DOCTYPE html>
          <title>My C.R.U.D</title>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

          <!-- link boostraps css -->
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css.map">

          <!-- linnk boostraps js -->
          <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.js">
          <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.js.map">
          <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
          <link rel="stylesheet" href="assets/bootstrap/js/jquery-slim.min.js">
          <link rel="stylesheet" href="assets/bootstrap/js/popper.min.js">
          <link rel="stylesheet" href="assets/bootstrap/js/util.js">
     </head>
     <body>
          <?php
               include 'ClassCRUD.php';
               include 'MaFonctionTableaux.php';

               $headers = getHeaderTable();
               $crud = new create();
               $liste = $crud->getAllUser();
               MonTableaux($liste, $headers);
          ?>

          <a href=FormNewUser.php?id=0 >Créer un utilisateur</a> 
     </body>
</html>





