<?php

class ScrumController extends Zend_Controller_Action
{

  public $redirecturl;
  public $page;
  
  

  public function init() {
    $this->page = new stdClass();
    $this->page->title = 'Scrums';
    $this->redirecturl = "scrum/list/";
    
  }

  public function indexAction() {
    // action body
  }

  public function listAction() {
    $data = ScrumItem::getAll();
    //Zend_Debug::dump($data);
    
    $this->view->page = $this->page;
    $this->view->data = $data;
  }

  public function addAction() {

    $form = new Application_Form_Scrum();
    $model = new ScrumItem();

    if ($this->getRequest()->isPost()) {
      if ($form->isValid($this->getRequest()->getPost())) {

        $values = $form->getValues();
        $model->fromArray($values);
        //Zend_Debug::dump($model->toArray());//exit;
        if(empty($model->removed_on))$model->removed_on = null;
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }

    $this->view->form = $form;
  }

  public function updateAction() {

    $id = $this->getRequest()->getParam("id_scrum_item");

    $modelTable = ScrumItemTable::getInstance();
    $model = $modelTable->find($id);
    $form = new Application_Form_Scrum();

    if ($this->getRequest()->isPost()) {

      if ($form->isValid($this->getRequest()->getPost())) {

        $model->setArray($form->getValues());
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }
    $this->view->form = $form->populate($model->toArray());
  }

  public function deleteAction() {

    $id = $this->getRequest()->getParam("id_scrum_item");

    $modelTable = ScrumItemTable::getInstance();
    $model = $modelTable->find($id);

    if ($model != null) {
      $model->delete();

      $this->_redirect($this->redirecturl);
    }
  }


}

