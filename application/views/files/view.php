<?php $image = "file.png";
if(strstr($file->type, "audio")){
	$image = "audio.png";
	$view = '<audio controls>
			  <source src="/kohana/'.$file->path.'/'.$file->serv_filename.'" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio>';
}
elseif(strstr($file->type, "image")){
	$image = "image.png";
	$view = '<img class="img-file-info" src="/kohana/'.$file->path."/".$file->serv_filename.'" alt="'.$file->serv_filename.'">';
}	
elseif(strstr($file->type, "video")){
	$image = "mpg.png";
	$view = '<video width="320" height="240" controls>
			  <source src="/kohana/'.$file->path.'/'.$file->serv_filename.'" type="video/mp4">
			Your browser does not support the video tag.
			</video>';
}
elseif(strstr($file->type, "text")){
	$view = file_get_contents("http://localhost/kohana/".$file->path."/".$file->serv_filename);
}
else{
	$view = "";
} ?>


<div class="panel panel-default">
	<div class="panel-body">
		<div class="head-file">
			<h3><?php echo $file->filename; ?></h3>
		</div>
		<div class="col-md-2 img-file">
			<img src="/kohana/media/img/<?php echo $image;?>" alt="">
		</div>
		<div class="col-md-4 info-file">
			<strong>Type :</strong> <?php echo $file->type; ?><br>
			<strong>Taille :</strong> <?php echo $file->size; ?><br>
			<strong>Date d'ajout :</strong> <?php echo $file->date_add; ?><br>
		</div>
		<div class="col-md-4">
		<?php echo $view; ?>
	</div>
	<div class="col-md-2">
		<a href="/kohana/files/download/<?php echo $file->id; ?>"><button class="btn btn-success btn-file">Télécharger</button></a>
		<a href="/kohana/files/share/<?php echo $file->id; ?>"><button class="btn btn-info btn-file">Partager</button></a>
		<a href="/kohana/files/delfile/<?php echo $file->id; ?>"><button class="btn btn-danger btn-file">Supprimer</button></a>
	</div>
	</div>
</div>



<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="post" role="form" class="form-file">
			<fieldset>
				<legend>Renommer le fichier</legend>
				<div class="input-group">
					<span class="input-group-addon labelInput">Nom du fichier</span>
					<input type="text" class="form-control" name="filename" value="<?php echo $file->filename;?>" placeholder="Nouveau nom de votre fichier">
				</div>
				<input type="hidden" name="rename" value="rename">
				<br><br>
				<button type="submit" class="btn btn-primary btn-form">Renommer le fichier</button>
			</fieldset>
			</form>
		</div>
	</div>
</div>

<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="post" role="form" class="form-file">
			<fieldset>
				<legend>Déplacer le fichier</legend>
				<div class="input-group">
					<span class="input-group-addon labelInput">Dossier de destination</span>
					<select  class="form-control" name="directory">
						<?php foreach($listDirs as $dir): ?>
							<option value="<?php echo $dir->id ?>"><?php echo $dir->name ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<input type="hidden" name="move" value="move">
				<br><br>
				<button type="submit" class="btn btn-primary btn-form">Déplacer dans le dossier</button>
			</fieldset>
			</form>
		</div>
	</div>
</div>


