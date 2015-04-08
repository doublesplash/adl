<?php
namespace Adl;

use Mojavi\Form\CommonForm;

class Lead extends CommonForm {
	
	//const API_TOKEN = '786KQJIGpphLrjcp7EzVEWuCLpdRLTwnQRm0u8Ru3JUsQoeZS4WJbXh0XMO3rGHYKDwiE5IZz5qVokXcJJEDUSaA==';
	const API_TOKEN = '7XiWojv0tEmiS0oEjmoFjoETUlZe0nyieSTBJuY2pzt6dXtFkWNCsRzfBeDTyjY1tQmHRQrqjYffpdjnUwJTrQ==';
	
	protected $AccessToken;
	protected $LeadDataList;
	protected $ReturnStatus;
	protected $Result;
	
	/**
	 * Shortcut to set the firstname
	 * @param string
	 */
	function setFirstname($arg0) {
		$this->getLeadDataList()->setFirstname($arg0);
	}
	
	/**
	 * Shortcut to set the lastname
	 * @param string
	 */
	function setLastname($arg0) {
		$this->getLeadDataList()->setLastname($arg0);
	}
	
	/**
	 * Shortcut to set the address
	 * @param string
	 */
	function setAddress($arg0) {
		$this->getLeadDataList()->setAddress1($arg0);
	}
	
	/**
	 * Shortcut to set the address2
	 * @param string
	 */
	function setAddress2($arg0) {
		$this->getLeadDataList()->setAddress2($arg0);
	}
	
	/**
	 * Shortcut to set the city
	 * @param string
	 */
	function setCity($arg0) {
		$this->getLeadDataList()->setCity($arg0);
	}
	
	/**
	 * Shortcut to set the state
	 * @param string
	 */
	function setState($arg0) {
		$this->getLeadDataList()->setState($arg0);
	}
	
	/**
	 * Shortcut to set the postal code
	 * @param string
	 */
	function setZipcode($arg0) {
		$this->getLeadDataList()->setZipcode($arg0);
	}
	
	/**
	 * Shortcut to set the country
	 * @param string
	 */
	function setCountry($arg0) {
		$this->getLeadDataList()->setCountry($arg0);
	}
	
	/**
	 * Shortcut to set the gender
	 * @param string
	 */
	function setGender($arg0) {
		$this->getLeadDataList()->setGender($arg0);
	}
	
	/**
	 * Shortcut to set the marital status
	 * @param string
	 */
	function setMaritalStatus($arg0) {
		$this->getLeadDataList()->setMaritalStatus($arg0);
	}
	
	/**
	 * Shortcut to set the gender preference
	 * @param string
	 */
	function setGenderPreference($arg0) {
		$this->getLeadDataList()->setGenderPreference($arg0);
	}
	
	/**
	 * Shortcut to set the email
	 * @param string
	 */
	function setEmailId($arg0) {
		$this->getLeadDataList()->setEmailId($arg0);
	}
	
	/**
	 * Shortcut to set the email
	 * @param string
	 */
	function setEmail($arg0) {
		$this->getLeadDataList()->setEmailId($arg0);
	}
	
	/**
	 * Shortcut to set the mobile number
	 * @param string
	 */
	function setMobileNumber($arg0) {
		$this->getLeadDataList()->setMobileNumber($arg0);
	}
	
	/**
	 * Shortcut to set the office number
	 * @param string
	 */
	function setOfficeNumber($arg0) {
		$this->getLeadDataList()->setOfficeNumber($arg0);
	}
	
	/**
	 * Shortcut to set the other number
	 * @param string
	 */
	function setOtherNumber($arg0) {
		$this->getLeadDataList()->setOtherNumber($arg0);
	}
	
	/**
	 * Shortcut to set the spouse name
	 * @param string
	 */
	function setSpouseName($arg0) {
		$this->getLeadDataList()->setSpouseName($arg0);
	}
	
	/**
	 * Shortcut to set the date of birth
	 * @param string
	 */
	function setDateOfBirth($arg0) {
		$this->getLeadDataList()->setDateOfBirth($arg0);
	}
	
	/**
	 * Shortcut to set the reason for care
	 * @param string
	 */
	function setReason($arg0) {
		$this->getLeadDataList()->setReason($arg0);
	}
	
	/**
	 * Shortcut to set the diet
	 * @param string
	 */
	function setDiet($arg0) {
		$this->getLeadDataList()->setDiet($arg0);
	}
	
