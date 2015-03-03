<?php
use Mojavi\Action\BasicRestAction;
use Mojavi\Logging\LoggerManager;
use Adl\Lead;
use Mojavi\Form\BasicAjaxForm;
/**
 * PostAction handles post requests
 *
 * @author Mark Hobson
 * @since 11/27/2007 7:21 pm
 */
class TestPostAction extends BasicRestAction {

    /**
     * Returns the input form to use for this rest action
     * @return  BlackListedDomain
     */
    function getInputForm() {
        return new Lead();
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
     * @return integer (View::SUCCESS, View::ERROR, View::NONE)
     */
    public function executeGet($input_form)
    {
		return $this->executePost($input_form);
    }
    
	/**
     * Executes a POST request
     * @return \Mojavi\Form\BasicAjaxForm
     */
    function executePost($input_form) {
    	$ajax_form = new BasicAjaxForm();
    	// First verify that we can insert this post
        $input_form->send(true);
		$ajax_form->setInsertId($input_form->getId());
		$ajax_form->setRowsAffected(1);
		$ajax_form->setRecord($input_form);
        return $ajax_form;
    }
} 
?>
