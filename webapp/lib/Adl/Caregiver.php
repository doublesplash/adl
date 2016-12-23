<?php
namespace Adl;

use Mojavi\Form\CommonForm;
/**
 * Stores caregiver data
 * @author hobby
 */
class Caregiver extends CommonForm {

	const STATUS_ACTIVE = 10004;
	const STATUS_DISQUALIFIED = 10324;
	const STATUS_INACTIVE = 10005;
	const STATUS_ON_DISABILITY = 10388;
	const STATUS_ON_LEAVE = 10387;
	const STATUS_PROSPECT = 10345;
	const STATUS_QUIT = 10381;
	const STATUS_SUSPENDED = 10006;
	const STATUS_TERMINATED = 10268;

	const GENDER_MALE = 10127;
	const GENDER_FEMALE = 10128;
	const GENDER_NO_PREFERENCE = 10271;

	const COUNTRY_US = 1;
	const COUNTRY_CANADA = 2;

	protected $CaregiverID;
	protected $FirstName;
	protected $LastName;
	protected $DateOfBirth;
	protected $PrimaryLanguageId;
	protected $StateId;
	protected $CountryId;
	protected $StatusId;
	protected $AlphabetName;
	protected $Gender;
	protected $Address;
	protected $SSN;
	protected $EmailId;
	protected $MobileNumber;
	protected $City;
	protected $ZipCode;
	protected $MinHourlyRate;
	protected $TotalExperience;
	protected $CreatedBy;
	protected $CaregiverSpecializations;
	protected $CaregiverLanguages;
	protected $CaregiverNote;
	protected $CaregiverCertifications;
	protected $WorkArea;
	protected $Source;

	/**
	 * @return mixed
	 */
	public function getCaregiverID()
	{
		if (is_null($this->CaregiverID)) {
			$this->CaregiverID = "";
		}
		return $this->CaregiverID;
	}

