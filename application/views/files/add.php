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
		<form method="post" role="form" enctype="multipart/form-data">
		<fieldset>
			<legend>Ajouter un fichier</legend>
			<div class="input-group">
				<span class="input-group-addon labelInput">Nom du fichier</span>
				<input type="text" class="form-control" name="filename" placeholder="Titre de votre fichier">
			</div>
			<em>Si vide, le nom original du fichier sera pris en compte.</em>
			<div class="input-group">
				<span class="input-group-addon labelInput">Dossier de destination</span>
				<select  class="form-control" name="directory">
					<?php foreach($listDirs as $dir): ?>
						<option value="<?php echo $dir->id ?>"><?php echo $dir->name ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<br><br>
			<input type="file" name="file">
			<button type="submit" class="btn btn-primary btn-form">Envoyer</button>
		</fieldset>
		</form>
	</div>
</div>