<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->welcome = "Welcome to Bewan Scrum";
        $scrum = new stdClass();
        $scrum->url = "/scrum/list";
        $scrum->label = array(); 
        $scrum->label[] = "Crouch!";
        $scrum->label[] = "...Touch!";
        $scrum->label[] = "...Pause!";
        $scrum->label[] = "...Engage!";
        
        //Zend_Debug::dump($scrum);//exit;
        $this->view->scrumurl = $scrum;
    }


}

