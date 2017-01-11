<?php
namespace Adl;

use Mojavi\Form\MojaviForm;
use Mojavi\Util\StringTools;
use Mojavi\Logging\LoggerManager;

class LeadApi extends MojaviForm {
	
	//const API_TOKEN = '786KQJIGpphLrjcp7EzVEWuCLpdRLTwnQRm0u8Ru3JUsQoeZS4WJbXh0XMO3rGHYKDwiE5IZz5qVokXcJJEDUSaA==';
	//const API_TOKEN = '7XiWojv0tEmiS0oEjmoFjoETUlZe0nyieSTBJuY2pzt6dXtFkWNCsRzfBeDTyjY1tQmHRQrqjYffpdjnUwJTrQ==';
	const API_TOKEN = 'b0DudF+10wrIbOqo3prX8sdoIwNlGtmTwsOZgs9Civ5wPVNoL9QR9mhe7pQwzK3hqyCFJpv94Tl4Eq966TfYUA==';
	const MAX_ATTEMPTS = 1;

	protected $LeadId;
	protected $AccessToken;
	protected $Lead;
	protected $ReturnStatus;
	protected $Result;

	/**
	 * Shortcut to set the firstname
	 * @param string
	 */
	function setFirstname($arg0) {
		$this->getLead()->setFirstname($arg0);
	}
	
	/**
	 * Shortcut to set the lastname
	 * @param string
	 */
	function setLastname($arg0) {
		$this->getLead()->setLastname($arg0);
	}
	
	/**
	 * Shortcut to set the address
	 * @param string
	 */
	function setAddress($arg0) {
		$this->getLead()->setAddress1($arg0);
	}
	
	/**
	 * Shortcut to set the address2
	 * @param string
	 */
	function setAddress2($arg0) {
		$this->getLead()->setAddress2($arg0);
	}
	
	/**
	 * Shortcut to set the city
	 * @param string
	 */
	function setCity($arg0) {
		$this->getLead()->setCity($arg0);
	}
	
	/**
	 * Shortcut to set the state
	 * @param string
	 */
	function setState($arg0) {
		$this->getLead()->setState($arg0);
	}
	
	/**
	 * Shortcut to set the postal code
	 * @param string
	 */
	function setZipCode($arg0) {
		$this->getLead()->setZipCode($arg0);
	}
	
	/**
	 * Shortcut to set the country
	 * @param string
	 */
	function setCountry($arg0) {
		$this->getLead()->setCountry($arg0);
	}
	
	/**
	 * Shortcut to set the gender
	 * @param string
	 */
	function setGender($arg0) {
		$this->getLead()->setGender($arg0);
	}
	
	/**
	 * Shortcut to set the marital status
	 * @param string
	 */
	function setMaritalStatus($arg0) {
		$this->getLead()->setMaritalStatus($arg0);
	}
	
	/**
	 * Shortcut to set the gender preference
	 * @param string
	 */
	function setGenderPreference($arg0) {
		$this->getLead()->setGenderPreference($arg0);
	}
	
	/**
	 * Shortcut to set the email
	 * @param string
	 */
	function setEmailId($arg0) {
		$this->getLead()->setEmailId($arg0);
	}
	
	/**
	 * Shortcut to set the email
	 * @param string
	 */
	function setEmail($arg0) {
		$this->getLead()->setEmailId($arg0);
	}
	
	/**
	 * Shortcut to set the mobile number
	 * @param string
	 */
	function setMobileNumber($arg0) {
		$this->getLead()->setMobileNumber($arg0);
	}
	
	/**
	 * Shortcut to set the office number
	 * @param string
	 */
	function setOfficeNumber($arg0) {
		$this->getLead()->setOfficeNumber($arg0);
	}
	
	/**
	 * Shortcut to set the other number
	 * @param string
	 */
	function setOtherNumber($arg0) {
		$this->getLead()->setOtherNumber($arg0);
	}
	
	/**
	 * Shortcut to set the spouse name
	 * @param string
	 */
	function setSpouseName($arg0) {
		$this->getLead()->setSpouseName($arg0);
	}
	
	/**
	 * Shortcut to set the date of birth
	 * @param string
	 */
	function setDateOfBirth($arg0) {
		$this->getLead()->setDateOfBirth($arg0);
	}
	
	/**
	 * Shortcut to set the reason for care
	 * @param string
	 */
	function setReason($arg0) {
		$this->getLead()->setReason($arg0);
	}
	
	/**
	 * Shortcut to set the diet
	 * @param string
	 */
	function setDiet($arg0) {
		$this->getLead()->setDiet($arg0);
	}
	
