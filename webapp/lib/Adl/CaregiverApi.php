<?php
namespace Adl;

use Mojavi\Form\MojaviForm;
use Mojavi\Util\StringTools;
use Mojavi\Logging\LoggerManager;

class CaregiverApi extends MojaviForm {

	//const API_TOKEN = '7XiWojv0tEmiS0oEjmoFjoETUlZe0nyieSTBJuY2pzt6dXtFkWNCsRzfBeDTyjY1tQmHRQrqjYffpdjnUwJTrQ==';
	const API_TOKEN = 'b0DudF+10wrIbOqo3prX8sdoIwNlGtmTwsOZgs9Civ5wPVNoL9QR9mhe7pQwzK3hqyCFJpv94Tl4Eq966TfYUA==';

	protected $CaregiverId;
	protected $AccessToken;
	protected $Caregiver;
	protected $ReturnStatus;
	protected $Result;

	/**
	 * Shortcut to set the firstname
	 * @param string
	 */
	function setFirstName($arg0) {
		$this->getCaregiver()->setFirstname($arg0);
	}

	/**
	 * Shortcut to set the lastname
	 * @param string
	 */
	function setLastName($arg0) {
		$this->getCaregiver()->setLastname($arg0);
	}

	/**
	 * Shortcut to set the address
	 * @param string
	 */
	function setAddress($arg0) {
		$this->getCaregiver()->setAddress($arg0);
	}

	/**
	 * Shortcut to set the city
	 * @param string
	 */
	function setCity($arg0) {
		$this->getCaregiver()->setCity($arg0);
	}

	/**
	 * Shortcut to set the state
	 * @param string
	 */
	function setStateId($arg0) {
		$this->getCaregiver()->setState($arg0);
	}

	/**
	 * Shortcut to set the state
	 * @param string
	 */
	function setState($arg0) {
		$this->getCaregiver()->setStateId($arg0);
	}

	/**
	 * Shortcut to set the postal code
	 * @param string
	 */
	function setZipCode($arg0) {
		$this->getCaregiver()->setZipCode($arg0);
	}

	/**
	 * Shortcut to set the country
	 * @param string
	 */
	function setCountryId($arg0) {
		$this->getCaregiver()->setCountryId($arg0);
	}

	/**
	 * Shortcut to set the country
	 * @param string
	 */
	function setCountry($arg0) {
		$this->getCaregiver()->setCountryId($arg0);
	}

	/**
	 * Shortcut to set the gender
	 * @param string
	 */
	function setGender($arg0) {
		$this->getCaregiver()->setGender($arg0);
	}

	/**
	 * Shortcut to set the ssn
	 * @param string
	 */
	function setSsn($arg0) {
		$this->getCaregiver()->setSSN($arg0);
	}

	/**
	 * Shortcut to set the minimum hourly rate
	 * @param string
	 */
	function setMinHourlyRate($arg0) {
		$this->getCaregiver()->setMinHourlyRate($arg0);
	}

	/**
	 * Shortcut to set the email
	 * @param string
	 */
	function setEmailId($arg0) {
		$this->getCaregiver()->setEmailId($arg0);
	}

	/**
	 * Shortcut to set the email
	 * @param string
	 */
	function setEmail($arg0) {
		$this->getCaregiver()->setEmailId($arg0);
	}

	/**
	 * Shortcut to set the mobile number
	 * @param string
	 */
	function setMobileNumber($arg0) {
		$this->getCaregiver()->setMobileNumber($arg0);
	}

	/**
	 * Shortcut to set the work area
	 * @param string
	 */
	function setWorkArea($arg0) {
		$this->getCaregiver()->setWorkArea($arg0);
	}

	/**
	 * Shortcut to set the total experience
	 * @param string
	 */
	function setTotalExperience($arg0) {
		$this->getCaregiver()->setTotalExperience($arg0);
	}

	/**
	 * Shortcut to set the caregiver certifications
	 * @param string
	 */
	function setCaregiverCertifications($arg0) {
		$this->getCaregiver()->setCaregiverCertifications($arg0);
	}

	/**
	 * Shortcut to set the date of birth
	 * @param string
	 */
	function setDateOfBirth($arg0) {
		$this->getCaregiver()->setDateOfBirth($arg0);
	}

	/**
	 * Shortcut to set the caregiver languages
	 * @param string
	 */
	function setCaregiverLanguages($arg0) {
		$this->getCaregiver()->setCaregiverLanguages($arg0);
	}

	/**
	 * Shortcut to set the caregiver specializations
	 * @param string
	 */
	function setCaregiverSpecializations($arg0) {
		$this->getCaregiver()->setCaregiverSpecializations($arg0);
	}

	/**
	 * Shortcut to set the primary language
	 * @param string
	 */
	function setPrimaryLanguageId($arg0) {
		$this->getCaregiver()->setPrimaryLanguageId($arg0);
	}

	/**
	 * Shortcut to set the primary language
	 * @param string
	 */
	function setPrimaryLanguage($arg0) {
		$this->getCaregiver()->setPrimaryLanguageId($arg0);
	}

	/**
	 * Shortcut to set the caregiver notes
	 * @param string
	 */
	function setCaregiverNote($arg0) {
		$this->getCaregiver()->setCaregiverNote($arg0);
	}

	/**
	 * Shortcut to set the status
	 * @param string
	 */
	function setStatusId($arg0) {
		$this->getCaregiver()->setStatusId($arg0);
	}

	/**
	 * Shortcut to set the status
	 * @param string
	 */
	function setStatus($arg0) {
		$this->getCaregiver()->setStatusId($arg0);
	}

