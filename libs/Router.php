<?php
class Router{
	public function __construct(){
		if($_GET['url'] == 'frontController'){
			require 'controllers/'.$_POST['class'].'.php';
			$obj = new $_POST['class']();
			$obj -> {$_POST['metode']}();
		} else {
			$folder = 'main';
			$view = 'index';

			if(isset($_REQUEST['url'])){
				$url = explode('/',$_REQUEST['url']);
				$folder = array_shift($url);
				if(!empty($url)){
					$view = array_shift($url);
				}
			}
			require 'views/'.$folder.'/'.$view.'.php';
		}
	}
}