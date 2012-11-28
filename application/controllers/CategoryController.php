<?php

class CategoryController extends Zend_Controller_Action {

  public $redirecturl;
  public $page;
  
  

  public function init() {
    $this->page = new stdClass();
    $this->page->title = 'Category';
    $this->redirecturl = "category/list/";
    
  }

  public function indexAction() {
    // action body
  }

  public function listAction() {
    $data = Category::getAll();
    //Zend_Debug::dump($data);
    
    $this->view->page = $this->page;
    $this->view->data = $data;
  }

  public function addAction() {

    $form = new Application_Form_Category();
    $model = new Category();

    if ($this->getRequest()->isPost()) {
      if ($form->isValid($this->getRequest()->getPost())) {

        $values = $form->getValues();
        $model->fromArray($values);
        //Zend_Debug::dump($model->toArray());//exit;
        $model->save();
        $this->_redirect($this->redirecturl);
      }
    }

    $this->view->form = $form;
  }

  public function updateAction() {

    $id = $this->getRequest()->getParam("id_category");

    $modelTable = CategoryTable::getInstance();
    $model = $modelTable->find($id);
    $form = new Application_Form_Category();

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

    $id = $this->getRequest()->getParam("id_category");

    $modelTable = CategoryTable::getInstance();
    $model = $modelTable->find($id);

    if ($model != null) {
      $model->delete();

      $this->_redirect($this->redirecturl);
    }
  }

}

