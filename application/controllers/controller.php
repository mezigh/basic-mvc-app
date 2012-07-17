<?php 
class Controller
{
	public $load;
	public $model;
	
	public function __construct()
	{
		$this->load = new Load();
		$this->model = new Model();
	}
	
	public function buildView($f,$d)
	{
		$this->load->view($f,$d);
		if($f ==='contact') { 
			if(!empty($_POST)){ 
				$this->processContact( $_POST ); 
			} 
		}
	}
	
	public function processContact($d)
	{
		if(is_array($d))
		{
			extract($d);
			echo $name.'<br/>';
			echo $email.'<br/>';
			echo $subject.'<br/>';
			echo nl2br($message).'<br/>';
			
		}
	}
}