	/**
	 * Shortcut to set the source
	 * @param string
	 */
	function setSource($arg0) {
		$this->getCaregiver()->setSource($arg0);
	}

	/**
	 * Returns the AccessToken
	 * @return string
	 */
	function getAccessToken() {
		if (is_null($this->AccessToken)) {
			$this->AccessToken = self::API_TOKEN;
		}
		return $this->AccessToken;
	}

	/**
	 * Sets the AccessToken
	 * @var string
	 * @return CaregiverApi
	 */
	function setAccessToken($arg0) {
		$this->AccessToken = $arg0;
		$this->addModifiedColumn('AccessToken');
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCaregiverId()
	{
		if (is_null($this->CaregiverId)) {
			$this->CaregiverId = $this->getCaregiver()->getCaregiverID();
		}
		return $this->CaregiverId;
	}

	/**
	 * @param mixed $CaregiverId
	 * @return CaregiverApi
	 */
	public function setCaregiverId($CaregiverId)
	{
		$this->CaregiverId = $CaregiverId;
		$this->getCaregiver()->setCaregiverID($CaregiverId);
		$this->addModifiedColumn("CaregiverId");
		return $this;
	}

	/**
	 * Returns the Caregiver
	 * @return \Adl\Caregiver
	 */
	function getCaregiver() {
		if (is_null($this->Caregiver)) {
			$this->Caregiver = new Caregiver();
		}
		return $this->Caregiver;
	}

	/**
	 * Sets the Caregiver
	 * @var \Adl\Caregiver
	 * @return CaregiverApi
	 */
	function setCaregiver($arg0) {
		if (is_array($arg0)) {
			$this->Caregiver = $this->getCaregiver();
			$this->Caregiver->populate($arg0);
			$this->addModifiedColumn('Caregiver');
		}
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
	 * @return CaregiverApi
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
	 * @return CaregiverApi
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
			while ($attempts < 3) {
				if ($this->sendToAdl() === false) {
					$attempts++;
				} else {
					return $this;
				}
				sleep(floor(rand(1, 5)));
			}
			// If we get here, it's because ADL Server is offline
			throw new \Exception('Cannot communicate with ADL Server, please try your request again');
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
			$url = 'https://my.adlware.com/adlwareiphoneservice/CaregiverService.svc/Caregiver'; // Live

			$caregiver = $this->getCaregiver()->toArray();
			unset($caregiver['id']);
			unset($caregiver['_id']);
			unset($caregiver['created_time']);
			$params = array('AccessToken' => $this->getAccessToken(), 'CaregiverPayload' => json_encode($caregiver, true));
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
				if (isset($data_obj['CaregiverResult'])) {
					$this->getCaregiver()->setCaregiverID($data_obj['CaregiverResult']['CaregiverId']);
					if (isset($data_obj['CaregiverResult']['StatusCode'])) {
						if ($data_obj['CaregiverResult']['StatusCode'] == 'OK') {
							// Request was successful
							if (isset($data_obj['CaregiverResult']['CaregiverId'])) {
								// Try to parse out the new lead id
								$insert_id = $data_obj['CaregiverResult']['CaregiverId'];
								$this->setCaregiverId($insert_id);
								$this->setReturnStatus($data_obj['CaregiverResult']['Message']);
								$this->setResult(true);
							} else {
								throw new \Exception('Cannot find CaregiverId field: ' . var_export($data_obj, true));
							}
						} else if (isset($data_obj['CaregiverResult']['Message'])) {
							throw new \Exception($data_obj['CaregiverResult']['Message']);
						} else {
							throw new \Exception('Cannot find StatusCode field in result or StatusCode is not OK');
						}
					} else {
						throw new \Exception('Cannot find StatusCode field in result or StatusCode is not OK');
					}
				} else {
					throw new \Exception('Cannot find CaregiverResult field in result: ' . var_export($data_obj, true));
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
		$caregiver = new CaregiverApi();
		$caregiver->setAccessToken(self::API_TOKEN);
		$caregiver->getCaregiver()->setCaregiverID("");
		$caregiver->getCaregiver()->setFirstName('API Tester');
		$caregiver->getCaregiver()->setLastName('Testerson');
		$caregiver->getCaregiver()->setDateOfBirth('01/01/2000');
		$caregiver->getCaregiver()->setPrimaryLanguageId("");
		$caregiver->getCaregiver()->setStateId('WA');
		$caregiver->getCaregiver()->setCountryId('1'); // 1 is US, 2 is Canada
		$caregiver->getCaregiver()->setStatusId("0 - Applicant"); // 10004
		$caregiver->getCaregiver()->setAlphabetName('T');
		$caregiver->getCaregiver()->setGender(10128);
		$caregiver->getCaregiver()->setAddress('test');
		$caregiver->getCaregiver()->setSSN('000-00-0000');
		$caregiver->getCaregiver()->setEmailId('testing999@test.com');
		$caregiver->getCaregiver()->setMobileNumber('9898989896');
		$caregiver->getCaregiver()->setCity('Chicago');
		$caregiver->getCaregiver()->setZipCode('60610');
		$caregiver->getCaregiver()->setMinHourlyRate("");
		$caregiver->getCaregiver()->setTotalExperience('1 years');
		$caregiver->getCaregiver()->setCreatedBy("APITest");
		$caregiver->getCaregiver()->setCaregiverSpecializations('No Specializations');
		$caregiver->getCaregiver()->setCaregiverLanguages("English");
		$caregiver->getCaregiver()->setCaregiverNote("");
		$caregiver->getCaregiver()->setCaregiverCertifications('None');
		$caregiver->getCaregiver()->setWorkArea("");
		$caregiver->getCaregiver()->setSource("Unbounce Application");
		return $caregiver->send();
	}
}