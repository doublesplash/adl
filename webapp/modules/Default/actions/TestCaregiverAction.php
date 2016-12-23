<?php
use Mojavi\Action\BasicRestAction;
use Adl\CaregiverApi;
use Mojavi\Form\BasicAjaxForm;
/**
 * PostAction handles post requests
 *
 * @author Mark Hobson
 * @since 11/27/2007 7:21 pm
 */
class TestCaregiverAction extends BasicRestAction {

    /**
     * Returns the input form to use for this rest action
     * @return  BlackListedDomain
     */
    function getInputForm() {
        return new CaregiverApi();
    }
	
    /**
     * Perform any execution code for this action
     * @return integer (View::SUCCESS, View::ERROR, View::NONE)
     */
    public function execute ()
    {
		return parent::execute();       
    } 

	/**
     * Perform any execution code for this action
	 * @param $input_form \Adl\CaregiverApi
     * @return integer (View::SUCCESS, View::ERROR, View::NONE)
     */
    public function executeGet($input_form)
    {
		return $this->executePost($input_form);
    }
    
	/**
     * Executes a POST request
	 * @param $input_form \Adl\CaregiverApi
     * @return \Mojavi\Form\BasicAjaxForm
     */
    function executePost($input_form) {
    	$ajax_form = new BasicAjaxForm();
    	// First verify that we can insert this post
        $caregiver = $input_form->test();
		$ajax_form->setInsertId($caregiver->getId());
		$ajax_form->setRowsAffected(1);
		$ajax_form->setRecord(array('message' => $caregiver->getReturnStatus()));
        return $ajax_form;
    }
} 
?>
