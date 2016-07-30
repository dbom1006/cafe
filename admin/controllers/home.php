<?php if(!defined('PATH_SYSTEM')) die('Bad requested!');
	
class HomeController{

	public function index(){
		echo '<a href="'.BASE_URL.'admin.php?c=catogery">CATOGERY</a>';
	}
}

?>