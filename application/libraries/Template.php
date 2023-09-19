<?php

class Template
{
	public function __construct()
	{
		$this->CI = &get_instance();
	}

	public function header($data = []){
		$default = [];

		$data = array_merge($data, $default);
	}
}
