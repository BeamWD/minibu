
<!doctype html>
<html>
<head>
<title>Bienvenue chez Minibu !</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="keywords" content="Minibu,coiffeur,coiffure,hommes,sans,rendez-vous,Châtelet,Chatelet,place,saint-roch,"/>
<meta name="description" content="Chez Minibu, coiffure hommes - 000 Place Saint-Roch 000 Châtelet" />

<?php
  require('header.php')
?>

</head>
<body>
<?php
  $msg="Entrer mot de passe"
?>
<form class ="form-signin"
  role ="form"
  action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
  method ="post">
  <h1 class = "form-signin-heading">
    <?php echo $msg; ?>
  </h1>
  <label>
    Utilisateur
  </label>
  <input type="text"
    class="form-control" 
    name="username"
    placeholder="username=tutorialspoint" 
    required
    autofocus>
  </br>
  <label>
    Mot de passe
  </label>
  <input type="password"
    class="form-control"
    name="password"
    placeholder="password=1234"
    required>
  <br />
  <button class = "btn btn-lg btn-primary btn-block"
    type = "submit" 
    name = "login">
    Login
  </button>
</form>
<body>
</html>
