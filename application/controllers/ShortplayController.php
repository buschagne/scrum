<?php

class ShortplayController extends Zend_Controller_Action
{

    public $redirecturl;
  public $page;
  
  

  public function init() {
    $this->page = new stdClass();
    $this->page->title = 'Shortplay';
    $this->redirecturl = "shortplay/list/";
    
  }

  public function indexAction() {
    // action body
  }

  public function listAction() {
    $data = Shortplay::getAll();
    
    $this->view->selected_scrum = $selected_scrum = $this->getRequest()->getParam("selected_scrum");
    $this->view->selected_category = $selected_category = $this->getRequest()->getParam("selected_category");
    $this->view->selected_player = $selected_player = $this->getRequest()->getParam("selected_player");
    
    $this->view->page = $this->page;
    $this->view->data = $data;
  }

  public function addAction() {

    $form = new Application_Form_Shortplay();
    $model = new Shortplay();

    if ($this->getRequest()->isPost()) {
      if ($form->isValid($this->getRequest()->getPost())) {

        $values = $form->getValues();
        $model->fromArray($values);
        
        $model->updated = date("Y-m-d H:i");
        //Zend_Debug::dump($model->toArray());//exit;
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }

    $this->view->form = $form;
  }

  public function updateAction() {

    $id = $this->getRequest()->getParam("id_shortplay");

    $modelTable = ShortplayTable::getInstance();
    $model = $modelTable->find($id);
    $form = new Application_Form_Shortplay();

    if ($this->getRequest()->isPost()) {

      if ($form->isValid($this->getRequest()->getPost())) {

        $model->setArray($form->getValues());
        $model->updated = date("Y-m-d H:i");
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }
    $this->view->form = $form->populate($model->toArray());
  }

  public function deleteAction() {

    $id = $this->getRequest()->getParam("id_play");

    $modelTable = ShortplayTable::getInstance();
    $model = $modelTable->find($id);

    if ($model != null) {
      $model->delete();

      $this->_redirect($this->redirecturl);
    }
  }


}

