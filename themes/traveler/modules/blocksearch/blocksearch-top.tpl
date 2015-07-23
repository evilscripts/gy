{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
<div><h2>Search Guides and Activities</h2>
	<div class="cclose" style="display:inline-block;   float:right; cursor:pointer; color:#000;"><i class="fa fa-times fa-lg"></i></i></div>
	</div><div class="clearfix"></div>
	<form id="searchbox" method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />

		<!-- Location Input -->
		<input id="search_query_topmodal" class="search_query" type="text" name="search_loc" placeholder="Country and City"  autocomplete="off"
		{if !empty(Tools::getValue('search_original'))}
			value="{Tools::getValue('search_original')}" 
		{/if}
		{if empty(Tools::getValue('search_original'))}

			value="{Tools::getValue('search_loc')}" 
		{/if}
		/>

		<!-- CATEGORY -->
		<select  class="search_query search_query_top" name="search_cat" style="-webkit-appearance: none;-moz-appearance: none;appearance: none; color:#bbb">
			<option value="0">Guide and Activity</option>
				{foreach $new_categories AS $category}
					<optgroup label="{$category['name_main']}">
					{if $category['child']|@count > 0}
						{foreach $category['child'] AS $cat}
							<option  
								{if Tools::getValue('search_cat') eq $cat['id_category']}
									selected="selected"
								{/if}
								value="{$cat['id_category']}">
								{$cat['name']}
							</option>
						{/foreach}
					{/if}
					</optgroup>
				{/foreach}
		</select>

		<!-- FREE WORD -->
		<input class="search_query search_query_top" type="text"  name="search_words" placeholder="Free word" />

		<input type='submit' name='submitmodal' style='visibility:hidden' /> 
	
	</form>
	

</div>
<!-- /Block search module TOP -->