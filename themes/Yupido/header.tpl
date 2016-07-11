{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{$language_code|escape:'html':'UTF-8'}"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="{$language_code|escape:'html':'UTF-8'}"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="{$language_code|escape:'html':'UTF-8'}"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="{$language_code|escape:'html':'UTF-8'}"><![endif]-->
<html lang="{$language_code|escape:'html':'UTF-8'}">
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
{if isset($css_files)}
	{foreach from=$css_files key=css_uri item=media}
		<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
		
	{/foreach}

{/if}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="/yupido/themes/Yupido/css/style.css">

<!-- Optional theme -->

	
<!-- Latest compiled and minified JavaScript -->
{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
	{$js_def}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
	{/foreach}
{/if}
		{$HOOK_HEADER}
		<link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso}">
			<!--[if lt IE 10]>
<div>Please update Your browser or use other! 
		<![endif]-->
	<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{$base_dir}" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="../getting-started/">Weekly Winners</a>
        </li>
        <li class="active">
          <a href="">News</a>
        </li>

        <li>
          <a href="{$link->getPageLink('contact-form.php')}">Contact us</a>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/yupido/content/3-terms-and-conditions-of-use">Terms & conditions</a></li>
        <li class="menu-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style=" font-size: 16px;" class="glyphicon glyphicon-cog"><span class="hidden_text"> Settings</span></span></a>
					<ul class="dropdown-menu">
						 <li class="menu-item dropdown dropdown-submenu">
                            {if $logged}
							<a href="{$link->getPageLink('my-account', true)}" title="{l s='View my account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
							<a href="{$link->getPageLink('index', true, NULL, "mylogout")}" title="{l s='Log me out' mod='blockuserinfo'}" title="{l s='Log out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a>
							  {else}
							<a href="{$link->getPageLink('my-account', true)}" title="{l s='Login to your account' mod='blockuserinfo'}" class="login" rel="nofollow">{l s='Log in' mod='blockuserinfo'}</a>
							  {/if}
                        </li>
                    </ul>
		</li>
      </ul>
    </nav>
  </div>
</header>
					<div id="center_column" class="center_column col-xs-12 col-sm-{$cols|intval}">

{strip}
{addJsDef isMobile=$mobile_device}
{addJsDef baseDir=$content_dir}
{addJsDef baseUri=$base_uri}
{addJsDef static_token=$static_token}
{addJsDef token=$token}
{addJsDef priceDisplayPrecision=$priceDisplayPrecision*$currency->decimals}
{addJsDef priceDisplayMethod=$priceDisplay}
{addJsDef roundMode=$roundMode}
{addJsDef isLogged=$is_logged|intval}
{addJsDef isGuest=$is_guest|intval}
{addJsDef page_name=$page_name|escape:'html':'UTF-8'}
{addJsDef contentOnly=$content_only|boolval}
{if isset($cookie->id_lang)}
	{addJsDef id_lang=$cookie->id_lang|intval}
{/if}
{addJsDefL name=FancyboxI18nClose}{l s='Close'}{/addJsDefL}
{addJsDefL name=FancyboxI18nNext}{l s='Next'}{/addJsDefL}
{addJsDefL name=FancyboxI18nPrev}{l s='Previous'}{/addJsDefL}
{addJsDef usingSecureMode=Tools::usingSecureMode()|boolval}
{addJsDef ajaxsearch=Configuration::get('PS_SEARCH_AJAX')|boolval}
{addJsDef instantsearch=Configuration::get('PS_INSTANT_SEARCH')|boolval}
{addJsDef quickView=$quick_view|boolval}
{addJsDef displayList=Configuration::get('PS_GRID_PRODUCT')|boolval}
{/strip}

