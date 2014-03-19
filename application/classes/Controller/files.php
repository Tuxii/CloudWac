<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Files extends Controller_Website {


	public function action_index(){
		$this->redirect('/files/list');
	}



	public function action_add(){


		$user = Auth::instance()->get_user();
		$this->template->title.= " - Ajout de fichier";
		$this->template->content = View::factory('files/add')
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('listDirs', $dirs)
			->bind('error', $error);

		$post = Validation::factory( $_POST );
		$file = Validation::factory( $_FILES );
		$dirs = ORM::factory('Directory')->where('user_id', '=', $user->id)->find_all();

		$file->rule( 'file', array( 'Upload', 'not_empty' ) );
		$file->rule( 'file', array( 'Upload', 'valid' ) );

		if ( Request::current()->method() == Request::POST && $post->check() && $file->check() ) {
			// the request is valid, do your processing
			 
			//$name = (!empty($_POST['filename'])) ? $this->request->post('filename') : $_FILES['file']['name'];
			// save the uploaded file with the name 'form' to our destination
			
			$fileDb =  ORM::factory('file');
			$user = ORM::factory('user',$user->id);
			if($user->space_used + $_FILES['file']['size'] < $user->max_allowed_space){
				$filename = Upload::save( $file['file']	, NULL, 'Upload');
				 
				if ( $filename === false ) {
					throw new Exception( 'Unable to save uploaded file!' );
				}

				$serv_filename = basename($filename);


				$fileDb->user_id = $user->id;
				$fileDb->filename = $_FILES['file']['name'];
				$fileDb->serv_filename = $serv_filename;
				$fileDb->path = 'Upload';
				$fileDb->size = parent::formatBytes($_FILES['file']['size']);
				$fileDb->size_bytes = $_FILES['file']['size'];
				$fileDb->type = $_FILES['file']['type'];
				$fileDb->date_add = date('Y:m:d H:i:s');
				$fileDb->dir_id = $this->request->post('directory');
				$fileDb->save();

				$space = ORM::factory('user', $user->id);
				$space->space_used = $space->space_used + $_FILES['file']['size'];
				$space->save();

			}
			else{
				$error = "Espace de stockage maximum atteint";
			}

		}

		$errors = Arr::merge( $post->errors( 'some/messages/post' ), $file->errors( 'some/messages/file' ) );


	}

	public function action_list(){

		$user = Auth::instance()->get_user();
		$this->template->title.= " - Mes fichiers";
		$this->template->content = View::factory('files/list')
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('files', $files)
			->bind('directories', $directories)
			->bind('current_directory', $current_directory)
			->bind('space_used', $space_used);

		$param = $this->request->param('id');
		$id = (isset($param) ? $param : 1);

		$user = ORM::factory('user', $user->id);
		$size = substr(parent::formatBytes($user->space_used), 0,4);

		$space_used = 
		'<p>Espace utilisé : ' . $size . '/' . parent::formatBytes($user->max_allowed_space).'</p>'.
		'<div class="progress">
		  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: '.$size.'%;">
		    <span class="sr-only">60% Complete</span>
		  </div>
		</div>';


		$files = ORM::factory('file')->where('user_id', '=', $user->id)->and_where('dir_id', '=', $id)->find_all();
		$current_directory = ORM::factory('directory', $id);
		$directories = ORM::factory('directory')->where('user_id', '=', $user->id)->and_where('parent_id', '=', $id)->find_all();

	}

	public function action_view(){

		$user = Auth::instance()->get_user();
		$id = $this->request->param('id');
		$file = ORM::factory('file',$id);

			
		if($file->user_id == $user->id || $file->share_id == $user->id){
			
		}
		else{
			$this->redirect('/home');
		}

		$this->template->content = View::factory('files/view')
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('file', $file)
			->bind('listDirs', $dirs)
			->bind('pathdir', $pathdir);

		$dirs = ORM::factory('Directory')->find_all();
		$pathdir = ORM::factory('file', $id)->with('directory');
		$this->template->title .= " - ". $file->filename;
		$post_move = $this->request->post('move');
		$post_rename = $this->request->post('rename');
		if ( Request::current()->method() == Request::POST) {


			if(isset($post_move) && !empty($post_move)){
				$move = ORM::factory('file', $file->id);
				$move->dir_id = $this->request->post('directory');
				$move->save();
				echo "test";
				$this->redirect('files/view/'.$file->id);

			}

			if(isset($post_rename) && !empty($post_rename)){

				$rename = ORM::factory('file', $file->id);
				$rename->filename = $this->request->post('filename');
				$rename->save();
				echo "test2";

				$this->redirect('files/view/'.$file->id);
			}


			// } catch (ORM_Validation_Exception $e) {

			// // Set failure message
			// $message = 'Impossible de poursuivre l\'inscription, les erreurs suivantes sont apparues :';
			
			// // Set errors using custom messages
			// $errors = $e->errors('models');
			// }
		}
		

	}

	
	




	public function action_newdir(){

		$user = Auth::instance()->get_user();

		$this->template->title.= " - Ajouter un dossier";
		$this->template->content = View::factory('files/newdir')
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('listDirs', $dirs);

		$dirs = ORM::factory('Directory')->find_all();

		if ( Request::current()->method() == Request::POST) {

			try {

				$directory = ORM::factory('Directory');
				$directory->user_id = $user->id;
				$directory->name = $this->request->post('dirname');
				$directory->parent_id = $this->request->post('parent_directory');
				$directory->save();

			} catch (ORM_Validation_Exception $e) {

				// Set failure message
				$message = 'Impossible de poursuivre l\'inscription, les erreurs suivantes sont apparues :';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}

	public function action_renamedir(){

		$user = Auth::instance()->get_user();

		$this->template->title.= " - Renommer un dossier";
		$this->template->content = View::factory('files/renamedir')
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('listDirs', $dirs)
			->bind('dir', $directory);


		$id = $this->request->param('id');
		$directory = ORM::factory('directory', $id);


		if ( Request::current()->method() == Request::POST) {
			$directory->name = $this->request->post('dirname');
			$directory->save();
		}
	}


	public function action_deldir(){


		$user = Auth::instance()->get_user();

		$id = $this->request->param('id');
		$directory = ORM::factory('directory', $id)->find();
		$directory->delete();
		$file = ORM::factory('file')->where('dir_id', '=', $id)->find_all();
		$files = ORM::factory('file')->where('dir_id', '=', $id)->find();
		$files->delete();
		$user = ORM::factory('user', $user->id);

		$space = NULL;
		foreach($file as $value){
			$space += $value->size_bytes;
			unlink(DOCROOT.DIRECTORY_SEPARATOR.'Upload'.DIRECTORY_SEPARATOR.$value->serv_filename);
		}
		$user->space_used = $user->space_used - $space;
		$user->save();





	}

	public function action_delfile(){

		$id = $this->request->param('id');

		$user = Auth::instance()->get_user();

		$file = ORM::factory('file',$id)->where('user_id', "=", $user->id);
		$user= ORM::factory('user',$user->id);
		$user->space_used = $user->space_used - $file->size_bytes;
		$user->save();
		$file->delete();

		$this->redirect('/files/list/');

	}



	public function action_download(){

        $user = Auth::instance()->get_user();
        $id = $this->request->param('id');
        $file = ORM::factory('file', $id);

            if($file->user_id == $user->id || $file->share_id == $user->id)
            {

	            $full_path = DOCROOT."Upload".DIRECTORY_SEPARATOR.$file->serv_filename; // chemin système (local) vers le fichier
	            $file_name = basename($full_path);

	            ini_set('zlib.output_compression', 0);
	            $date = gmdate(DATE_RFC1123);

	            header('Pragma: public');
	            header('Cache-Control: must-revalidate, pre-check=0, post-check=0, max-age=0');

	            header('Content-Tranfer-Encoding: none');
	            header('Content-Length: '.filesize($full_path));
	            header('Content-MD5: '.base64_encode(md5_file($full_path)));
	            header('Content-Type: application/octetstream; name="'.$file_name.'"');
	            header('Content-Disposition: attachment; filename="'.$file_name.'"');

	            header('Date: '.$date);
	            header('Expires: '.gmdate(DATE_RFC1123, time()+1));
	            header('Last-Modified: '.gmdate(DATE_RFC1123, filemtime($full_path)));

	            readfile($full_path);
	            exit; // nécessaire pour être certain de ne pas envoyer de fichier corrompu
        	}
    }


    public function action_share(){

    	$this->template->title.= " - Partager un fichier";
		$this->template->content = View::factory('files/share')
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('listDirs', $dirs)
			->bind('dir', $directory);



        $id = $this->request->param('id');

		if ( Request::current()->method() == Request::POST) {


			$share = ORM::factory('file',$id);
			$share->share_id = $this->request->post('share');
			$share->save();

		}


    }

}