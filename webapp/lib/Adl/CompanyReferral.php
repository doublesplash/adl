<?php
namespace Adl;

use Mojavi\Form\CommonForm;
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
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
	 * @return CompanyReferral
	 */
	function setReason($arg0) {
		$this->Reason = $arg0;
		$this->addModifiedColumn('Reason');
		return $this;
	}
}