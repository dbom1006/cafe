<?php if(!defined('PATH_SYSTEM')) die('Bad requested!');

class BaseController{
	protected $view;
	protected $model;
	protected $config;
	
	public function _construct(){

	}

	public function load($controller,$action){
		$controller=strtolower($controller);
		$action=strtolower($action);

		if(!file_exists(PATH_APPLICATION.'/controllers/'.$controller.'.php'))
			die("Bad Url! Controller không tồn tại.");

		require_once(PATH_APPLICATION.'/controllers/'.$controller.'.php');

		$controller=ucfirst($controller).'Controller';

		if(!class_exists($controller))
			die("Bad Url! Controller không tồn tại.");
		
		$ClassController=new $controller();

		if(!method_exists($ClassController, $action))
			die("Bad Url! Action không tồn tại.");

		$ClassController->{$action}();
	}
}

?>