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
		  <input type="text" class="form-control" name="username" placeholder="Votre pseudo">
		</div>
		<div class="input-group">
		  <span class="input-group-addon labelInput">Mot de passe</span>
		  <input type="password" class="form-control" name="password" placeholder="Votre mot de passe">
		</div>
		<div class="checkbox checkbox-form">
			<label>
			  	<input type="checkbox" name="remember">Se souvenir de moi
			</label>
		</div>
		<button type="submit" class="btn btn-primary btn-form">Connexion !</button>
		</fieldset>
	</form>
 </div>
</div>