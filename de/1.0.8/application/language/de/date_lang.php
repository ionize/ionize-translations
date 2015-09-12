<?php
/*
|--------------------------------------------------------------------------
| Ionize Date Language file
|
| To use with the a date field through tags
| This format uses days and months translation like defined in this file, if the PHP date format code is used.
|
| Example of usage:
|  		$lang['dateformat_short'] = 'd m Y';	View call: <ion:date format="short" />		Output: 15 01 2011
| 		$lang['dateformat_medium'] = 'd M Y'; 	View call: <ion:date format="medium" />	Output: 15 jan 2011
|  		$lang['dateformat_long'] = 'l F d Y';	View call: <ion:date format="long" />		Output: saturday january 15 2011
|
| You can create your own format and call it in views:
| 		$lang['dateformat_complete'] = 'l F d Y H:i:s';		View call: <ion:date format="complete" />		Output: saturday january 15 2011 20:54:21
|
|--------------------------------------------------------------------------
*/

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';
$lang['dateformat_long'] = 'F d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_short'] = 'm d Y';


/*
|--------------------------------------------------------------------------
| PHP day date format 'D' translations
| Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
| Ex: <articles:date format="D" manip="ucase" />
|--------------------------------------------------------------------------
*/
$lang['mon'] = 'mo';
$lang['tue'] = 'di';
$lang['wed'] = 'mi';
$lang['thu'] = 'do';
$lang['fri'] = 'fr';
$lang['sat'] = 'sa';
$lang['sun'] = 'so';


/*
|--------------------------------------------------------------------------
| PHP day date format 'l' translations
|--------------------------------------------------------------------------
*/
$lang['monday'] = 'montag';
$lang['tuesday'] = 'dienstag';
$lang['wednesday'] = 'mittwoch';
$lang['thursday'] = 'donnerstag';
$lang['friday'] = 'freitag';
$lang['saturday'] = 'samstag';
$lang['sunday'] = 'sonntag';


/*
|--------------------------------------------------------------------------
| PHP month date format 'M' translations
|--------------------------------------------------------------------------
*/
$lang['jan'] = 'jan';
$lang['feb'] = 'feb';
$lang['mar'] = 'mar';
$lang['apr'] = 'apr';
$lang['may'] = 'may';
$lang['jun'] = 'jun';
$lang['jul'] = 'jul';
$lang['aug'] = 'aug';
$lang['sep'] = 'sep';
$lang['oct'] = 'okt';
$lang['nov'] = 'nov';
$lang['dec'] = 'dez';


/*
|--------------------------------------------------------------------------
| PHP month date format 'F' translations
|--------------------------------------------------------------------------
*/
$lang['january'] = 'januar';
$lang['february'] = 'februar';
$lang['march'] = 'märz';
$lang['april'] = 'april';
$lang['may'] = 'may';
$lang['june'] = 'juni';
$lang['july'] = 'july';
$lang['august'] = 'august';
$lang['september'] = 'september';
$lang['october'] = 'oktober';
$lang['november'] = 'november';
$lang['december'] = 'dezember';