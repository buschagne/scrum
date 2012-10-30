<?php

class Application_Form_Category extends Zend_Form
{

    public function init()
    {
        
       
        $this->setName("category");
       
        /*
         *	 label 
         */
        
        $label=new Zend_Form_Element_Text("label");
        $label->setLabel("label");
        $label->setRequired();
        
        $label->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"50"))
        ));
        $this->addElement($label);
        
        
        
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

