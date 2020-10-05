<?php
  //Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="shortcut icon" href="../icons/admin-settings-male.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  </head>
  <body>
      <?php
        //Set session variables
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['password'] = $_POST['password'];
        }
        //Insertion de l'entete
        include('../include/entete.php');
        //navigation
        include('../include/navigation.php');

        //La securisation de données entrée par l'utilisateur
        function securisation($donnee) {
          $donnee = trim($donnee);
          $donnee = stripslashes($donnee);
          $donnee = strip_tags($donnee);
          return $donnee;
        }

        //Définition et initialisation de la variables
        $nom = $prenom = $email = $telephone = $naissance = $sexe = $filiere = $niveau = "";
        //$nomErr = $prenomErr = $emailErr = $telephoneErr = $naissanceErr = $filiereErr = $niveauErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          //Verification du champ Nom
          if (!empty($_POST['nom'])){
            $nom = securisation($_POST['nom']);
          }
          /*else {
            $nom = securisation($_POST['nom']);
          }

          /*
          //Verification du champ prenom
          if (empty($_POST['prenom'])) {
            $prenomErr = "Le champ prénom est vide";
          }
          else {
            $prenom = securisation($_POST['prenom']);
          }

          //Verification du champ email
          if (empty($_POST['email'])) {
            $emailErr = "Le champ email est vide";
          }
          else {
            $email = securisation($_POST['email']);
          }

          //Verification du champ telephone
          if (empty($_POST['telephone'])) {
            $telephoneErr = "Le champ telephone est vide";
          }
          else {
            $telephone = securisation($_POST['telephone']);
          }

          //Verification de la date de naissance
          if (empty($_POST['naissance'])) {
            $naissanceErr = "Le champ date de naissance est vide";
          }
          else {
            $naissance = securisation($_POST['naissance']);
          }

          //Teste : si le sexe est masculin ou feminin
          /*if ($_POST['sexe'] == 'M') {
            $sexe = "Masculin";
          }
          else {
            $sexe = "Femnin";
          }

          // Verification du champ filiere
          if (empty($_POST['filiere'])) {
            $filiereErr = "Le champ filiere est vide";
          }
          else {
            $filiere = securisation($_POST['filiere']);
          }

          //Verification du champ niveau
          if (empty($_POST['niveau'])) {
            $niveauErr = "Le champ niveau est vide";
          }
          else {
            $niveau = securisation($_POST['niveau']);
          }
        }
        */
      ?>
    </header>

    <form action="/action_page.php" class="was-validated">
        <div class="form-group">
          <label for="name">Nom:</label>
          <input type="text" class="form-control" placeholder="Enter firstname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" class="form-control" placeholder="Enter lastname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Email:</label>
          <input type="text" class="form-control" placeholder="Enter lastname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Téléphone:</label>
          <input type="text" class="form-control" placeholder="Enter lastname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Date de naissance:</label>
          <input type="text" class="form-control" placeholder="Enter lastname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Sexe:</label>
          <select name="sexe">
            <option value="M">Masculin</option>
            <option value="F">Feminin</option>
          </select>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Filière:</label>
          <input type="text" class="form-control" placeholder="Enter lastname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="lastname">Niveau:</label>
          <input type="text" class="form-control" placeholder="Enter lastname" name="" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




    <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <h2>Inscription</h2>
      <p>* = champs obligatoires</p>
      <label for="">Nom* </label>
      <input type="text" name="nom" value="<?php echo $nom; ?>" placeholder="Ex : ANDRY"> <br>
      <span><?php echo $nomErr; ?></span> <br>
      <label for="">Prénom* </label>
      <input type="text" name="prenom" value="<?php $prenom; ?>" placeholder="Ex : Rakoto"> <br>
      <span><?php echo $prenomErr; ?></span> <br>
      <label for="">Email </label>
      <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Ex : coucou97@gmail.com"> <br>
      <span><?php echo $emailErr; ?></span> <br>
      <label for="">Téléphone </label>
      <input type="text" name="telephone" value="<?php echo $telephone; ?>" placeholder="Ex : 000 00 000 00"> <br>
      <span><?php echo $telephoneErr; ?></span> <br>
      <label for="">Date de naissance* </label>
      <input type="text" name="naissance" value="<?php echo $naissance; ?>" placeholder="jj/mm/aaaa"> <br>
      <span><?php $naissanceErr; ?></span> <br>
      <label for="">Sexe* </label>
      <select name="sexe">
        <option value="M">Masculin</option>
        <option value="F">Feminin</option>
      </select> <br>
      <label for="">Filière* </label>
      <input type="text" name="filiere" value="<?php echo $filiere; ?>" placeholder="Ex : Gestion"> <br>
      <span><?php echo $filiereErr; ?></span> <br>
      <label for="">Niveau* </label>
      <input type="text" name="niveau" value="<?php echo $niveau; ?>" placeholder="Ex : Licence 1"> <br> <br>
      <span><?php echo $niveau; ?></span> <br>
      <input type="submit" value="Valider">
      <input type="reset" value="Mettre à zero">
    </form>
    <!-- Pied de page -->
    <footer>
      <?php
        include('../include/pied.php');
      ?>
    </footer>
    <script src="../bootstrap/js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
