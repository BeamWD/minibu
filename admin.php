
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
<div id="admin_page">
  <div id="admin_login">
    <form class ="form-signin"
      role ="form"
      action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
      method ="post">
      <h1 class = "form-signin-heading">
        Entrer mot de passe
      </h1>
      <label>
        Mot de passe
      </label>
      <input type="password"
        class="form-control"
        name="password"
        placeholder="Mot de passe"
        required>
      <br />
      <p>
        Mot de passe oublié ? <a>Cliquer pour le réinitialiser.</a>
      </p>
      <button class = "btn btn-lg btn-primary btn-block"
        type = "submit" 
        name = "login">
        Login
      </button>
      <br />
    </form>
  </div>
</div>
<body>
</html>
