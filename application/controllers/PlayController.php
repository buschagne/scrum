<?php

class PlayController extends Zend_Controller_Action
{

    public $redirecturl;
  public $page;
  
  

  public function init() {
    $this->page = new stdClass();
    $this->page->title = 'Play';
    $this->redirecturl = "play/list/";
    
  }

  public function indexAction() {
    // action body
  }

  public function listAction() {
    $data = Play::getAll();
    
    $this->view->selected_scrum = $selected_scrum = $this->getRequest()->getParam("selected_scrum");
    
    
    $this->view->page = $this->page;
    $this->view->data = $data;
  }

  public function addAction() {

    $form = new Application_Form_Play();
    $model = new Play();

    if ($this->getRequest()->isPost()) {
      if ($form->isValid($this->getRequest()->getPost())) {

        $values = $form->getValues();
        $model->fromArray($values);
        if(empty($model->started_on))$model->started_on = null;
        if(empty($model->stopped_on))$model->stopped_on = null;
        if(empty($model->estimate_finish))$model->estimate_finish = null;
        if(empty($model->deadline))$model->deadline = null;
        if(empty($model->finished_on))$model->finished_on = null;
        
        //Zend_Debug::dump($model->toArray());//exit;
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }

    $this->view->form = $form;
  }

  public function updateAction() {

    $id = $this->getRequest()->getParam("id_play");

    $modelTable = PlayTable::getInstance();
    $model = $modelTable->find($id);
    $form = new Application_Form_Play();

    if ($this->getRequest()->isPost()) {

      if ($form->isValid($this->getRequest()->getPost())) {

        $model->setArray($form->getValues());
        if(empty($model->started_on))$model->started_on = null;
        if(empty($model->stopped_on))$model->stopped_on = null;
        if(empty($model->estimate_finish))$model->estimate_finish = null;
        if(empty($model->deadline))$model->deadline = null;
        if(empty($model->finished_on))$model->finished_on = null;
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }
    $this->view->form = $form->populate($model->toArray());
  }

  public function deleteAction() {

    $id = $this->getRequest()->getParam("id_play");

    $modelTable = PlayTable::getInstance();
    $model = $modelTable->find($id);

    if ($model != null) {
      $model->delete();

      $this->_redirect($this->redirecturl);
    }
  }


}