	/**
	 * Shortcut to set the weight
	 * @param string
	 */
	function setWeight($arg0) {
		$this->getLeadDataList()->setWeight($arg0);
	}
	
	/**
	 * Shortcut to set the height
	 * @param string
	 */
	function setHeight($arg0) {
		$this->getLeadDataList()->setHeight($arg0);
	}
	
	/**
	 * Shortcut to set the program type
	 * @param string
	 */
	function setProgramTypeId($arg0) {
		$this->getLeadDataList()->setProgramTypeId($arg0);
	}
	
	/**
	 * Shortcut to set the adl required
	 * @param string
	 */
	function setAdlRequired($arg0) {
		$this->getLeadDataList()->setAdlRequired($arg0);
	}
	
	/**
	 * Shortcut to set the caregiver notes
	 * @param string
	 */
	function setCaregiverNote($arg0) {
		$this->getLeadDataList()->setCaregiverNote($arg0);
	}
	
	/**
	 * Shortcut to set the office notes
	 * @param string
	 */
	function setOfficeNote($arg0) {
		$this->getLeadDataList()->setOfficeNote($arg0);
	}
	
	/**
	 * Shortcut to set the lead notes
	 * @param string
	 */
	function setLeadNote($arg0) {
		$this->getLeadDataList()->setLeadNotes(array($arg0));
	}
	
	/**
	 * Shortcut to set the allergies
	 * @param string
	 */
	function setAllergies($arg0) {
		$this->getLeadDataList()->setAllergies($arg0);
	}
	
	/**
	 * Shortcut to set the primary language
	 * @param string
	 */
	function setPrimaryLanguage($arg0) {
		$this->getLeadDataList()->setPrimaryLanguage($arg0);
	}
	
