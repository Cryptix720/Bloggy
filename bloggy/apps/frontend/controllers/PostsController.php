<?php

namespace Bloggy\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class PostsController extends Controller
{
	
	
	    private function indexActionPrivate()
    {

    }
	
    public function indexAction()
    {

    }

    protected function showAction($year, $postTitle)
    {
        $year      = $this->dispatcher->getParam("year");
        $postTitle = $this->dispatcher->getParam("postTitle");
		$admin = $this->dispatcher->getParam("admin");
		$keyId = $this->dispatcher->getParam("keyId");
    }
	
	    public function showActions($year, $postTitle)
    {
		
	
        $this->flash->error(
            "You don't have permission to access this area"
        );

        // Forward flow to another action
        $this->dispatcher->forward(
            [
                "controller" => "users",
                "action"     => "signin",
            ]
        );
    }
	
	
	    public function saveAction()
    {
        // Check if request has made with POST
        if ($this->request->isPost()) {
            // Access POST data
            $customerName = $this->request->getPost("id");
            $customerBorn = $this->request->getPost("place");
        }
    }
	    public function notFoundAction()
    {
        // Send a HTTP 404 response header
        $this->response->setStatusCode(404, "You can't find what you was searching for");
    }
	public function beforeExecuteRoute($dispatcher)
    {
        // This is executed before every found action
        if ($dispatcher->getActionName() === "save") {
            $this->flash->error(
                "You don't have permission to save posts"
            );

            $this->dispatcher->forward(
                [
                    "controller" => "home",
                    "action"     => "index",
                ]
            );

            return false;
        }
    }

    public function afterExecuteRoute($dispatcher)
    {
        // Executed after every found action
    }

}