<?php
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.

class AdminSpecificPriceRuleController extends AdminSpecificPriceRuleControllerCore
{

	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:26
	* version: 3.0.6.2
	*/
	public function initToolbar()
	{
		if(Module::isInstalled('agilemultipleseller') AND $this->is_seller)return;
		parent::initToolbar();
	}

}

