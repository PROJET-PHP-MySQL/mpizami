<?php
  //Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Liste</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  </head>
  <body>
    <!-- Entete de la page -->
    <?php include('../include/entete.php'); ?>
    <?php include('../include/navigation.php'); ?>
    <!-- Corp de la page -->
    <div class="container">
      <h2>Liste</h2>
      <p>Liste des membres inscrit</p>
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Filière</th>
            <th>Niveau</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>0347562224</td>
            <td>02/01/2000</td>
            <td>Masculin</td>
            <td>Economie</td>
            <td>Licence1</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>0347292224</td>
            <td>02/06/1998</td>
            <td>Féminin</td>
            <td>Gestion</td>
            <td>Licence2</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>0347142224</td>
            <td>02/11/1995</td>
            <td>Masculin</td>
            <td>Droit</td>
            <td>Licence3</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Pied de la page -->
  </body>
</html>
