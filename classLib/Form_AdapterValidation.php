<?php
namespace LIB;
/**
* Form_AdapterValidation.class.php
*
* @author:  Alex Scott <alex.scott@pbfsolutions.co.uk>
* @access:  public
* @package: phpMaxLib
* @version: $Id$*
* @notes:   20/08/2015 - Extends the Form_Validation class to allow customisation without modifying the core code.
*/

class Form_AdapterValidation extends Form_Validation {

	public function __construct(  ) {
		parent::__construct(  );

		// $this->_addValidation({app page}, {field_name}, {vaildation}, {message} );
		
		#$this->_addValidation(1, 'app_product', 'notEmpty', 'Product is required');
		#$this->_addValidation(1, 'account_type_main', 'notEmpty', 'Account Type is required');
		$this->_addValidation(1, 'existing_account', 'notEmpty', 'Existing account holder question is required');
		$this->_addValidation(1, 'c_joint_investment', 'notEmpty', 'Joint Account question is required');
		// $this->_addValidation(1, 'uk_tax_res_only', 'notEmpty', 'UK tax residency is required');
		// $this->_addValidation(1, 'c_uk_resident', 'notEmpty', 'UK Resident question is required');
				
		$this->_addValidation(2, 'c_dob_day', 'notEmpty', 'Date of Birth (day) is required');
		$this->_addValidation(2, 'c_dob_month', 'notEmpty', 'Date of Birth (month) is required');
		$this->_addValidation(2, 'c_dob_year', 'notEmpty', 'Date of Birth (year) is required');


		$this->_addValidation(2, 'c_title', 'notEmpty', 'Title is required');
		// $this->_addValidation(2, 'c_gender', 'notEmpty', 'Gender is required');
		$this->_addValidation(2, 'c_firstname', 'notEmpty', 'Firstname is required');
		$this->_addValidation(2, 'c_surname', 'notEmpty', 'Surname is required');
		$this->_addValidation(2, 'birth_country', 'notEmpty', 'Country of birth is required');
		$this->_addValidation(2, 'c_nationality', 'notEmpty', 'Nationality is required');
		#$this->_addValidation(2, 'c_identification_type', 'notEmpty', '');
		$this->_addValidation(2, 'c_home_telephone', 'notEmpty', 'Telephone Number is required');
		//$this->_addValidation(2, 'c_mobile', 'notEmpty', 'Mobile Number is required');
		$this->_addValidation(2, 'c_email', 'notEmpty', 'Valid email address is required');
		$this->_addValidation(2, 'c_cemail', 'notEmpty', 'Valid email address is required');
		$this->_addValidation(2, 'c_email', 'email', 'Valid email address is required');
		$this->_addValidation(2, 'c_cemail', 'email', 'Valid email address is required');
		
		//$this->_addValidation(2, 'c_mothers_maiden_name', 'notEmpty', 'Mothers Maiden Name is required');
		//$this->_addValidation(2, 'c_occupation', 'notEmpty', 'Employment Nature is required');
		//$this->_addValidation(2, 'c_employment_gross_income', 'notEmpty', 'Income is required');
		//$this->_addValidation(2, 'city_of_birth', 'notEmpty', 'City of Birth is required');
		
		$this->_addValidation(3, 'c_investment_product', 'notEmpty', 'Product is required');
		$this->_addValidation(3, 'c_investment_amount', 'notEmpty', 'Investment Amount is required');
		$this->_addValidation(3, 'c_interest_payment', 'notEmpty', 'Interest Payout Option is required');
		$this->_addValidation(3, 'c_bank_name', 'notEmpty', 'Bank Name is required');
		$this->_addValidation(3, 'c_bank_account_number', 'notEmpty', 'Account Number is required');
		$this->_addValidation(3, 'c_bank_sort_code', 'notEmpty', 'Sort Code is required');
		//$this->_addValidation(3, 'c_tax_eligibility', 'notEmpty', 'Interest Eligibility is required');
		#$this->_addValidation(3, 'account_purpose', 'notEmpty', 'Purpose of the Account is required');
		
		$this->_addValidation(4, 'c_identification_type', 'notEmpty', 'Identification Type is required');
		//$this->_addValidation(4, 'c_terms_agree', 'notEmpty', 'Terms and Conditions agreement is required');
		
		$this->_addValidation(5, 'tandc_check', 'notEmpty', '');

	}

}

?>
