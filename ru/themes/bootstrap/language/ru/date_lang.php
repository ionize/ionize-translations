<?php

/*
 * Date format, translated
 * To use with the a date field through tags
 * This format uses days and months translation like defined in this file, if the PHP date format code is used.
 *
 *
 * Example of usage : 
 * 		$lang['dateformat_short'] = 'd m Y';	View call : <ion:date format="short" />		Output : 15 01 2011
 * 		$lang['dateformat_medium'] = 'd M Y'; 	View call : <ion:date format="medium" />	Output : 15 jan 2011
 * 		$lang['dateformat_long'] = 'l F d Y';	View call : <ion:date format="long" />		Output : saturday january 15 2011
 *
 * You can create your own format and call it in views :
 *		$lang['dateformat_complete'] = 'l F d Y H:i:s';		View call : <ion:date format="complete" />		Output : saturday january 15 2011 20:54:21

 *
 */
$lang['dateformat_short'] = 'm d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_long'] = 'F d Y';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/* 
 * PHP day date format 'D' translations
 * Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
 * Ex : <articles:date format="D" manip="ucase" />
 */
$lang['mon'] = 'пон';
$lang['tue'] = 'вт';
$lang['wed'] = 'ср';
$lang['thu'] = 'чет';
$lang['fri'] = 'пят';
$lang['sat'] = 'суб';
$lang['sun'] = 'вск';

/* 
 * PHP day date format 'l' translations
 */
$lang['monday'] = 'понедельник';
$lang['tuesday'] = 'вторник';
$lang['wednesday'] = 'среда';
$lang['thursday'] = 'четверг';
$lang['friday'] = 'пятница';
$lang['saturday'] = 'суббоота';
$lang['sunday'] = 'воскресенье';

/* 
 * PHP month date format 'M' translations
 */
$lang['jan'] = 'янв';
$lang['feb'] = 'фев';
$lang['mar'] = 'март';
$lang['apr'] = 'апр';
$lang['may'] = 'май';
$lang['jun'] = 'июнь';
$lang['jul'] = 'июль';
$lang['aug'] = 'авг';
$lang['sep'] = 'сент';
$lang['oct'] = 'окт';
$lang['nov'] = 'ноя';
$lang['dec'] = 'дек';

/* 
 * PHP month date format 'F' translations
 */
$lang['january'] = 'январь';
$lang['february'] = 'февраль';
$lang['march'] = 'март';
$lang['april'] = 'апрель';
$lang['may'] = 'май';
$lang['june'] = 'июнь';
$lang['july'] = 'июль';
$lang['august'] = 'август';
$lang['september'] = 'сентябрь';
$lang['october'] = 'октябрь';
$lang['november'] = 'ноябрь';
$lang['december'] = 'декабрь';


?>