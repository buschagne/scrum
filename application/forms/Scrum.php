<?php

class Application_Form_Scrum extends Zend_Form
{

   public function init()
    {
        
       
        $this->setName("scrum");
       
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
         *	 description 
         */
        
        $description=new Zend_Form_Element_Textarea("description");
        $description->setLabel("description");
        $description->setRequired();
        $description->setAttrib('rows', '10');
        $description->addValidators(array(
        	
        ));
        $this->addElement($description);
        
        
        
        /*
         *	 created_on 
         */
        
        $created_on=new Zend_Form_Element_Text("created_on");
        $created_on->setLabel("created_on");
        $created_on->setRequired();
        $created_on->setValue(date('Y-m-d H:i:s'));
        $created_on->setAttrib('class', 'datepicker');
        $created_on->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($created_on);
        
        
        /*
         *	 removed_on 
         */
        
        $removed_on=new Zend_Form_Element_Text("removed_on");
        $removed_on->setLabel("removed_on");
        //$removed_on->setRequired();
        $removed_on->setValue(null);
        $removed_on->setAttrib('class', 'datepicker');
        $removed_on->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($removed_on);
        
        
        
        
        
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

