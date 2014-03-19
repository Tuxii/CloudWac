<div class="panel panel-default form">
  <div class="panel-body">
	<form method="post" role="form" >
		<fieldset>
		<legend>Inscription</legend>
		<?php if($message):?>
			<div class="alert alert-danger"><?php echo $message; ?></div>
		<?php endif; 
		
		if(isset($errors)):?>
			<ul>
			<?php foreach ($errors as $key => $value):?>
				<li><p class="text-danger"><strong><?php echo (is_string($value)) ? $value : $value['password_confirm']; ?></strong></p></li>
			<?php endforeach;?>
			</ul>
		<?php endif; ?>
		<div class="input-group">
		  <span class="input-group-addon labelInput"><strong>Pseudo</strong></span>
		  <input type="text" class="form-control" name="username" placeholder="Votre pseudo">
		</div>
		<div class="input-group">
		  <span class="input-group-addon labelInput"><strong>Email</strong></span>
		  <input type="text" class="form-control" name="email" placeholder="Votre adresse electronique">
		</div>
		<div class="input-group">
		  <span class="input-group-addon labelInput"><strong>Mot de passe</strong></span>
		  <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe">
		</div>
		<div class="input-group">
		  <span class="input-group-addon labelInput"><strong>Confirmer le mot de passe</strong></span>
		  <input type="text" class="form-control" name="password_confirm" placeholder="Retapez votre mot de passe">
		</div>
		<br>
		<p>Déjà un compte ? <?php echo HTML::anchor('/users/login', 'Connectez-vous !'); ?></p>
		<button type="submit" class="btn btn-primary btn-form">Inscription !</button>
		</fieldset>
	</form>
 </div>
</div>