<?php

namespace Blog\Frontend\Controllers;

use Phalcon\Mvc\Model\Criteria;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		
		//add local Js resources
		
		$this->assets->addJs("js/materialize.js");
		$this->assets->addJs("js/materialize.min.js");

	//Add local CSS resources
	
	 $this->assets->addCss("//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css", false);
	$this->assets->addCss("css/materialize.min.css");
	$this->assets->addCss("css/materialize.css");
	$this->assets->addCss("/.../");
	
	
    }

}

