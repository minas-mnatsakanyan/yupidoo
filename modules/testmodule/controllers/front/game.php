<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

Class testmoduleGameModuleFrontController extends ModuleFrontController
{

public function init()
{
   // $this->page_name = 'Game'; // page_name and body id
   // parent::init();
	
	$actions_list=array('aa'=>'aa');
	$module_action=Tools::getValue('module_action');
	$this->$actions_list[$module_action]();
} 

public function initContent()
{
	$actions_list=array('aa'=>'aa');
	$module_action=Tools::getValue('module_action');
	//var_dump($module_action);
  //  parent::initContent();
	$this->$actions_list[$module_action]();
	
   // echo'hey there';
	//var_dump($this->countAllProducts());
	
} 
 
 
 public function countAllProducts()
{
  //  return Db::getInstance()->getValue('SELECT COUNT(*) from ps_product WHERE active = 1');
}  


 public function aa()
{	
	var_dump('ahghjghjghjghjg'); 
    var_dump(Db::getInstance()->getValue('SELECT COUNT(*) from ps_product WHERE active = 1'));
 exit;
} 
}
