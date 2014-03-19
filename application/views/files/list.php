<h2>Mes fichiers sur le CloudWac</h2>


<?php echo $space_used; ?>


	<?php $folders = array();
	foreach ($directories as $key => $directory) {
	 	$folders[$key] = '
	 	<tr>
			<td><img src="/kohana/media/img/folder.png" width="25" height="25" alt="folder"> <a href="/kohana/files/list/'.$directory->id.'">'.$directory->name.'</a></td>
			<td></td>
			<td></td>
		</tr>
	 	';

	 	$folders[$key.'-parent'] = $directory->parent_id;
	 } ?>
	<?php //foreach ($current_directory as $key => $value): ?>
		<div class="block">
				<div class="nav-folder">
					<?php if(isset($current_directory->parent_id)): ?>
						<a href="/kohana/files/list/<?php echo $current_directory->parent_id?>"><button class="btn btn-default">Dossier Parent</button></a>
					<?php endif; ?>
					<a href="/kohana/files/newdir"><button class="btn btn-default">Créer un dossier</button></a>
					<a href="/kohana/files/renamedir/<?php echo $current_directory->id; ?>"><button class="btn btn-default">Renommer le dossier</button></a>
					<a href="/kohana/files/deldir/<?php echo $current_directory->id; ?>"><button class="btn btn-danger">Supprimer le dossier</button></a>
				</div>
			<div class="imgfolder">
				
				<img src="/kohana/media/img/folder.png" width="25" height="25" alt="folder"> <?php echo $current_directory->name; ?>
			</div>
			
			<div class="content_folder">
				<table class="table table-file">
					<tr>
						<th>Nom du fichier</th>
						<th>Taille</th>
						<th>Ajouté le</th>
					</tr>
				<?php foreach ($files as $key => $file):?>
					<?php if($file->dir_id == $current_directory->id): ?>

						<?php $image = "file.png";
							if(strstr($file->type, "audio")){
								$image = "audio.png";

							}
							elseif(strstr($file->type, "image")){
								$image = "image.png";
							}
							elseif(strstr($file->type, "video")){
								$image = "mpg.png";
							}
							else{
								$view = "";
							} ?>
						<tr>
							<td><img src="/kohana/media/img/<?php echo $image; ?>" width="25" height="25" alt="file"> <a href="/kohana/files/view/<?php echo $file->id;?>"><?php echo $file->filename?></a></td>
							<td><?php echo $file->size?></td>
							<td><?php echo $file->date_add?></td>
						</tr>
						
					
				<?php endif; ?>
				
					<!-- <a href="/kohana/files/view/<?php echo $current_directory->id ?>"><button class="btn btn-primary">Consulter</button></a></td> -->
					<!-- <a href="/kohana/files/del/<?php echo $current_directory->id ?>"><button class="btn btn-danger">Supprimer</button></a></td> -->
				<?php endforeach; ?>

				<?php 
				for ($i=0; $i < count($folders) ; $i++) { 
					if(isset($folders[$i.'-parent']) && $folders[$i.'-parent'] == $current_directory->id){
						echo $folders[$i];
					}	

				} ?>
				</table>
			</div>
			<?php 
			?>
		</div>
	<?php //endforeach; ?>
	

