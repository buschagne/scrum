<?php

class Application_Form_Shortplay extends Zend_Form
{

    public function init()
    {
        
       
        $this->setName("shortplay");
       
        
    /*
     * 	 fk_id_scrum_item Select 
     */

    $fk_id_scrum_item = new Zend_Form_Element_Select("fk_id_scrum_item");
    $fk_id_scrum_item->setLabel("fk_id_scrum_item");
    $fk_id_scrum_item->setRequired();
    //$fk_id_scrum_item->setValue("");
    $fk_id_scrum_item->addValidators(array(
        new Zend_Validate_Int(),
        //new Zend_Validate_StringLength(array("max" => "4"))
    ));
    $q = Doctrine_Query::create()
            ->select("id_scrum_item, CONCAT(label) as label")
            ->from("ScrumItem")
            ->fetchArray();

    $options = array();

    $fk_id_scrum_item->addMultiOption("", "");
    foreach ($q as $v) {
      $fk_id_scrum_item->addMultiOption($v["id_scrum_item"], $v["label"]);
    }

    $this->addElement($fk_id_scrum_item);
  

            
        /*
     * 	 fk_id_category Select 
     */

    $fk_id_category = new Zend_Form_Element_Select("fk_id_category");
    $fk_id_category->setLabel("fk_id_category");
    $fk_id_category->setRequired();
    //$fk_id_category->setValue("");
    $fk_id_category->addValidators(array(
        new Zend_Validate_Int(),
        //new Zend_Validate_StringLength(array("max" => "4"))
    ));
    $q = Doctrine_Query::create()
            ->select("id_category, CONCAT(label) as label")
            ->from("Category")
            ->fetchArray();

    $options = array();

    $fk_id_category->addMultiOption("", "");
    foreach ($q as $v) {
      $fk_id_category->addMultiOption($v["id_category"], $v["label"]);
    }

    $this->addElement($fk_id_category);
  

        
   /*
     * 	 fk_id_player Select 
     */

    $fk_id_player = new Zend_Form_Element_Select("fk_id_player");
    $fk_id_player->setLabel("fk_id_player");
    $fk_id_player->setRequired();
    //$fk_id_player->setValue("");
    $fk_id_player->addValidators(array(
        new Zend_Validate_Int(),
        //new Zend_Validate_StringLength(array("max" => "4"))
    ));
    $q = Doctrine_Query::create()
            ->select("id_player, CONCAT(name) as name")
            ->from("Player")
            ->fetchArray();

    $options = array();

    $fk_id_player->addMultiOption("", "");
    foreach ($q as $v) {
      $fk_id_player->addMultiOption($v["id_player"], $v["name"]);
    }

    $this->addElement($fk_id_player);
  

        
        
        /*
         *	 label 
         */
        
        $label=new Zend_Form_Element_Text("label");
        $label->setLabel("label");
        //$label->setRequired();
        
        $label->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"150"))
        ));
        $this->addElement($label);
        
        
        /*
         *	 description 
         */
        
        $description=new Zend_Form_Element_Text("description");
        $description->setLabel("description");
        $description->setRequired();
        
        $description->addValidators(array(
        	
        ));
        $this->addElement($description);
        
        
        
       
        
        
        /*
         *	 not_started 
         */
        
        $not_started=new Zend_Form_Element_Select("not_started");
        $not_started->setLabel("not_started");
        //$not_started->setRequired();
        
        $not_started->addMultiOption("1", "Yes");
        $not_started->addMultiOption("0", "No");
        $not_started->setValue('0');
        $not_started->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($not_started);
        
        
        /*
         *	 started_on 
         */
        
        $started_on=new Zend_Form_Element_Select("started_on");
        $started_on->setLabel("started_on");
        //$started_on->setRequired();
        
        $started_on->addMultiOption("1", "Yes");
        $started_on->addMultiOption("0", "No");
        $started_on->setValue('0');
        $started_on->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($started_on);
        
        
        /*
         *	 done 
         */
        
        $done=new Zend_Form_Element_Select("done");
        $done->setLabel("done");
        //$done->setRequired();
        
        $done->addMultiOption("1", "Yes");
        $done->addMultiOption("0", "No");
        $done->setValue('0');
        $done->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($done);
        
        
        /*
         *	 impediment 
         */
        
        $impediment=new Zend_Form_Element_Select("impediment");
        $impediment->setLabel("impediment");
        //$impediment->setRequired();
        
        $impediment->addMultiOption("1", "Yes");
        $impediment->addMultiOption("0", "No");
        $impediment->setValue('0');
        $impediment->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($impediment);
        
        
        /*
         *	 comment 
         */
        
        $comment=new Zend_Form_Element_Text("comment");
        $comment->setLabel("comment");
        //$comment->setRequired();
        
        $comment->addValidators(array(
        	
        ));
        $this->addElement($comment);
        
        
        
        
         
        /*
         *	 estimate_duration 
         */
        
        $estimate_time=new Zend_Form_Element_Text("estimate_time");
        $estimate_time->setLabel("estimate_time");
        //$estimate_duration->setRequired();
        $estimate_time->setValue('0');
        
        $estimate_time->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"5"))
        ));
        $this->addElement($estimate_time);
        
        
       /*
         *	 updated 
         */
        
        $updated=new Zend_Form_Element_Text("updated");
        $updated->setLabel("updated");
        //$updated->setRequired();
        //$updated->setValue('0000-00-00 00:00:00');
        //$updated->setAttrib('class', 'datepicker');
        
        $updated->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($updated);
        
        
       
        
        
        
        
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

