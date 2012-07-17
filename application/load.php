<?php 

class Load 
{

	public function view( $filename , $data = null)
	{
		if(is_array($data))
		{
			extract($data);
		}
		ob_start();
		include "views/".$filename.'.php';
		$content = ob_get_contents();
		ob_end_clean();
		include WEBROOT.APPL."/views/template.view.php";
	}

}