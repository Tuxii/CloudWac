<div class="panel panel-default form">
  <div class="panel-body">
	<form method="post" role="form" >
		<fieldset>
		<legend>Connexion</legend>
		<?php 
		if(isset($errors)){
			foreach ($errors as $key => $value) {?>
				<div class="alert alert-danger"><?php echo (is_string($value)) ? $value : FALSE; ?></div>
			<?php }
		} ?>
		<div class="input-group">
			<span class="input-group-addon labelInput">Pseudo</span>
			<input type="text" class="form-control" name="username" placeholder="Votre pseudo" value="<?php echo $user->username; ?>">
		</div>
		<div class="input-group">
		  <span class="input-group-addon labelInput">Email</span>
		  <input type="text" class="form-control" name="email" placeholder="Votre adresse de courrier electronique" value="<?php echo $user->email; ?>">
		</div>
		<!-- <div class="input-group">
		  <span class="input-group-addon labelInput">Mot de passe</span>
		  <input type="text" class="form-control" name="password" placeholder="Votre mot de passe">
		</div> -->
		
		<button type="submit" class="btn btn-primary btn-form">Editer le profil !</button>
		</fieldset>
	</form>
 </div>
</div>