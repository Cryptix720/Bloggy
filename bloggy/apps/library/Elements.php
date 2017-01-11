<?php

namespace Library;

use Phalcon\Mvc\User\Component;
use Phalcon\Mvc\View\Simple as View;

class Elements extends Component
{
    protected $simpleView;

    public function __construct()
    {
        $this->simpleView =  new View();
        $this->simpleView->setDI($this->getDI());
    }

    public function getMenu()
    {
        $this->simpleView->setViewsDir($this->view->getViewsDir());

        return $this->simpleView->render('templates/topMenu');
    }
}