	/**
	 * Shortcut to set the company referral information
	 * @param array
	 */
	function setCompanyReferral($arg0) {
		$this->getLeadDataList()->setCompanyReferral($arg0);
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
	 */
	function setAccessToken($arg0) {
		$this->AccessToken = $arg0;
		$this->addModifiedColumn('AccessToken');
		return $this;
	}
	
	/**
	 * Returns the LeadDataList
	 * @return \Adl\LeadDataList
	 */
	function getLeadDataList() {
		if (is_null($this->LeadDataList)) {
			$this->LeadDataList = new \Adl\LeadDataList();
		}
		return $this->LeadDataList;
	}
	
	/**
	 * Sets the LeadDataList
	 * @var Adl\LeadDataList
	 */
	function setLeadDataList($arg0) {
		if (is_array($arg0)) {
			$this->LeadDataList = $this->getLeadDataList();
			$this->LeadDataList->populate($arg0);
			$this->addModifiedColumn('LeadDataList');
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
	function send($use_staging_url = false) {
		try {
			if ($use_staging_url) {
				#$url = 'https://app.adlware.com/adlwareiphoneservice/ImportLead.svc/AcceptLeadJSON'; // Staging
				$url = 'https://adl-staging.kinnser.net/adlwareiphoneservice/ImportLead.svc/AcceptLeadJSON'; // Staging
			} else {
				$url = 'https://my.adlware.com/adlwareiphoneservice/ImportLead.svc/AcceptLeadJSON'; // Live
			}
			
			
			$lead_data = $this->getLeadDataList()->toArray();
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
				throw new \Exception('Cannot communicate with ADL Server, please try your request again');
			} else if (strpos($data, 'Request Error') !== false) {
				throw new \Exception(strip_tags(nl2br(\Mojavi\Util\StringTools::getStringBetween($data, '<div id="content">', '</div>'))));
			} else {
				$data_obj = json_decode($data, true);
				if (isset($data_obj['AcceptLeadJsonResult']['ReturnList'][0])) {
					$this->getLeadDataList()->populate($data_obj['AcceptLeadJsonResult']['ReturnList'][0]);
					if (isset($data_obj['AcceptLeadJsonResult']['StatusCode']) && $data_obj['AcceptLeadJsonResult']['StatusCode'] == 'OK') {
						// Request was successful
						if (isset($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus'])) {
							if (strpos($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus'], 'Lead saved') !== false) {
								// Try to parse out the new lead id
								$insert_id = intval(substr($data_obj['AcceptLeadJsonResult']['ReturnList'][0]['ReturnStatus'], strlen('Lead saved on Id : ')));
								$this->setId($insert_id);
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
			\Mojavi\Logging\LoggerManager::error(__METHOD__ . " :: " . $e->getMessage());
			\Mojavi\Logging\LoggerManager::error(__METHOD__ . " :: PARAMS: " . $params);
			\Mojavi\Logging\LoggerManager::error(__METHOD__ . " :: DATA: " . $data);
			
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
		$lead = new \Adl\Lead();
		$lead->setAccessToken(self::API_TOKEN);
		$lead->getLeadDataList()->setFirstName('Mark');
		$lead->getLeadDataList()->setLastName('Hobson');
		$lead->getLeadDataList()->setSsn('222-222-2222');
		$lead->getLeadDataList()->setAddress1('124 Test Street');
		$lead->getLeadDataList()->setCity('Los Angeles');
		$lead->getLeadDataList()->setState('CA');
		$lead->getLeadDataList()->setZipCode('90001');
		$lead->getLeadDataList()->setCountry('US');
		$lead->getLeadDataList()->setGender('M');
		$lead->getLeadDataList()->setGenderPreference('Male');
		$lead->getLeadDataList()->setEmailId('mark.e@amadaseniorcare.com');
		$lead->getLeadDataList()->setMobileNumber('777-777-7777');
		$lead->getLeadDataList()->setOfficeNumber('666-666-6666');
		$lead->getLeadDataList()->setMaritalStatus('Single');
		$lead->getLeadDataList()->setDateOfBirth('01/03/1982');
		$lead->getLeadDataList()->setSpouseName('Joanna');
		$lead->getLeadDataList()->setReason('Broken Femur');
		$lead->getLeadDataList()->setDiet('Nothing but milky way');
		$lead->getLeadDataList()->setWeight('276');
		$lead->getLeadDataList()->setHeight('5\'10"');
		$lead->getLeadDataList()->setProgramTypeId('HomeCare');
		$lead->getLeadDataList()->setAdlRequired('N');
		$lead->getLeadDataList()->setOfficeNote('Mark likes long walks on the beach');
		$lead->getLeadDataList()->setLeadNotes(array('Mark likes long walks on the beach,Pina Coladas, and getting caught in the rain'));
		return $lead->send();
	}
}

/**
 * Stores lead data
 * @author hobby
 */
class LeadDataList extends CommonForm {
	
	protected $FirstName;
	protected $LastName;
	protected $Gender;
	protected $MaritalStatusDesc;
	protected $PrimaryLanguageDesc = "English";
	protected $DateOfBirth;
	protected $SpouseName;
	protected $SSN;
	protected $Address1;
	protected $Address2;
	protected $City;
	protected $StateDesc;
	protected $ZipCode;
	protected $Country;
	protected $MobileNumber;
	protected $OfficeNumber;
	protected $OtherNumber;
	protected $Fax;
	protected $EmailId;
	protected $Reason;
	protected $GenderPreferenceDesc = "No Preference";
	protected $Diet;
	protected $CaregiverNote;
	protected $ADLRequired;
	protected $Allergies;
	protected $Height;
	protected $Weight;
	protected $OfficeNote;
	protected $IsFollowUp;
	protected $FollowUpDays;
	protected $FollowUp;
	protected $EmergencyNote;
	protected $ProgramTypeIdDesc = "HomeCare";
	protected $LeadNotes;
	protected $CompanyReferralCompany;
	
	/**
	 * Returns the FirstName
	 * @return string
	 */
	function getFirstname() {
		if (is_null($this->FirstName)) {
			$this->FirstName = "";
		}
		return $this->FirstName;
	}
	
	/**
	 * Sets the FirstName
	 * @var string
	 */
	function setFirstname($arg0) {
		$this->FirstName = $arg0;
		$this->addModifiedColumn('FirstName');
		return $this;
	}
	
	/**
	 * Returns the LastName
	 * @return string
	 */
	function getLastname() {
		if (is_null($this->LastName)) {
			$this->LastName = "";
		}
		return $this->LastName;
	}
	
	/**
	 * Sets the LastName
	 * @var string
	 */
	function setLastname($arg0) {
		$this->LastName = $arg0;
		$this->addModifiedColumn('LastName');
		return $this;
	}
	
	/**
	 * Returns the Gender
	 * M - Male
	 * F - Female
	 * @return string
	 */
	function getGender() {
		if (is_null($this->Gender)) {
			$this->Gender = "M";
		}
		return $this->Gender;
	}
	
	/**
	 * Sets the Gender
	 * @var string
	 */
	function setGender($arg0) {
		$this->Gender = $arg0;
		$this->addModifiedColumn('Gender');
		return $this;
	}
	
	/**
	 * Returns the MaritalStatusDesc
	 * Single
	 * Married
	 * Widowed
	 * Divorced
	 * Partner
	 * Separated
	 * @return string
	 */
	function getMaritalStatus() {
		if (is_null($this->MaritalStatusDesc)) {
			$this->MaritalStatusDesc = "Married";
		}
		return $this->MaritalStatusDesc;
	}
	
	/**
	 * Sets the MaritalStatusDesc
	 * @var string
	 */
	function setMaritalStatus($arg0) {
		$this->MaritalStatusDesc = $arg0;
		$this->addModifiedColumn('MaritalStatusDesc');
		return $this;
	}
	
	/**
	 * Returns the PrimaryLanguageDesc
	 * @return string
	 */
	function getPrimaryLanguage() {
		if (is_null($this->PrimaryLanguageDesc)) {
			$this->PrimaryLanguageDesc = "English";
		}
		return $this->PrimaryLanguageDesc;
	}
	
	/**
	 * Sets the PrimaryLanguageDesc
	 * @var string
	 */
	function setPrimaryLanguage($arg0) {
		$this->PrimaryLanguageDesc = $arg0;
		$this->addModifiedColumn('PrimaryLanguageDesc');
		return $this;
	}
	
	/**
	 * Returns the DateOfBirth
	 * @return string
	 */
	function getDateOfBirth() {
		if (is_null($this->DateOfBirth)) {
			$this->DateOfBirth = date('m-d-Y');
		}
		return $this->DateOfBirth;
	}
	
	/**
	 * Sets the DateOfBirth
	 * @var string
	 */
	function setDateOfBirth($arg0) {
		if (is_string($arg0)) {
			$this->DateOfBirth = date('m-d-Y', strtotime($arg0));
		}
		$this->addModifiedColumn('DateOfBirth');
		return $this;
	}
	
	/**
	 * Returns the SpouseName
	 * @return string
	 */
	function getSpouseName() {
		if (is_null($this->SpouseName)) {
			$this->SpouseName = "";
		}
		return $this->SpouseName;
	}
	
	/**
	 * Sets the SpouseName
	 * @var string
	 */
	function setSpouseName($arg0) {
		$this->SpouseName = $arg0;
		$this->addModifiedColumn('SpouseName');
		return $this;
	}
	
	/**
	 * Returns the SSN
	 * @return string
	 */
	function getSsn() {
		if (is_null($this->SSN)) {
			$this->SSN = "";
		}
		return $this->SSN;
	}
	
	/**
	 * Sets the SSN
	 * @var string
	 */
	function setSsn($arg0) {
		$this->SSN = $arg0;
		$this->addModifiedColumn('SSN');
		return $this;
	}
	
	/**
	 * Returns the Address1
	 * @return string
	 */
	function getAddress1() {
		if (is_null($this->Address1)) {
			$this->Address1 = "";
		}
		return $this->Address1;
	}
	
	/**
	 * Sets the Address1
	 * @var string
	 */
	function setAddress1($arg0) {
		$this->Address1 = $arg0;
		$this->addModifiedColumn('Address1');
		return $this;
	}
	
	/**
	 * Returns the Address2
	 * @return string
	 */
	function getAddress2() {
		if (is_null($this->Address2)) {
			$this->Address2 = "";
		}
		return $this->Address2;
	}
	
	/**
	 * Sets the Address2
	 * @var string
	 */
	function setAddress2($arg0) {
		$this->Address2 = $arg0;
		$this->addModifiedColumn('Address2');
		return $this;
	}
	
	/**
	 * Returns the City
	 * @return string
	 */
	function getCity() {
		if (is_null($this->City)) {
			$this->City = "";
		}
		return $this->City;
	}
	
	/**
	 * Sets the City
	 * @var string
	 */
	function setCity($arg0) {
		$this->City = $arg0;
		$this->addModifiedColumn('City');
		return $this;
	}
	
	/**
	 * Returns the StateDesc
	 * @return string
	 */
	function getState() {
		if (is_null($this->StateDesc)) {
			$this->StateDesc = "";
		}
		return $this->StateDesc;
	}
	
	/**
	 * Sets the StateDesc
	 * @var string
	 */
	function setState($arg0) {
		$this->StateDesc = $arg0;
		$this->addModifiedColumn('StateDesc');
		return $this;
	}
	
	/**
	 * Returns the ZipCode
	 * @return string
	 */
	function getZipCode() {
		if (is_null($this->ZipCode)) {
			$this->ZipCode = "";
		}
		return $this->ZipCode;
	}
	
	/**
	 * Sets the ZipCode
	 * @var string
	 */
	function setZipCode($arg0) {
		$this->ZipCode = $arg0;
		$this->addModifiedColumn('ZipCode');
		return $this;
	}
	
	/**
	 * Returns the Country
	 * @return string
	 */
	function getCountry() {
		if (is_null($this->Country)) {
			$this->Country = "US";
		}
		return $this->Country;
	}
	
	/**
	 * Sets the Country
	 * @var string
	 */
	function setCountry($arg0) {
		$this->Country = $arg0;
		$this->addModifiedColumn('Country');
		return $this;
	}
	
	/**
	 * Returns the MobileNumber
	 * @return string
	 */
	function getMobileNumber() {
		if (is_null($this->MobileNumber)) {
			$this->MobileNumber = "";
		}
		return $this->MobileNumber;
	}
	
	/**
	 * Sets the MobileNumber
	 * @var string
	 */
	function setMobileNumber($arg0) {
		$this->MobileNumber = $arg0;
		$this->addModifiedColumn('MobileNumber');
		return $this;
	}
	
	/**
	 * Returns the OfficeNumber
	 * @return string
	 */
	function getOfficeNumber() {
		if (is_null($this->OfficeNumber)) {
			$this->OfficeNumber = "";
		}
		return $this->OfficeNumber;
	}
	
	/**
	 * Sets the OfficeNumber
	 * @var string
	 */
	function setOfficeNumber($arg0) {
		$this->OfficeNumber = $arg0;
		$this->addModifiedColumn('OfficeNumber');
		return $this;
	}
	
	/**
	 * Returns the OtherNumber
	 * @return string
	 */
	function getOtherNumber() {
		if (is_null($this->OtherNumber)) {
			$this->OtherNumber = "";
		}
		return $this->OtherNumber;
	}
	
	/**
	 * Sets the OtherNumber
	 * @var string
	 */
	function setOtherNumber($arg0) {
		$this->OtherNumber = $arg0;
		$this->addModifiedColumn('OtherNumber');
		return $this;
	}
	
	/**
	 * Returns the Fax
	 * @return string
	 */
	function getFax() {
		if (is_null($this->Fax)) {
			$this->Fax = "";
		}
		return $this->Fax;
	}
	
	/**
	 * Sets the Fax
	 * @var string
	 */
	function setFax($arg0) {
		$this->Fax = $arg0;
		$this->addModifiedColumn('Fax');
		return $this;
	}
	
	/**
	 * Returns the EmailId
	 * @return string
	 */
	function getEmailId() {
		if (is_null($this->EmailId)) {
			$this->EmailId = "";
		}
		return $this->EmailId;
	}
	
	/**
	 * Sets the EmailId
	 * @var string
	 */
	function setEmailId($arg0) {
		$this->EmailId = $arg0;
		$this->addModifiedColumn('EmailId');
		return $this;
	}
	
	/**
	 * Returns the Reason
	 * @return string
	 */
	function getReason() {
		if (is_null($this->Reason)) {
			$this->Reason = "";
		}
		return $this->Reason;
	}
	
	/**
	 * Sets the Reason
	 * @var string
	 */
	function setReason($arg0) {
		$this->Reason = $arg0;
		$this->addModifiedColumn('Reason');
		return $this;
	}
	
	/**
	 * Returns the GenderPreferenceDesc
	 * No Preference
	 * Male
	 * Female
	 * @return string
	 */
	function getGenderPreference() {
		if (is_null($this->GenderPreferenceDesc)) {
			$this->GenderPreferenceDesc = "No Preference";
		}
		return $this->GenderPreferenceDesc;
	}
	
	/**
	 * Sets the GenderPreferenceDesc
	 * @var string
	 */
	function setGenderPreference($arg0) {
		$this->GenderPreferenceDesc = $arg0;
		$this->addModifiedColumn('GenderPreferenceDesc');
		return $this;
	}
	
	/**
	 * Returns the Diet
	 * @return string
	 */
	function getDiet() {
		if (is_null($this->Diet)) {
			$this->Diet = "";
		}
		return $this->Diet;
	}
	
	/**
	 * Sets the Diet
	 * @var string
	 */
	function setDiet($arg0) {
		$this->Diet = $arg0;
		$this->addModifiedColumn('Diet');
		return $this;
	}
	
	/**
	 * Returns the CaregiverNote
	 * @return string
	 */
	function getCaregiverNote() {
		if (is_null($this->CaregiverNote)) {
			$this->CaregiverNote = "";
		}
		return $this->CaregiverNote;
	}
	
	/**
	 * Sets the CaregiverNote
	 * @var string
	 */
	function setCaregiverNote($arg0) {
		$this->CaregiverNote = $arg0;
		$this->addModifiedColumn('CaregiverNote');
		return $this;
	}
	
	/**
	 * Returns the ADLRequired
	 * @return string
	 */
	function getAdlRequired() {
		if (is_null($this->ADLRequired)) {
			$this->ADLRequired = "N";
		}
		return $this->ADLRequired;
	}
	
	/**
	 * Sets the ADLRequired
	 * @var string
	 */
	function setAdlRequired($arg0) {
		$this->ADLRequired = $arg0;
		$this->addModifiedColumn('ADLRequired');
		return $this;
	}
	
	/**
	 * Returns the Allergies
	 * @return string
	 */
	function getAllergies() {
		if (is_null($this->Allergies)) {
			$this->Allergies = "";
		}
		return $this->Allergies;
	}
	
	/**
	 * Sets the Allergies
	 * @var string
	 */
	function setAllergies($arg0) {
		$this->Allergies = $arg0;
		$this->addModifiedColumn('Allergies');
		return $this;
	}
	
	/**
	 * Returns the Height
	 * @return string
	 */
	function getHeight() {
		if (is_null($this->Height)) {
			$this->Height = "";
		}
		return $this->Height;
	}
	
	/**
	 * Sets the Height
	 * @var string
	 */
	function setHeight($arg0) {
		$this->Height = $arg0;
		$this->addModifiedColumn('Height');
		return $this;
	}
	
	/**
	 * Returns the Weight
	 * @return string
	 */
	function getWeight() {
		if (is_null($this->Weight)) {
			$this->Weight = "";
		}
		return $this->Weight;
	}
	
	/**
	 * Sets the Weight
	 * @var string
	 */
	function setWeight($arg0) {
		$this->Weight = $arg0;
		$this->addModifiedColumn('Weight');
		return $this;
	}
	
	/**
	 * Returns the OfficeNote
	 * @return string
	 */
	function getOfficeNote() {
		if (is_null($this->OfficeNote)) {
			$this->OfficeNote = "";
		}
		return $this->OfficeNote;
	}
	
	/**
	 * Sets the OfficeNote
	 * @var string
	 */
	function setOfficeNote($arg0) {
		$this->OfficeNote = $arg0;
		$this->addModifiedColumn('OfficeNote');
		return $this;
	}
	
	/**
	 * Returns the IsFollowUp
	 * @return string
	 */
	function getIsFollowUp() {
		if (is_null($this->IsFollowUp)) {
			$this->IsFollowUp = "N";
		}
		return $this->IsFollowUp;
	}
	
	/**
	 * Sets the IsFollowUp
	 * @var string
	 */
	function setIsFollowUp($arg0) {
		$this->IsFollowUp = $arg0;
		$this->addModifiedColumn('IsFollowUp');
		return $this;
	}
	
	/**
	 * Returns the FollowUpDays
	 * @return integer
	 */
	function getFollowUpDays() {
		if (is_null($this->FollowUpDays)) {
			$this->FollowUpDays = 0;
		}
		return $this->FollowUpDays;
	}
	
	/**
	 * Sets the FollowUpDays
	 * @var integer
	 */
	function setFollowUpDays($arg0) {
		$this->FollowUpDays = (int)$arg0;
		$this->addModifiedColumn('FollowUpDays');
		return $this;
	}
	
	/**
	 * Returns the FollowUp
	 * @return string
	 */
	function getFollowUp() {
		if (is_null($this->FollowUp)) {
			$this->FollowUp = "";
		}
		return $this->FollowUp;
	}
	
	/**
	 * Sets the FollowUp
	 * @var string
	 */
	function setFollowUp($arg0) {
		$this->FollowUp = $arg0;
		$this->addModifiedColumn('FollowUp');
		return $this;
	}
	
	/**
	 * Returns the EmergencyNote
	 * @return string
	 */
	function getEmergencyNote() {
		if (is_null($this->EmergencyNote)) {
			$this->EmergencyNote = "";
		}
		return $this->EmergencyNote;
	}
	
	/**
	 * Sets the EmergencyNote
	 * @var string
	 */
	function setEmergencyNote($arg0) {
		$this->EmergencyNote = $arg0;
		$this->addModifiedColumn('EmergencyNote');
		return $this;
	}
	
	/**
	 * Returns the ProgramTypeIdDesc
	 * @return string
	 */
	function getProgramTypeId() {
		if (is_null($this->ProgramTypeIdDesc)) {
			$this->ProgramTypeIdDesc = "HomeCare";
		}
		return $this->ProgramTypeIdDesc;
	}
	
	/**
	 * Sets the ProgramTypeIdDesc
	 * HomeCare
	 * TakeCare
	 * @var string
	 */
	function setProgramTypeId($arg0) {
		$this->ProgramTypeIdDesc = $arg0;
		$this->addModifiedColumn('ProgramTypeIdDesc');
		return $this;
	}
	
	/**
	 * Returns the LeadNotes
	 * @return string
	 */
	function getLeadNotes() {
		if (is_null($this->LeadNotes)) {
			$this->LeadNotes = "";
		}
		return $this->LeadNotes;
	}
	
	/**
	 * Sets the LeadNotes
	 * @var string
	 */
	function setLeadNotes($arg0) {
		$this->LeadNotes = $arg0;
		$this->addModifiedColumn('LeadNotes');
		return $this;
	}
	
	/**
	 * Returns the CompanyReferralCompany
	 * @return CompanyReferral
	 */
	function getCompanyReferralCompany() {
		if (is_null($this->CompanyReferralCompany)) {
			$this->CompanyReferralCompany = null;
		}
		return $this->CompanyReferralCompany;
	}
	
	/**
	 * Sets the CompanyReferralCompany
	 * @var CompanyReferral
	 */
	function setCompanyReferralCompany($arg0) {
		if (is_array($arg0)) {
			$this->CompanyReferralCompany = $this->getCompanyReferralCompany();
			if (is_null($this->CompanyReferralCompany)) {
				$this->CompanyReferralCompany = new \Adl\CompanyReferral();
			}
			$this->CompanyReferralCompany->populate($arg0);
			$this->addModifiedColumn('CompanyReferralCompany');
		}
		return $this;
	}
}

/**
 * CompanyReferral stores referral information
 * @author hobby
 *
 */
class CompanyReferral extends CommonForm {
	
	protected $referral_company_name;
	protected $Address1;
	protected $City;
	protected $StateDesc;
	protected $Country;
	protected $ZipCode;
	protected $OfficeNumber;
	protected $MobileNumber;
	protected $OtherNumber;
	protected $Fax;
	protected $email_address;
	protected $website;
	protected $Reason;
	
	/**
	 * Returns the referral_company_name
	 * @return string
	 */
	function getReferralCompanyName() {
		if (is_null($this->referral_company_name)) {
			$this->referral_company_name = "Amada";
		}
		return $this->referral_company_name;
	}
	
	/**
	 * Sets the referral_company_name
	 * @var string
	 */
	function setReferralCompanyName($arg0) {
		$this->referral_company_name = $arg0;
		$this->addModifiedColumn('referral_company_name');
		return $this;
	}
	
	/**
	 * Returns the Address1
	 * @return string
	 */
	function getAddress1() {
		if (is_null($this->Address1)) {
			$this->Address1 = "901 Calle Amanecer";
		}
		return $this->Address1;
	}
	
	/**
	 * Sets the Address1
	 * @var string
	 */
	function setAddress1($arg0) {
		$this->Address1 = $arg0;
		$this->addModifiedColumn('Address1');
		return $this;
	}
	
	/**
	 * Returns the City
	 * @return string
	 */
	function getCity() {
		if (is_null($this->City)) {
			$this->City = "San Clemente";
		}
		return $this->City;
	}
	
	/**
	 * Sets the City
	 * @var string
	 */
	function setCity($arg0) {
		$this->City = $arg0;
		$this->addModifiedColumn('City');
		return $this;
	}
	
	/**
	 * Returns the StateDesc
	 * @return string
	 */
	function getState() {
		if (is_null($this->StateDesc)) {
			$this->StateDesc = "CA";
		}
		return $this->StateDesc;
	}
	
	/**
	 * Sets the StateDesc
	 * @var string
	 */
	function setState($arg0) {
		$this->StateDesc = $arg0;
		$this->addModifiedColumn('StateDesc');
		return $this;
	}
	
	/**
	 * Returns the ZipCode
	 * @return string
	 */
	function getZipCode() {
		if (is_null($this->ZipCode)) {
			$this->ZipCode = "92673";
		}
		return $this->ZipCode;
	}
	
	/**
	 * Sets the ZipCode
	 * @var string
	 */
	function setZipCode($arg0) {
		$this->ZipCode = $arg0;
		$this->addModifiedColumn('ZipCode');
		return $this;
	}
	
	/**
	 * Returns the Country
	 * @return string
	 */
	function getCountry() {
		if (is_null($this->Country)) {
			$this->Country = "US";
		}
		return $this->Country;
	}
	
	/**
	 * Sets the Country
	 * @var string
	 */
	function setCountry($arg0) {
		$this->Country = $arg0;
		$this->addModifiedColumn('Country');
		return $this;
	}
	
	/**
	 * Returns the OfficeNumber
	 * @return string
	 */
	function getOfficeNumber() {
		if (is_null($this->OfficeNumber)) {
			$this->OfficeNumber = "(877) 442-6232";
		}
		return $this->OfficeNumber;
	}
	
	/**
	 * Sets the OfficeNumber
	 * @var string
	 */
	function setOfficeNumber($arg0) {
		$this->OfficeNumber = $arg0;
		$this->addModifiedColumn('OfficeNumber');
		return $this;
	}
	
	/**
	 * Returns the MobileNumber
	 * @return string
	 */
	function getMobileNumber() {
		if (is_null($this->MobileNumber)) {
			$this->MobileNumber = "";
		}
		return $this->MobileNumber;
	}
	
	/**
	 * Sets the MobileNumber
	 * @var string
	 */
	function setMobileNumber($arg0) {
		$this->MobileNumber = $arg0;
		$this->addModifiedColumn('MobileNumber');
		return $this;
	}
	
	/**
	 * Returns the OtherNumber
	 * @return string
	 */
	function getOtherNumber() {
		if (is_null($this->OtherNumber)) {
			$this->OtherNumber = "";
		}
		return $this->OtherNumber;
	}
	
	/**
	 * Sets the OtherNumber
	 * @var string
	 */
	function setOtherNumber($arg0) {
		$this->OtherNumber = $arg0;
		$this->addModifiedColumn('OtherNumber');
		return $this;
	}
	
	/**
	 * Returns the Fax
	 * @return string
	 */
	function getFax() {
		if (is_null($this->Fax)) {
			$this->Fax = "";
		}
		return $this->Fax;
	}
	
	/**
	 * Sets the Fax
	 * @var string
	 */
	function setFax($arg0) {
		$this->Fax = $arg0;
		$this->addModifiedColumn('Fax');
		return $this;
	}
	
	/**
	 * Returns the email_address
	 * @return string
	 */
	function getEmailAddress() {
		if (is_null($this->email_address)) {
			$this->email_address = "jeremy.b@amadaseniorcare.com";
		}
		return $this->email_address;
	}
	
	/**
	 * Sets the email_address
	 * @var string
	 */
	function setEmailAddress($arg0) {
		$this->email_address = $arg0;
		$this->addModifiedColumn('email_address');
		return $this;
	}
	
	/**
	 * Returns the website
	 * @return string
	 */
	function getWebsite() {
		if (is_null($this->website)) {
			$this->website = "http://www.amadaseniorcare.com";
		}
		return $this->website;
	}
	
	/**
	 * Sets the website
	 * @var string
	 */
	function setWebsite($arg0) {
		$this->website = $arg0;
		$this->addModifiedColumn('website');
		return $this;
	}
	
	/**
	 * Returns the Reason
	 * @return string
	 */
	function getReason() {
		if (is_null($this->Reason)) {
			$this->Reason = "";
		}
		return $this->Reason;
	}
	
	/**
	 * Sets the Reason
	 * @var string
	 */
	function setReason($arg0) {
		$this->Reason = $arg0;
		$this->addModifiedColumn('Reason');
		return $this;
	}	
}