<?php

class Application_Form_Play extends Zend_Form
{

    public function init()
    {
        
       
        $this->setName("play");
       
        
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
         *	 label 
         */
        
        $label=new Zend_Form_Element_Text("label");
        $label->setLabel("label");
        $label->setRequired();
        
        $label->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"150"))
        ));
        $this->addElement($label);
        
        
//        /*
//         *	 description 
//         */
//        
//        $description=new Zend_Form_Element_Textarea("description");
//        $description->setLabel("description");
//        $description->setRequired();
//        $description->setAttrib('rows', '10');
//        $description->addValidators(array(
//        	
//        ));
//        $this->addElement($description);
//        
//        
        
        /*
         *	 started_on 
         */
        
        $started_on=new Zend_Form_Element_Text("started_on");
        $started_on->setLabel("started_on");
        //$started_on->setRequired();
        //$started_on->setValue('0000-00-00 00:00:00');
        $started_on->setAttrib('class', 'datepicker');
        $started_on->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($started_on);
        
        
        
         
        /*
         *	 stopped_on 
         */
        
        $stopped_on=new Zend_Form_Element_Text("stopped_on");
        $stopped_on->setLabel("stopped_on");
        //$stopped_on->setRequired();
        //$stopped_on->setValue('0000-00-00 00:00:00');
        $stopped_on->setAttrib('class', 'datepicker');
        $stopped_on->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($stopped_on);
        
        
         
        /*
         *	 stop_reason 
         */
        
        $stop_reason=new Zend_Form_Element_Textarea("stop_reason");
        $stop_reason->setLabel("stop_reason");
        //$stop_reason->setRequired();
        $stop_reason->setValue('Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ');
        $stop_reason->setAttrib('rows', '10');
        $stop_reason->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($stop_reason);
        
         
        /*
         *	 estimate_duration 
         */
        
        $estimate_duration=new Zend_Form_Element_Text("estimate_duration");
        $estimate_duration->setLabel("estimate_duration");
        //$estimate_duration->setRequired();
        $estimate_duration->setValue('0');
        
        $estimate_duration->addValidators(array(
        	new Zend_Validate_StringLength(array("max"=>"5"))
        ));
        $this->addElement($estimate_duration);
        
        
         
        /*
         *	 estimate_finish 
         */
        
        $estimate_finish=new Zend_Form_Element_Text("estimate_finish");
        $estimate_finish->setLabel("estimate_finish");
        //$estimate_finish->setRequired();
        //$estimate_finish->setValue('0000-00-00 00:00:00');
        $estimate_finish->setAttrib('class', 'datepicker');
        $estimate_finish->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($estimate_finish);
        
        
         
        /*
         *	 deadline 
         */
        
        $deadline=new Zend_Form_Element_Text("deadline");
        $deadline->setLabel("deadline");
        //$deadline->setRequired();
        //$deadline->setValue('0000-00-00 00:00:00');
        $deadline->setAttrib('class', 'datepicker');
        $deadline->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($deadline);
        
        
         
        /*
         *	 finished_on 
         */
        
        $finished_on=new Zend_Form_Element_Text("finished_on");
        $finished_on->setLabel("finished_on");
        //$finished_on->setRequired();
        //$finished_on->setValue('0000-00-00 00:00:00');
        $finished_on->setAttrib('class', 'datepicker');
        $finished_on->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($finished_on);
        
        
        
        /*
         *	 result 
         */
        
        $result=new Zend_Form_Element_Select("result");
        $result->setLabel("result");
        //$result->setRequired();
        //$result->setValue('Y/N');
        $result->addMultiOption("1", "Yes");
        $result->addMultiOption("0", "No");
        $result->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($result);
        
        
         
        /*
         *	 result_comment 
         */
        
        $result_comment=new Zend_Form_Element_Textarea("result_comment");
        $result_comment->setLabel("result_comment");
        $result_comment->setValue("What is the result/Why is there no result?");
        $result->setAttrib('rows', '10');
        $result_comment->addValidators(array(
        	//new Zend_Validate_StringLength(array("max"=>"20"))
        ));
        $this->addElement($result_comment);
        
        
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
     * 	 fk_id_team Select 
     */

    $fk_id_team = new Zend_Form_Element_Select("fk_id_team");
    $fk_id_team->setLabel("fk_id_team");
    $fk_id_team->setRequired();
    //$fk_id_team->setValue("");
    $fk_id_team->addValidators(array(
        new Zend_Validate_Int(),
        //new Zend_Validate_StringLength(array("max" => "4"))
    ));
    $q = Doctrine_Query::create()
            ->select("id_team, CONCAT(label) as label")
            ->from("Team")
            ->fetchArray();

    $options = array();

    $fk_id_team->addMultiOption("", "");
    foreach ($q as $v) {
      $fk_id_team->addMultiOption($v["id_team"], $v["label"]);
    }

    $this->addElement($fk_id_team);
  

        
             
        
        
        
        
        
        
        
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



    protected function _crap() {


    /*
     * 	 Category Select 
     */

    $category = new Zend_Form_Element_Select("category");
    $category->setLabel("category");
    $category->setRequired();
    //$category->setValue("");
    $category->addValidators(array(
        new Zend_Validate_Int(),
        new Zend_Validate_StringLength(array("max" => "4"))
    ));
    $q = Doctrine_Query::create()
            ->select("id_category, CONCAT(label) as label")
            ->from("Category")
            ->fetchArray();

    $options = array();

    $category->addMultiOption("", "");
    foreach ($q as $v) {
      $category->addMultiOption($v["id_category"], $v["label"]);
    }

    $this->addElement($category);
    
    
    
    
    
    
  }


}