	/**
	 * @param mixed $CaregiverID
	 * @return Caregiver
	 */
	public function setCaregiverID($CaregiverID)
	{
		$this->CaregiverID = $CaregiverID;
		$this->addModifiedColumn("CaregiverID");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFirstName()
	{
		if (is_null($this->FirstName)) {
			$this->FirstName = "";
		}
		return $this->FirstName;
	}

	/**
	 * @param mixed $FirstName
	 * @return Caregiver
	 */
	public function setFirstName($FirstName)
	{
		$this->FirstName = $FirstName;
		$this->addModifiedColumn("FirstName");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		if (is_null($this->LastName)) {
			$this->LastName = "";
		}
		return $this->LastName;
	}

	/**
	 * @param mixed $LastName
	 * @return Caregiver
	 */
	public function setLastName($LastName)
	{
		$this->LastName = $LastName;
		$this->setAlphabetName(substr($this->LastName, 0, 1));
		$this->addModifiedColumn("LastName");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDateOfBirth()
	{
		if (is_null($this->DateOfBirth)) {
			$this->DateOfBirth = "";
		}
		return $this->DateOfBirth;
	}

	/**
	 * @param mixed $DateOfBirth
	 * @return Caregiver
	 */
	public function setDateOfBirth($DateOfBirth)
	{
		$this->DateOfBirth = $DateOfBirth;
		$this->addModifiedColumn("DateOfBirth");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPrimaryLanguageId()
	{
		if (is_null($this->PrimaryLanguageId)) {
			$this->PrimaryLanguageId = "";
		}
		return $this->PrimaryLanguageId;
	}

	/**
	 * @param mixed $PrimaryLanguageId
	 * @return Caregiver
	 */
	public function setPrimaryLanguageId($PrimaryLanguageId)
	{
		$this->PrimaryLanguageId = $PrimaryLanguageId;
		$this->addModifiedColumn("PrimaryLanguageId");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStateId()
	{
		if (is_null($this->StateId)) {
			$this->StateId = "";
		}
		return $this->StateId;
	}

	/**
	 * @param mixed $StateId
	 * @return Caregiver
	 */
	public function setStateId($StateId)
	{
		$this->StateId = $StateId;
		$this->addModifiedColumn("StateId");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCountryId()
	{
		if (is_null($this->CountryId)) {
			$this->CountryId = self::COUNTRY_US;
		}
		return $this->CountryId;
	}

	/**
	 * @param mixed $CountryId
	 * @return Caregiver
	 */
	public function setCountryId($CountryId)
	{
		$this->CountryId = $CountryId;
		$this->addModifiedColumn("CountryId");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStatusId()
	{
		if (is_null($this->StatusId)) {
			$this->StatusId = self::STATUS_ACTIVE;
		}
		return $this->StatusId;
	}

	/**
	 * @param mixed $StatusId
	 * @return Caregiver
	 */
	public function setStatusId($StatusId)
	{
		if (is_int($StatusId)) {
			$this->StatusId = $StatusId;
		} else if (is_string($StatusId)) {
			if (trim(strtolower($StatusId)) == 'active') {
				$this->StatusId = self::STATUS_ACTIVE;
			} else if (trim(strtolower($StatusId)) == 'disqualified') {
				$this->StatusId = self::STATUS_DISQUALIFIED;
			} else if (trim(strtolower($StatusId)) == 'inactive') {
				$this->StatusId = self::STATUS_INACTIVE;
			} else if (trim(strtolower($StatusId)) == 'on disability') {
				$this->StatusId = self::STATUS_ON_DISABILITY;
			} else if (trim(strtolower($StatusId)) == 'disability') {
				$this->StatusId = self::STATUS_ON_DISABILITY;
			} else if (trim(strtolower($StatusId)) == 'on leave') {
				$this->StatusId = self::STATUS_ON_LEAVE;
			} else if (trim(strtolower($StatusId)) == 'leave') {
				$this->StatusId = self::STATUS_ON_LEAVE;
			} else if (trim(strtolower($StatusId)) == 'prospect') {
				$this->StatusId = self::STATUS_PROSPECT;
			} else if (trim(strtolower($StatusId)) == 'quit') {
				$this->StatusId = self::STATUS_QUIT;
			} else if (trim(strtolower($StatusId)) == 'suspended') {
				$this->StatusId = self::STATUS_SUSPENDED;
			} else if (trim(strtolower($StatusId)) == 'terminated') {
				$this->StatusId = self::STATUS_TERMINATED;
			} else {
				$this->StatusId = $StatusId;
			}
		}
		$this->addModifiedColumn("StatusId");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAlphabetName()
	{
		if (is_null($this->AlphabetName)) {
			$this->AlphabetName = "";
		}
		return $this->AlphabetName;
	}

	/**
	 * @param mixed $AlphabetName
	 * @return Caregiver
	 */
	public function setAlphabetName($AlphabetName)
	{
		$this->AlphabetName = $AlphabetName;
		$this->addModifiedColumn("AlphabetName");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGender()
	{
		if (is_null($this->Gender)) {
			$this->Gender = self::GENDER_NO_PREFERENCE;
		}
		return $this->Gender;
	}

	/**
	 * @param mixed $Gender
	 * @return Caregiver
	 */
	public function setGender($Gender)
	{
		if (is_int($Gender)) {
			$this->Gender = $Gender;
		} else if (is_string($Gender)) {
			if (substr(trim(strtolower($Gender)), 0, 1) == 'm') {
				$this->Gender = self::GENDER_MALE;
			} else if (substr(trim(strtolower($Gender)), 0, 1) == 'f') {
				$this->Gender = self::GENDER_FEMALE;
			} else {
				$this->Gender = self::GENDER_NO_PREFERENCE;
			}
		}
		$this->addModifiedColumn("Gender");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddress()
	{
		if (is_null($this->Address)) {
			$this->Address = "";
		}
		return $this->Address;
	}

	/**
	 * @param mixed $Address
	 * @return Caregiver
	 */
	public function setAddress($Address)
	{
		$this->Address = $Address;
		$this->addModifiedColumn("Address");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSSN()
	{
		if (is_null($this->SSN)) {
			$this->SSN = "";
		}
		return $this->SSN;
	}

	/**
	 * @param mixed $SSN
	 * @return Caregiver
	 */
	public function setSSN($SSN)
	{
		$this->SSN = $SSN;
		$this->addModifiedColumn("SSN");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmailId()
	{
		if (is_null($this->EmailId)) {
			$this->EmailId = "";
		}
		return $this->EmailId;
	}

	/**
	 * @param mixed $EmailId
	 * @return Caregiver
	 */
	public function setEmailId($EmailId)
	{
		$this->EmailId = $EmailId;
		$this->addModifiedColumn("EmailId");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMobileNumber()
	{
		if (is_null($this->MobileNumber)) {
			$this->MobileNumber = "";
		}
		return $this->MobileNumber;
	}

	/**
	 * @param mixed $MobileNumber
	 * @return Caregiver
	 */
	public function setMobileNumber($MobileNumber)
	{
		$this->MobileNumber = $MobileNumber;
		$this->addModifiedColumn("MobileNumber");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCity()
	{
		if (is_null($this->City)) {
			$this->City = "";
		}
		return $this->City;
	}

	/**
	 * @param mixed $City
	 * @return Caregiver
	 */
	public function setCity($City)
	{
		$this->City = $City;
		$this->addModifiedColumn("City");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getZipCode()
	{
		if (is_null($this->ZipCode)) {
			$this->ZipCode = "";
		}
		return $this->ZipCode;
	}

	/**
	 * @param mixed $ZipCode
	 * @return Caregiver
	 */
	public function setZipCode($ZipCode)
	{
		$this->ZipCode = $ZipCode;
		$this->addModifiedColumn("ZipCode");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMinHourlyRate()
	{
		if (is_null($this->MinHourlyRate)) {
			$this->MinHourlyRate = "";
		}
		return $this->MinHourlyRate;
	}

	/**
	 * @param mixed $MinHourlyRate
	 * @return Caregiver
	 */
	public function setMinHourlyRate($MinHourlyRate)
	{
		$this->MinHourlyRate = $MinHourlyRate;
		$this->addModifiedColumn("MinHourlyRate");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTotalExperience()
	{
		if (is_null($this->TotalExperience)) {
			$this->TotalExperience = "";
		}
		return $this->TotalExperience;
	}

	/**
	 * @param mixed $TotalExperience
	 * @return Caregiver
	 */
	public function setTotalExperience($TotalExperience)
	{
		$this->TotalExperience = $TotalExperience;
		$this->addModifiedColumn("TotalExperience");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedBy()
	{
		if (is_null($this->CreatedBy)) {
			$this->CreatedBy = "";
		}
		return $this->CreatedBy;
	}

	/**
	 * @param mixed $CreatedBy
	 * @return Caregiver
	 */
	public function setCreatedBy($CreatedBy)
	{
		$this->CreatedBy = $CreatedBy;
		$this->addModifiedColumn("CreatedBy");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCaregiverSpecializations()
	{
		if (is_null($this->CaregiverSpecializations)) {
			$this->CaregiverSpecializations = "";
		}
		return $this->CaregiverSpecializations;
	}

	/**
	 * @param mixed $CaregiverSpecializations
	 * @return Caregiver
	 */
	public function setCaregiverSpecializations($CaregiverSpecializations)
	{
		$this->CaregiverSpecializations = $CaregiverSpecializations;
		$this->addModifiedColumn("CaregiverSpecializations");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCaregiverLanguages()
	{
		if (is_null($this->CaregiverLanguages)) {
			$this->CaregiverLanguages = "";
		}
		return $this->CaregiverLanguages;
	}

	/**
	 * @param mixed $CaregiverLanguages
	 * @return Caregiver
	 */
	public function setCaregiverLanguages($CaregiverLanguages)
	{
		$this->CaregiverLanguages = $CaregiverLanguages;
		$this->addModifiedColumn("CaregiverLanguages");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCaregiverNote()
	{
		if (is_null($this->CaregiverNote)) {
			$this->CaregiverNote = "";
		}
		return $this->CaregiverNote;
	}

	/**
	 * @param mixed $CaregiverNote
	 * @return Caregiver
	 */
	public function setCaregiverNote($CaregiverNote)
	{
		$this->CaregiverNote = $CaregiverNote;
		$this->addModifiedColumn("CaregiverNote");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCaregiverCertifications()
	{
		if (is_null($this->CaregiverCertifications)) {
			$this->CaregiverCertifications = "";
		}
		return $this->CaregiverCertifications;
	}

	/**
	 * @param mixed $CaregiverCertifications
	 * @return Caregiver
	 */
	public function setCaregiverCertifications($CaregiverCertifications)
	{
		$this->CaregiverCertifications = $CaregiverCertifications;
		$this->addModifiedColumn("CaregiverCertifications");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getWorkArea()
	{
		if (is_null($this->WorkArea)) {
			$this->WorkArea = "";
		}
		return $this->WorkArea;
	}

	/**
	 * @param mixed $WorkArea
	 * @return Caregiver
	 */
	public function setWorkArea($WorkArea)
	{
		$this->WorkArea = $WorkArea;
		$this->addModifiedColumn("WorkArea");
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSource()
	{
		if (is_null($this->Source)) {
			$this->Source = "";
		}
		return $this->Source;
	}

	/**
	 * @param mixed $Source
	 * @return Caregiver
	 */
	public function setSource($Source)
	{
		$this->Source = $Source;
		$this->addModifiedColumn("Source");
		return $this;
	}
}