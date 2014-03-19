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

<div class="panel panel-default form">
	<div class="panel-body">
		<form method="post" role="form">
		<fieldset>
			<legend>Ajouter un dossier</legend>
			<div class="input-group">
				<span class="input-group-addon labelInput">Nom du dossier</span>
				<input type="text" class="form-control" name="dirname" placeholder="Nom de votre dossier">
				
			</div>
			<div class="input-group">
				<span class="input-group-addon labelInput">Dossier Parent</span>
				<select  class="form-control" name="parent_directory">
					<?php foreach($listDirs as $dir): ?>
						<option value="<?php echo $dir->id ?>"><?php echo $dir->name ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<br><br>
			<button type="submit" class="btn btn-primary btn-form">Créer un nouveau dossier</button>
		</fieldset>
		</form>
	</div>
</div>