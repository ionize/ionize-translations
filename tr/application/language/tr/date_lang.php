<?php

/*
 * Tarih formatı, çevirisi
 *
 * Language : 	Türkçe
 * Translater :	İskender TOTOĞLU / ALTI VE BİR BİLİŞİM TEKNOLOJİLERİ / http://www.altivebir.com.tr
 *
 * Taglar ile bir tarigh alanını kullanmak
 * Eğer PHP tarih formatı kodu kullanılıyor ise, bu format günleri ve ayların çevirilerini bu dosyada olduğu gibi kullanıyor.
 *
 *
 * Örnek Kullanım : 
 * 		$lang['dateformat_short'] = 'd m Y';	Görüntüleme : <ion:date format="short" />		Çıktı : 15 01 2011
 * 		$lang['dateformat_medium'] = 'd M Y'; 	Görüntüleme : <ion:date format="medium" />		Çıktı : 15 jan 2011
 * 		$lang['dateformat_long'] = 'l F d Y';	Görüntüleme : <ion:date format="long" />		Çıktı : cumartesi ocak 15 2011
 *
 * Kendi formatınızı oluşturup görüntüleme de çalıştırabilirsiniz :
 *		$lang['dateformat_complete'] = 'l F d Y H:i:s';		Görüntüleme : <ion:date format="complete" />		Çıktı : cumartesi ocak 15 2011 20:54:21

 *
 */
$lang['dateformat_short'] = 'm d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_long'] = 'F d Y';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/* 
 * PHP (Gün) tarih formatı 'D' çevirileri
 * Küçük karakter. Diğer gün tarih formatları (Ucase, vb.) "manip" tag önekini kullanın
 * Örnek : <articles:date format="D" manip="ucase" />
 */
$lang['mon'] = 'Pt';
$lang['tue'] = 'Sa';
$lang['wed'] = 'Ça';
$lang['thu'] = 'Pe';
$lang['fri'] = 'Cu';
$lang['sat'] = 'Ct';
$lang['sun'] = 'Pz';
/* 
 * PHP (Gün) tarih formatı 'l' çevirileri
 */
$lang['monday'] = 'Pazartesi';
$lang['tuesday'] = 'Salı';
$lang['wednesday'] = 'Çarşamba';
$lang['thursday'] = 'Perşembe';
$lang['friday'] = 'Cuma';
$lang['saturday'] = 'Cumartesi';
$lang['sunday'] = 'Pazar';
/* 
 * PHP (Ay) tarih formatı 'M' çevirileri
 */
$lang['jan'] = 'Oca';
$lang['feb'] = 'Şub';
$lang['mar'] = 'Mar';
$lang['apr'] = 'Nis';
$lang['may'] = 'Mayıs';
$lang['jun'] = 'Haz';
$lang['jul'] = 'Tem';
$lang['aug'] = 'Ağu';
$lang['sep'] = 'Eyl';
$lang['oct'] = 'Eki';
$lang['nov'] = 'Kas';
$lang['dec'] = 'Arl';
/* 
 * PHP (Ay) tarih formatı 'F' çevirileri
 */
$lang['january'] = 'Ocak';
$lang['february'] = 'Şubat';
$lang['march'] = 'Mart';
$lang['april'] = 'Nisan';
$lang['may'] = 'Mayıs';
$lang['june'] = 'Haziran';
$lang['july'] = 'Temmuz';
$lang['august'] = 'Ağustos';
$lang['september'] = 'Eylül';
$lang['october'] = 'Ekim';
$lang['november'] = 'Kasım';
$lang['december'] = 'Aralık';
?>