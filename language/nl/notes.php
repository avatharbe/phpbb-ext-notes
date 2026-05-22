<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'NOTES'				=> 'Notities',
	'NOTES_DESCRIPTION'	=> 'De notities die je hier ziet, zijn voor niemand anders zichtbaar, ook niet voor beheerders en moderators.',
	'SAVE_NOTES'		=> 'Notities opslaan',
	'NOTES_SAVED'		=> 'Je notities zijn opgeslagen.<br /><br /> <a href="%s">Terug naar notities</a>',
));
