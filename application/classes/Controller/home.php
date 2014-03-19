<?php 

class Controller_Home extends Controller_Website {

	public function action_index(){

		$this->page_title = 'Home';
		$this->template->content = View::factory('home/home');

	}
	
}

 ?>