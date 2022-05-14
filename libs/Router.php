<?php
class Router{
	public function __construct(){
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