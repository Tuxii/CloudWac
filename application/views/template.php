<?php if(isset($_POST['theme']) && !empty($_POST['theme'])){
  $_SESSION['theme'] = $_POST['theme'];
  } ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="author" content="devill_p"> 
  <link rel="icon" href="/kohana/media/img/favicon.ico" />
  <link rel="stylesheet" href="http://localhost/kohana/media/css/<?php echo (!isset($_SESSION['theme'])) ? "bootstrap.css" : "bootstrap_".$_SESSION['theme'].".css" ; ?>">
  <link rel="stylesheet" href="http://localhost/kohana/media/css/styles.css">
	<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</head>
<body>


<nav class="navbar navbar-inverse" role="navigation">
   <div class="container">

  <div class="navbar-header">
    <a class="navbar-brand" href="/kohana/home">CloudWac</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  <?php if($user): ?>
    <ul class="nav navbar-nav">
      <li><a href="/kohana/files/add">Ajouter un fichier</a></li>
      <li><a href="/kohana/files/newdir">Créer un dossier</a></li>
      <li><a href="/kohana/files/list">Mes fichiers</a></li>
    </ul>
  <?php endif; ?>
    
    <ul class="nav navbar-nav navbar-right">
    <?php if(!$user): ?>
      <li><a href="/kohana/users/signup">Inscription</a></li>
      <li><a href="/kohana/users/login">Connexion</a></li>
    <?php endif; ?>
    <?php if($user): ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenue <?php echo $user->username ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/kohana/users/edit">Editer le profil</a></li>
          <li><a href="/kohana/users/logout">Déconnexion</a></li>
        </ul>
      </li>
    <?php endif; ?>
    </ul>

  </div><!-- /.navbar-collapse -->
   </div>

</nav>

<div class="container">
	<div class="row">
	<?php echo $content; ?>
	</div>
  <footer>
    &copy; devill_p Projet CloudWac <br>Octobre 2013
    <form method="post">
            Theme : <select name="theme" id="">
                        <option value=""></option>
                        <option value="cosmo">Cosmo</option>
                        <option value="amelia">Amelia</option>
                        <option value="cyborg">Cyborg</option>
                        <option value="flatly">Flatly</option>
                        <option value="classic">Classic</option>
                        <option value="cerulean">Cerulean</option>
                      </select>
                      <button class="btn" type="submit">Changer de thème</button>
          </form>
  </footer>
</div>

</body>
</html>