<?php if(!defined('PATH_SYSTEM')) die('Bad requested!');

class Loader{
	private $controllerName; // name of controller file
    private $controllerClass; // name of controller class
    private $action; // action of requester
    private $urlValues; // array store all variable in URL

    public function __construct() {
        $this->urlValues = $_GET;
        if (!isset($this->urlValues['c'])) {
            $this->controllerName = "home";
            $this->controllerClass = "HomeController";
        } else {
            $this->controllerName = strtolower($this->urlValues['c']);
            $this->controllerClass = ucfirst(strtolower($this->urlValues['c'])) . "Controller";
        }
        
        if (!isset($this->urlValues['a'])) {
            $this->action = "index";
        } else {
            $this->action = $this->urlValues['a']; 
        }
    }

    public function load(){

		if(!file_exists(PATH_APPLICATION.'/controllers/'.$this->controllerName.'.php'))
			die("Bad URL! Controller không tồn tại.");

		require_once(PATH_APPLICATION.'/controllers/'.$this->controllerName.'.php');

		if(!class_exists($this->controllerClass))
			die("Bad URL! Controller không tồn tại.");
		
		$Controller=new $this->controllerClass();

		if(!method_exists($Controller, $this->action))
			die("Bad URL! Action không tồn tại.");

		$Controller->{$this->action}();
	}
}

?>