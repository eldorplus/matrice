<?php
/**
* Parssing url
*/
class parssing_url
{
	var $path_url;
	
	function __construct($path_url){
		$this->path_url = $this->removeslash($path_url);
	}

	private function removeslash($string){
		if ($string[strlen($string) -1] == '/')
			$string = rtrim($string, '/');
		return $string;
	}
	
	function _toString(){
		return $this->path_url;
	}
	
	function segment($segment){
		$url = str_replace($this->path_url, '', $_SERVER['REQUEST_URI']);
		$url = explode('/', $url);
		$cpt = count($url);
		if (isset($url[$segment]))
			return $url[$segment];
		else
			return false;
	}

	function sizeof()
	{
		$url = str_replace($this->path_url, '', $_SERVER['REQUEST_URI']);
		$url = explode('/', $url);
		return  count($url);
	}

	function title()
	{
		$inter = $this->segment(2);
		if (!$inter == "")
		{
			$title = explode('.php', $this->segment(2));
			return  ucwords($title[0]);
		}
		else
			return  null;
	}
}
?>