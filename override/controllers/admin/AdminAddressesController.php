<?php
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.

class AdminAddressesController extends AdminAddressesControllerCore
{

	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:23
	* version: 3.0.6.2
	*/
	public function __construct()
	{
		parent::__construct();
		
		if(Module::isInstalled('agilemultipleseller'))
		{
			$this->agilemultipleseller_list_override();
		}
	}
	

	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:23
	* version: 3.0.6.2
	*/
	public function initToolbar()
	{
		parent::initToolbar();
				if($this->is_seller)
		{
			unset($this->toolbar_btn['new']);
			unset($this->toolbar_btn['save']);
		}
	}
	

	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:23
	* version: 3.0.6.2
	*/
	protected function agilemultipleseller_list_override()
	{
		if(!Module::isInstalled('agilemultipleseller'))return;
				if(!$this->is_seller)return;
		parent::agilemultipleseller_list_override();
				$this->fields_list['address1']['filter_key'] = 'a!address1';
		$this->fields_list['postcode']['filter_key'] = 'a!postcode';
		$this->fields_list['city']['filter_key'] = 'a!city';		
	}

}

