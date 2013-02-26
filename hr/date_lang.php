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
$lang['dateformat_long'] = 'd.m.Y.';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/* 
 * PHP day date format 'D' translations
 * Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
 * Ex : <articles:date format="D" manip="ucase" />
 */
$lang['mon'] = 'pon';
$lang['tue'] = 'uto';
$lang['wed'] = 'sri';
$lang['thu'] = 'čet';
$lang['fri'] = 'pet';
$lang['sat'] = 'sub';
$lang['sun'] = 'ned';

/* 
 * PHP day date format 'l' translations
 */
$lang['monday'] = 'ponedjeljak';
$lang['tuesday'] = 'utorak';
$lang['wednesday'] = 'srijeda';
$lang['thursday'] = 'četvrtak';
$lang['friday'] = 'petak';
$lang['saturday'] = 'subota';
$lang['sunday'] = 'nedjelja';

/* 
 * PHP month date format 'M' translations
 */
$lang['jan'] = 'sij';
$lang['feb'] = 'vel';
$lang['mar'] = 'ožu';
$lang['apr'] = 'tra';
$lang['may'] = 'svi';
$lang['jun'] = 'lip';
$lang['jul'] = 'srp';
$lang['aug'] = 'kol';
$lang['sep'] = 'ruj';
$lang['oct'] = 'lis';
$lang['nov'] = 'stu';
$lang['dec'] = 'pro';

/* 
 * PHP month date format 'F' translations
 */
$lang['january'] = 'siječanj';
$lang['february'] = 'veljača';
$lang['march'] = 'ožujak';
$lang['april'] = 'travanj';
$lang['may'] = 'svibanj';
$lang['june'] = 'lipanj';
$lang['july'] = 'srpanj';
$lang['august'] = 'kolovoz';
$lang['september'] = 'rujan';
$lang['october'] = 'listopad';
$lang['november'] = 'studeni';
$lang['december'] = 'prosinac';


?>