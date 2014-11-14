<?php
/**
* ReIMG extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 DavidIQ.com
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
* @license GNU General Public License, version 2 (GPL-2.0)
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// NOTE TO TRANSLATORS:  Text in parenthesis refers to keys on the keyboard
$lang = array_merge($lang, array(
	'ACP_REIMG_SETTINGS_EXPLAIN'	=> 'ReIMG Image Resizer verandert de afbeeldingsgrootte door middel van JavaScript en gebruikt een van de verschillende effecten om de afbeelding te vergroten als een gebruiker op de afbeelding klikt.',
	'REIMG_VERSION'					=> 'ReIMG versie',
	'REIMG_ENABLE'					=> 'Schakel ReIMG Image Resizer in',
	'REIMG_OPTIONS'					=> 'ReIMG Image Resizer opties',
	'REIMG_SETTINGS'				=> 'Image resize instellingen',
	'REIMG_MAX_SIZE'				=> 'Maximale afmeting afbeeldingen',
	'REIMG_MAX_SIZE_EXPLAIN'		=> 'Als een afbeelding groter dan dit is, wordt het verkleind. Typ 0 om deze functie uit te schakelen (zowel horizontaal als verticaal).',
	'REIMG_REL_WIDTH'				=> 'Maximale afbeeldingsbreedte',
	'REIMG_REL_WIDTH_EXPLAIN'		=> 'Als een afbeelding breder is dan dit, wordt het verkleind. Typ 0 om deze functie uit te schakelen.',
	'REIMG_SWAP_PORTRAIT'			=> 'Normaliseer landschap/portret',
	'REIMG_SWAP_PORTRAIT_EXPLAIN'	=> 'Indien je ja hebt gekozen, worden de maximale afmetingen genegeerd, dus landschap en portret afbeeldigen worden gelijkmatig van afmeting veranderd. Indien je nee hebt gekozen wordt de maximale afmeting precies zoals ingevuld gehanteerd.',
	'REIMG_LINK_METHOD'				=> 'Link voor zoomen',
	'REIMG_LINK_METHOD_EXPLAIN'		=> 'Selecteer de methode die wordt gebruikt om een link te tonen naar een normale grote afbeelding.',
	'reimg_linking_methods'			=> array(
		'button'			=> 'Zoomen knop',
		'link'				=> 'Link vergrootte/verkleinde afbeelding',
		'button_link'		=> 'Allebei',
	),
	'REIMG_ZOOM_METHOD'				=> 'Zoom methode',
	'REIMG_ZOOM_METHOD_EXPLAIN'		=> 'Seleteer de methode die wordt gebruikt om de orinele grotere afbeelding te tonen.',
	'reimg_zooming_methods'			=> array(
		'_blank' 		=> array (
								'name'			=>	'Nieuw tabblad',
								'description'	=>	'Opent de afbeelding op volledige grootte in een nieuw venster.',
							),
		'_default' 		=> array (
								'name'			=> 	'Normale link',
								'description'	=>	'Opent de afbeelding op volledige grootte in hetzelfde venster.',
							),
		'_litebox' 		=> array (
								'name'			=>	'Litebox',
								'description'	=>	'Toon een grotere versie van de afbeelding in een litebox dat past in het venster met een zoomknop.',
							),
		'_litebox1'		=> array(
								'name'			=>	'Litebox 1:1',
								'description'	=>	'Toont de afbeelding op volledige grootte in een litebox.',
							),
	),
	'REIMG_RESIZE_SIG_IMG'			=> 'Verander afbeeldingen in het onderschrift van grootte',
	'REIMG_RESIZE_SIG_IMG_EXPLAIN'	=> 'Indien je ja hebt gekozen, worden afbeeldingen in het onderschrift ook van grootte veranderd.',
	'REIMG_ATTACHMENTS'				=> 'ReIMG ook laten werken in bijlagen',
	'REIMG_ATTACHMENTS_EXPLAIN'		=> 'Indien je ja hebt gekozen worden afbeeldingen in bijlagen met ReIMG weergegeven.',
	'REIMG_UPDATED'					=> 'ReIMG Image Resizer instellingen zijn succesvol gewijzigd.',
));