	/**
	 * Shortcut to set the weight
	 * @param string
	 */
	function setWeight($arg0) {
		$this->getLead()->setWeight($arg0);
	}
	
	/**
	 * Shortcut to set the height
	 * @param string
	 */
	function setHeight($arg0) {
		$this->getLead()->setHeight($arg0);
	}
	
	/**
	 * Shortcut to set the program type
	 * @param string
	 */
	function setProgramTypeId($arg0) {
		$this->getLead()->setProgramTypeId($arg0);
	}
	
	/**
	 * Shortcut to set the adl required
	 * @param string
	 */
	function setAdlRequired($arg0) {
		$this->getLead()->setAdlRequired($arg0);
	}
	
	/**
	 * Shortcut to set the caregiver notes
	 * @param string
	 */
	function setCaregiverNote($arg0) {
		$this->getLead()->setCaregiverNote($arg0);
	}
	
	/**
	 * Shortcut to set the office notes
	 * @param string
	 */
	function setOfficeNote($arg0) {
		$this->getLead()->setOfficeNote($arg0);
	}
	
	/**
	 * Shortcut to set the lead notes
	 * @param string
	 */
	function setLeadNote($arg0) {
		$this->getLead()->setLeadNotes(array($arg0));
	}
	
	/**
	 * Shortcut to set the allergies
	 * @param string
	 */
	function setAllergies($arg0) {
		$this->getLead()->setAllergies($arg0);
	}
	
	/**
	 * Shortcut to set the primary language
	 * @param string
	 */
	function setPrimaryLanguage($arg0) {
		$this->getLead()->setPrimaryLanguage($arg0);
	}
	
	/**
	 * Shortcut to set the company referral information
	 * @param array
	 */
	function setCompanyReferral($arg0) {
		$this->getLead()->setCompanyReferralCompany($arg0);
	}
	
	/**
	 * Returns the AccessToken
	 * @return string
	 */
	function getAccessToken() {
		if (is_null($this->AccessToken)) {
			$this->AccessToken = "";
		}
		return $this->AccessToken;
	}
	
	/**
	 * Sets the AccessToken
	 * @var string
	 * @return LeadApi
	 */
	function setAccessToken($arg0) {
		$this->AccessToken = $arg0;
		$this->addModifiedColumn('AccessToken');
		return $this;
	}
	
	/**
	 * Returns the Lead
	 * @return \Adl\Lead
	 */
	function getLead() {
		if (is_null($this->Lead)) {
			$this->Lead = new Lead();
		}
		return $this->Lead;
	}
	
