<?php 

abstract class Controller_Website extends Controller_Template{


	public $template = 'template';


	/**
   * The before() method is called before your controller action.
   * In our template controller we override this method so that we can
   * set up default values. These variables are then available to our
   * controllers if they need to be modified.
   */

	public function formatBytes($size, $precision = 2)
	{
	    $base = log($size) / log(1024);
	    $suffixes = array('', 'k', 'M', 'G', 'T');   

	    return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
	}

	public function before(){
		parent::before();

		$user = Auth::instance()->get_user();
		$this->template->user = $user;
		if($this->auto_render){

			$this->template->title='CloudWac';
			$this->template->content='';

			$this->template->styles=array();
			$this->template->scripts=array();

		}

		

		// View::bind_global('page_title', $this->page_title);

		// $this->tempalte->sidebar = View::factory('template/sidebar');
	}

	/**
   * The after() method is called after your controller action.
   * In our template controller we override this method so that we can
   * make any last minute modifications to the template before anything
   * is rendered.
   */

	public function after(){

		if($this->auto_render){

			$styles= array(
				'/media/css/bootstrap.css' => 'screen',
				'/media/css/styles.css' => 'screen'
			);
			$scripts=array(
				'http://code.jquery.com/jquery-latest.min.js',
				'/media/js/bootstrap.js'
				);
			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge( $this->template->scripts, $scripts );

		}
		parent::after();
	}


}

 ?>