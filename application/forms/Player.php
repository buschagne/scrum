<?php

class Application_Form_Player extends Zend_Form
{

    public function init()
    {
      
      $this->setName("player");
       
        /*
         *	 label 
         */
        
        $name=new Zend_Form_Element_Text("name");
        $name->setLabel("name");
        $name->setRequired();
        
        $name->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($name);
        
        
        
        /*
         *	 submit 
         */
        
        $submit=new Zend_Form_Element_Submit("submit");
        $submit->setLabel("submit")->setOptions(array('class'=>'btn btn-info'));
        $this->addElement($submit);



        /*
         *  Remove decorators
         */
        foreach($this->getElements() as $element) {
            //$element->setDecorators(array("ViewHelper"));
        }

    }

      
   

}