	/**
	 * Sets the Lead
	 * @var \Adl\Lead
	 * @return LeadApi
	 */
	function setLead($arg0) {
		if (is_array($arg0)) {
			$this->Lead = $this->getLead();
			$this->Lead->populate($arg0);
			$this->addModifiedColumn('Lead');
		}
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLeadId()
	{
		if (is_null($this->LeadId)) {
			$this->LeadId = "";
		}
		return $this->LeadId;
	}

	/**
	 * @param mixed $LeadId
	 * @return LeadApi
	 */
	public function setLeadId($LeadId)
	{
		$this->LeadId = $LeadId;
		$this->addModifiedColumn("LeadId");
		return $this;
	}
	
	/**
	 * Returns the ReturnStatus
	 * @return string
	 */
	function getReturnStatus() {
		if (is_null($this->ReturnStatus)) {
			$this->ReturnStatus = "";
		}
		return $this->ReturnStatus;
	}
	
	/**
	 * Sets the ReturnStatus
	 * @var string
	 * @return LeadApi
	 */
	function setReturnStatus($arg0) {
		$this->ReturnStatus = $arg0;
		$this->addModifiedColumn('ReturnStatus');
		return $this;
	}
	
	/**
	 * Returns the Result
	 * @return boolean
	 */
	function getResult() {
		if (is_null($this->Result)) {
			$this->Result = false;
		}
		return $this->Result;
	}
	
	/**
	 * Sets the Result
	 * @var boolean
	 * @return LeadApi
	 */
	function setResult($arg0) {
		$this->Result = $arg0;
		$this->addModifiedColumn('Result');
		return $this;
	}

	/**
	 * Sends a json request to ADL
	 * @return string
	 */
	function send() {
		$attempts = 0;
		try {
			while ($attempts < self::MAX_ATTEMPTS) {
				if ($this->sendToAdl() === false) {
					$attempts++;
				} else {
					return $this;
				}
				sleep(floor(rand(1, 5)));
			}
			// If we get here, it's because ADL Server is offline
			throw new \Exception('We did not receive confirmation that this client record was transferred to ADLWare.  You can try your request again after checking if your lead is in ADLWare under Client -> Leads -> Lead List');
		} catch (\Exception $e) {
			$this->getErrors()->addError('error', $e->getMessage());
			$this->setReturnStatus($e->getMessage());
			$this->setResult(false);
		}
		return $this;
	}
	
	/**
	 * Sends a json request to ADL
	 * @param $use_staging_url boolean
	 * @return string
	 */
	private function sendToAdl() {
		$data = null;
		$params = array();
		try {
			$url = 'https://my.adlware.com/adlwareiphoneservice/ImportLead.svc/AcceptLeadJSON'; // Live
			
			$lead_data = $this->getLead()->toArray();
			unset($lead_data['id']);
			unset($lead_data['_id']);
			unset($lead_data['created_time']);
			$params = array('AccessToken' => $this->getAccessToken(), 'LeadDataList' => array($lead_data));
			$params = json_encode($params);
						
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json; charset=utf-8"));
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params); // Add the params as the post fields
			
			$data = curl_exec($ch);
						
			if ($data === false) {
				return false;
			} else if (strpos($data, 'Request Error') !== false) {
				throw new \Exception(strip_tags(nl2br(StringTools::getStringBetween($data, '<div id="content">', '</div>'))));
			} else {
				$data_obj = json_decode($data, true);
				if (isset($data_obj['AcceptLeadJsonResult']['ReturnList'][0])) {
					$this->getLead()->populate($data_obj['AcceptLeadJsonResult']['ReturnList'][0]);
					if (isset($data_obj['AcceptLeadJsonResult']['StatusCode']) && $data_obj['AcceptLeadJsonResult']['StatusCode'] == 'OK') {
						// Request was successful
						if (isset($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus'])) {
							if (strpos($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus'], 'Lead saved') !== false) {
								// Try to parse out the new lead id
								$insert_id = intval(substr($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus'], strlen('Lead saved on Id : ')));
								$this->setLeadId($insert_id);
								$this->setReturnStatus($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus']);
								$this->setResult(true);
							} else {
								$this->setReturnStatus($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus']);
								$this->setResult(false);
								throw new \Exception($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus']);
							}
						} else {
							throw new \Exception('Cannot find ReturnStatus field: ' . var_export($data_obj, true));
						}
					} else {
						throw new \Exception('Cannot find StatusCode field in result or StatusCode is not OK');
					}
				} else {
					throw new \Exception('Cannot find ReturnList field in result: ' . var_export($data_obj, true));
				}
			}
		} catch (\Exception $e) {
			LoggerManager::error(__METHOD__ . " :: " . $e->getMessage());
			LoggerManager::error(__METHOD__ . " :: PARAMS: " . $params);
			LoggerManager::error(__METHOD__ . " :: DATA: " . $data);
			
			$this->getErrors()->addError('error', $e->getMessage());
			
			$this->setReturnStatus($e->getMessage());
			$this->setResult(false);
		}
		
		return $this;
	}
	
	
	
	/**
	 * Runs a test to the api server
	 * @return string
	 */
	function test() {
		$lead = new LeadApi();
		$lead->setAccessToken(self::API_TOKEN);
		$lead->getLead()->setFirstname('Mark');
		$lead->getLead()->setLastname('Hobson');
		$lead->getLead()->setSsn('222-222-2222');
		$lead->getLead()->setAddress1('124 Test Street');
		$lead->getLead()->setCity('Los Angeles');
		$lead->getLead()->setState('CA');
		$lead->getLead()->setZipCode('90001');
		$lead->getLead()->setCountry('US');
		$lead->getLead()->setGender('M');
		$lead->getLead()->setGenderPreference('Male');
		$lead->getLead()->setEmailId('mark.e@amadaseniorcare.com');
		$lead->getLead()->setMobileNumber('777-777-7777');
		$lead->getLead()->setOfficeNumber('666-666-6666');
		$lead->getLead()->setMaritalStatus('Single');
		$lead->getLead()->setDateOfBirth('01/03/1982');
		$lead->getLead()->setSpouseName('Joanna');
		$lead->getLead()->setReason('Broken Femur');
		$lead->getLead()->setDiet('Nothing but milky way');
		$lead->getLead()->setWeight('276');
		$lead->getLead()->setHeight('5\'10"');
		$lead->getLead()->setProgramTypeId('HomeCare');
		$lead->getLead()->setAdlRequired('N');
		$lead->getLead()->setOfficeNote('Mark likes long walks on the beach');
		$lead->getLead()->setLeadNotes(array('Mark likes long walks on the beach,Pina Coladas, and getting caught in the rain'));
		return $lead->send();
	}
}

