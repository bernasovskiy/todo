<?php

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

	require_once(SMARTY_DIR . 'Smarty.class.php');

	class Application extends Smarty{

	public function __construct(){
		parent::Smarty();
		$this->template_dir = '/templates/';
		$this->compile_dir = '/templates_c/';
		$this->config_dir = '/configs/';
		$this->cache_dir = '/cache/';
	}
	}
?>