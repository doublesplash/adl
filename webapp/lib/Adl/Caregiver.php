<?php
namespace Adl;

use Mojavi\Form\MojaviForm;

/**
 * Stores caregiver data
 * @author hobby
 */
class Caregiver extends MojaviForm  {

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
	const COUNTRY_AUSTRALIA = 3;

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
	protected $CaregiverGroupId;
	protected $DisciplineId;
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
			$this->DateOfBirth = "01-01-1900";
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
			$this->PrimaryLanguageId = "10059";
		}
		return $this->PrimaryLanguageId;
	}

	/**
	 * @param mixed $PrimaryLanguageId
	 * @return Caregiver
	 */
	public function setPrimaryLanguageId($PrimaryLanguageId)
	{
		if (strtolower(trim($PrimaryLanguageId)) == "akan") {
			$this->PrimaryLanguageId = 10481;
		} else if (strtolower(trim($PrimaryLanguageId)) == "amharic") {
			$this->PrimaryLanguageId = 10485;
		} else if (strtolower(trim($PrimaryLanguageId)) == "arabic") {
			$this->PrimaryLanguageId = 10219;
		} else if (strtolower(trim($PrimaryLanguageId)) == "assyrian") {
			$this->PrimaryLanguageId = 10352;
		} else if (strtolower(trim($PrimaryLanguageId)) == "bosnian") {
			$this->PrimaryLanguageId = 10460;
		} else if (strtolower(trim($PrimaryLanguageId)) == "cambodian") {
			$this->PrimaryLanguageId = 10391;
		} else if (strtolower(trim($PrimaryLanguageId)) == "chinese-cantonese") {
			$this->PrimaryLanguageId = 10319;
		} else if (strtolower(trim($PrimaryLanguageId)) == "chinese-mandarin") {
			$this->PrimaryLanguageId = 10318;
		} else if (strtolower(trim($PrimaryLanguageId)) == "croatian") {
			$this->PrimaryLanguageId = 10461;
		} else if (strtolower(trim($PrimaryLanguageId)) == "english") {
			$this->PrimaryLanguageId = 10059;
		} else if (strtolower(trim($PrimaryLanguageId)) == "farsi") {
			$this->PrimaryLanguageId = 10272;
		} else if (strtolower(trim($PrimaryLanguageId)) == "fijian") {
			$this->PrimaryLanguageId = 10392;
		} else if (strtolower(trim($PrimaryLanguageId)) == "french") {
			$this->PrimaryLanguageId = 10349;
		} else if (strtolower(trim($PrimaryLanguageId)) == "german") {
			$this->PrimaryLanguageId = 10061;
		} else if (strtolower(trim($PrimaryLanguageId)) == "greek") {
			$this->PrimaryLanguageId = 10218;
		} else if (strtolower(trim($PrimaryLanguageId)) == "hebrew") {
			$this->PrimaryLanguageId = 10217;
		} else if (strtolower(trim($PrimaryLanguageId)) == "hindi") {
			$this->PrimaryLanguageId = 10360;
		} else if (strtolower(trim($PrimaryLanguageId)) == "hmong") {
			$this->PrimaryLanguageId = 10457;
		} else if (strtolower(trim($PrimaryLanguageId)) == "ilokano") {
			$this->PrimaryLanguageId = 10393;
		} else if (strtolower(trim($PrimaryLanguageId)) == "italian") {
			$this->PrimaryLanguageId = 10190;
		} else if (strtolower(trim($PrimaryLanguageId)) == "japanese") {
			$this->PrimaryLanguageId = 10323;
		} else if (strtolower(trim($PrimaryLanguageId)) == "khmer") {
			$this->PrimaryLanguageId = 10458;
		} else if (strtolower(trim($PrimaryLanguageId)) == "korean") {
			$this->PrimaryLanguageId = 10322;
		} else if (strtolower(trim($PrimaryLanguageId)) == "laotian") {
			$this->PrimaryLanguageId = 10394;
		} else if (strtolower(trim($PrimaryLanguageId)) == "micronessian") {
			$this->PrimaryLanguageId = 10395;
		} else if (strtolower(trim($PrimaryLanguageId)) == "nigerian") {
			$this->PrimaryLanguageId = 10482;
		} else if (strtolower(trim($PrimaryLanguageId)) == "other") {
			$this->PrimaryLanguageId = 10397;
		} else if (strtolower(trim($PrimaryLanguageId)) == "pashtun") {
			$this->PrimaryLanguageId = 10350;
		} else if (strtolower(trim($PrimaryLanguageId)) == "persian") {
			$this->PrimaryLanguageId = 10351;
		} else if (strtolower(trim($PrimaryLanguageId)) == "polish") {
			$this->PrimaryLanguageId = 10353;
		} else if (strtolower(trim($PrimaryLanguageId)) == "portuguese") {
			$this->PrimaryLanguageId = 10471;
		} else if (strtolower(trim($PrimaryLanguageId)) == "romanian") {
			$this->PrimaryLanguageId = 10355;
		} else if (strtolower(trim($PrimaryLanguageId)) == "russian") {
			$this->PrimaryLanguageId = 10191;
		} else if (strtolower(trim($PrimaryLanguageId)) == "samoan") {
			$this->PrimaryLanguageId = 10396;
		} else if (strtolower(trim($PrimaryLanguageId)) == "spanish") {
			$this->PrimaryLanguageId = 10060;
		} else if (strtolower(trim($PrimaryLanguageId)) == "tagalog") {
			$this->PrimaryLanguageId = 10192;
		} else if (strtolower(trim($PrimaryLanguageId)) == "thai") {
			$this->PrimaryLanguageId = 10329;
		} else if (strtolower(trim($PrimaryLanguageId)) == "twi") {
			$this->PrimaryLanguageId = 10483;
		} else if (strtolower(trim($PrimaryLanguageId)) == "ukrainian") {
			$this->PrimaryLanguageId = 10354;
		} else if (strtolower(trim($PrimaryLanguageId)) == "urdu") {
			$this->PrimaryLanguageId = 10484;
		} else if (strtolower(trim($PrimaryLanguageId)) == "vietnamese") {
			$this->PrimaryLanguageId = 10328;
		} else if (trim($PrimaryLanguageId) == "") {
			$this->PrimaryLanguageId = 10059; // default to english if blank
		} else {
			$this->PrimaryLanguageId = $PrimaryLanguageId;
		}
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
		$this->setCountryId(1);
		if (strtolower(trim($StateId)) == "alabama") {
			$this->StateId = "AL";
		} else if (strtolower(trim($StateId)) == "alaska") {
			$this->StateId = "AK";
		} else if (strtolower(trim($StateId)) == "arizona") {
			$this->StateId = "AZ";
		} else if (strtolower(trim($StateId)) == "arkansas") {
			$this->StateId = "AR";
		} else if (strtolower(trim($StateId)) == "califonia") {
			$this->StateId = "CA";
		} else if (strtolower(trim($StateId)) == "colorado") {
			$this->StateId = "CO";
		} else if (strtolower(trim($StateId)) == "connecticut") {
			$this->StateId = "CT";
		} else if (strtolower(trim($StateId)) == "delaware") {
			$this->StateId = "DE";
		} else if (strtolower(trim($StateId)) == "florida") {
			$this->StateId = "FL";
		} else if (strtolower(trim($StateId)) == "district of colombia") {
			$this->StateId = "DC";
		} else if (strtolower(trim($StateId)) == "georgia") {
			$this->StateId = "GA";
		} else if (strtolower(trim($StateId)) == "guam") {
			$this->StateId = "GU";
		} else if (strtolower(trim($StateId)) == "hawaii") {
			$this->StateId = "HI";
		} else if (strtolower(trim($StateId)) == "idaho") {
			$this->StateId = "ID";
		} else if (strtolower(trim($StateId)) == "illinois") {
			$this->StateId = "IL";
		} else if (strtolower(trim($StateId)) == "indiana") {
			$this->StateId = "IN";
		} else if (strtolower(trim($StateId)) == "iowa") {
			$this->StateId = "IA";
		} else if (strtolower(trim($StateId)) == "kansas") {
			$this->StateId = "KS";
		} else if (strtolower(trim($StateId)) == "kentucky") {
			$this->StateId = "KY";
		} else if (strtolower(trim($StateId)) == "louisiana") {
			$this->StateId = "LS";
		} else if (strtolower(trim($StateId)) == "maine") {
			$this->StateId = "ME";
		} else if (strtolower(trim($StateId)) == "maryland") {
			$this->StateId = "MD";
		} else if (strtolower(trim($StateId)) == "massachusetts") {
			$this->StateId = "MA";
		} else if (strtolower(trim($StateId)) == "michigan") {
			$this->StateId = "MI";
		} else if (strtolower(trim($StateId)) == "minnesota") {
			$this->StateId = "MN";
		} else if (strtolower(trim($StateId)) == "mississippi") {
			$this->StateId = "MS";
		} else if (strtolower(trim($StateId)) == "missouri") {
			$this->StateId = "MO";
		} else if (strtolower(trim($StateId)) == "montana") {
			$this->StateId = "MT";
		} else if (strtolower(trim($StateId)) == "nebraska") {
			$this->StateId = "NE";
		} else if (strtolower(trim($StateId)) == "nevada") {
			$this->StateId = "NV";
		} else if (strtolower(trim($StateId)) == "new jersey") {
			$this->StateId = "NJ";
		} else if (strtolower(trim($StateId)) == "new mexico") {
			$this->StateId = "NM";
		} else if (strtolower(trim($StateId)) == "new york") {
			$this->StateId = "NY";
		} else if (strtolower(trim($StateId)) == "new hampshire") {
			$this->StateId = "NH";
		} else if (strtolower(trim($StateId)) == "north carolina") {
			$this->StateId = "NC";
		} else if (strtolower(trim($StateId)) == "north dakota") {
			$this->StateId = "ND";
		} else if (strtolower(trim($StateId)) == "ohio") {
			$this->StateId = "OH";
		} else if (strtolower(trim($StateId)) == "oklahoma") {
			$this->StateId = "OK";
		} else if (strtolower(trim($StateId)) == "oregon") {
			$this->StateId = "OR";
		} else if (strtolower(trim($StateId)) == "palau") {
			$this->StateId = "PW";
		} else if (strtolower(trim($StateId)) == "pennsylvania") {
			$this->StateId = "PA";
		} else if (strtolower(trim($StateId)) == "puerto rico") {
			$this->StateId = "PR";
		} else if (strtolower(trim($StateId)) == "rhode island") {
			$this->StateId = "RI";
		} else if (strtolower(trim($StateId)) == "south carolina") {
			$this->StateId = "SC";
		} else if (strtolower(trim($StateId)) == "south dakota") {
			$this->StateId = "SD";
		} else if (strtolower(trim($StateId)) == "tennessee") {
			$this->StateId = "TN";
		} else if (strtolower(trim($StateId)) == "texas") {
			$this->StateId = "TX";
		} else if (strtolower(trim($StateId)) == "utah") {
			$this->StateId = "UT";
		} else if (strtolower(trim($StateId)) == "vermont") {
			$this->StateId = "VT";
		} else if (strtolower(trim($StateId)) == "virgin islands") {
			$this->StateId = "VI";
		} else if (strtolower(trim($StateId)) == "virginia") {
			$this->StateId = "VA";
		} else if (strtolower(trim($StateId)) == "washington") {
			$this->StateId = "WA";
		} else if (strtolower(trim($StateId)) == "west virginia") {
			$this->StateId = "WV";
		} else if (strtolower(trim($StateId)) == "wisconsin") {
			$this->StateId = "WI";
		} else if (strtolower(trim($StateId)) == "wyoming") {
			$this->StateId = "WY";
		} else if (strtolower(trim($StateId)) == "alberta") {
			$this->StateId = "AB";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "british columbia") {
			$this->StateId = "BC";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "manitoba") {
			$this->StateId = "MB";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "new brunswick") {
			$this->StateId = "NB";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "newfoundland") {
			$this->StateId = "NL";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "northwest territories") {
			$this->StateId = "NT";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "nova scotia") {
			$this->StateId = "NS";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "nunavut") {
			$this->StateId = "NU";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "ontario") {
			$this->StateId = "ON";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "prince edward island") {
			$this->StateId = "PE";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "quebec") {
			$this->StateId = "QC";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "saskatchewan") {
			$this->StateId = "SK";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "yukon") {
			$this->StateId = "YT";
			$this->setCountryId(2);
		} else if (strtolower(trim($StateId)) == "new south wales") {
			$this->StateId = "NSW";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "queensland") {
			$this->StateId = "QLD";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "south australia") {
			$this->StateId = "SA";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "tasmania") {
			$this->StateId = "TAS";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "victoria") {
			$this->StateId = "VIC";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "western australia") {
			$this->StateId = "WA";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "australian capital territory") {
			$this->StateId = "ACT";
			$this->setCountryId(3);
		} else if (strtolower(trim($StateId)) == "northern territory") {
			$this->StateId = "NT";
			$this->setCountryId(3);
		} else {
			$this->StateId = $StateId;
		}
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
		if (strtolower(trim($CountryId)) == "us") {
			$this->CountryId = self::COUNTRY_US;
		} else if (strtolower(trim($CountryId)) == "usa") {
			$this->CountryId = self::COUNTRY_US;
		} else if (strtolower(trim($CountryId)) == "united states") {
			$this->CountryId = self::COUNTRY_US;
		} else if (strtolower(trim($CountryId)) == "united states of america") {
			$this->CountryId = self::COUNTRY_US;
		} else if (strtolower(trim($CountryId)) == "ca") {
			$this->CountryId = self::COUNTRY_CANADA;
		} else if (strtolower(trim($CountryId)) == "canada") {
			$this->CountryId = self::COUNTRY_CANADA;
		} else if (strtolower(trim($CountryId)) == "au") {
			$this->CountryId = self::COUNTRY_AUSTRALIA;
		} else if (strtolower(trim($CountryId)) == "australia") {
			$this->CountryId = self::COUNTRY_AUSTRALIA;
		} else {
			$this->CountryId = $CountryId;
		}
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
		} else if (trim(strtolower($StatusId)) == '0 - applicant') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '.5 - prospect from list') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '1 - phone screen complete') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '2 - interview scheduled') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '3 - interview completed') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '4 - orientation scheduled') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '5 - orientation completed') {
			$this->StatusId = self::STATUS_PROSPECT;
		} else if (trim(strtolower($StatusId)) == '6 - hired') {
			$this->StatusId = self::STATUS_ACTIVE;
		} else if (trim(strtolower($StatusId)) == '7 - inactive - potential') {
			$this->StatusId = self::STATUS_INACTIVE;
		} else if (trim(strtolower($StatusId)) == '8 - inactive - disqualified') {
			$this->StatusId = self::STATUS_DISQUALIFIED;
		} else if (trim(strtolower($StatusId)) == '8.5 - former employee - terminated') {
			$this->StatusId = self::STATUS_TERMINATED;
		} else if (trim(strtolower($StatusId)) == '9 - former employee') {
			$this->StatusId = self::STATUS_QUIT;
		} else {
			$this->StatusId = $StatusId;
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
			$this->SSN = "000-00-0000";
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

	/**
	 * @return mixed
	 */
	public function getCaregiverGroupId()
	{
		if (is_null($this->CaregiverGroupId)) {
			$this->CaregiverGroupId = "10134";
		}
		return $this->CaregiverGroupId;
	}

	/**
	 * @param mixed $CaregiverGroupId
	 */
	public function setCaregiverGroupId($CaregiverGroupId)
	{
		if (strtolower(trim($CaregiverGroupId)) == "employee") {
			$this->CaregiverGroupId = "10134";
		} else if (strtolower(trim($CaregiverGroupId)) == "contractor") {
			$this->CaregiverGroupId = "10135";
		} else if (strtolower(trim($CaregiverGroupId)) == "volunteer") {
			$this->CaregiverGroupId = "10453";
		} else {
			$this->CaregiverGroupId = $CaregiverGroupId;
		}
		$this->addModifiedColumn("CaregiverGroupId");
	}

	/**
	 * @return mixed
	 */
	public function getDisciplineId()
	{
		if (is_null($this->DisciplineId)) {
			$this->DisciplineId = "6630";
		}
		return $this->DisciplineId;
	}

	/**
	 * @param mixed $DisciplineId
	 */
	public function setDisciplineId($DisciplineId)
	{
		if (strtolower(trim($DisciplineId)) == "nursing") {
			$this->DisciplineId = "6618";
		} else if (strtolower(trim($DisciplineId)) == "personal care attendant") {
			$this->DisciplineId = "6630";
		} else {
			$this->DisciplineId = $DisciplineId;
		}
		$this->addModifiedColumn("DisciplineId");
	}
}