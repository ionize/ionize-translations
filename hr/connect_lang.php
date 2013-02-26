<?php

/*
|--------------------------------------------------------------------------
| Connect library Language file
| Language : 	English
| Translater :	Partikule Studio
|
| This lang file can be replaced by a theme one.
| Simply copy this file in the folder /themes/your_theme/language/xx/
| and modify the translations elements.
|
|--------------------------------------------------------------------------
*/

// Main library language elements
$lang['connect_login_failed'] = 'Unijeli ste pogrešno korisničko ime ili lozinku.';
$lang['connect_access_denied'] = 'Vi nemate pristupa u %s';
$lang['connect_missing_parameters']	= 'Parametar(i) %s nedostaje';
$lang['connect_parameter_error'] = 'Parametar za %s je pogrešan.';
$lang['connect_user_save_impossible'] = 'Ne možemo spremiti podatke u sustav, molimo pokušajte ponovo ili nas kontaktirajte.';
$lang['connect_user_already_exists'] = 'Korisnik s navedenim podacima već postoji. Molimo upotrijebite drugo koriničko ime ili email adresu.';
$lang['connect_blocked'] = 'Vi ste blokirani zbog previše pogrešnih pokušaja prijave, molimo pokušajte ponovo %s';
$lang['connect_cannot_ban_yourself'] = 'Ne možete sami sebe isključiti';
$lang['connect_register_success'] = 'Uspješno ste registrirani.';
$lang['connect_register_success_verify_user'] = 'Uspješno ste registrirani ali mi moramo provijeriti Vaše podatke. Email Vam je poslan, molimo provjerite je i kliknite aktivacijski link sadržan u poruci.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = 'Registracija';
$lang['connect_admin_mail_title'] = 'Registracija';
$lang['connect_admin_mail_intro'] = 'Korisnik se upravo registrirao na internetske stranice.';
$lang['connect_admin_mail_nom'] = 'Ime';
$lang['connect_admin_mail_login'] = 'Prijava';
$lang['connect_admin_mail_email'] = 'Email';
$lang['connect_admin_mail_activation_link'] = 'Aktivacijski link';

// Activation mail to User
$lang['connect_user_mail_subject'] = 'Vaša registracija';
$lang['connect_user_mail_activated'] = 'Račun aktiviran';
$lang['connect_act_user_mail_title'] = 'Dobrodošli !';
$lang['connect_act_user_mail_intro'] = 'Upravo ste se registrirali na naše internetske stranice, hvala Vam.';
$lang['connect_act_user_mail_text'] = 'Za potvrdu Vaše registracije, kliknite na aktivacijski link.';
$lang['connect_act_user_mail_activation_link'] = 'Aktivacijski link';

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = 'Dobrodošli !';
$lang['connect_wait_user_mail_intro'] = 'Upravo ste se registrirali na naše internetske stranice, hvala Vam.';
$lang['connect_wait_user_mail_text'] = 'Vaš račun će ubrzo biti aktiviran od strane administratora.';

// Registration views
$lang['connect_user_registration_title'] = 'Registracija uspjela';
$lang['connect_user_registration_message'] = 'Primit ćete email s registriranim podacima i upute za potvrdu registracije';

// Activation views
$lang['connect_home_page'] = 'Naslovna stranica';
$lang['connect_activation_title'] = 'Aktivacija računa';
$lang['connect_user_activated_message'] = 'Vaš račun je aktiviran.<br/>Možete se spojiti s naslovne stranice';
$lang['connect_user_activated_error'] = 'Dogodila se pogreška prilikom aktivacije Vašeg računa. Možda ste ga već aktivirali, ili koristite pogrešne informacije? Pokušajte se prijaviti, ili provijerite email koji smo Vam poslali pa pokušajte ponovo.';

$lang['connect_admin_activated_message'] = 'Račun je sada aktiviran.<br/>Email je poslan korisniku kako bi ga obavijestili.';
$lang['connect_admin_activated_error'] = 'Dogodila se pogreška prilikom aktivacije Vašeg računa. Možda ste ga već aktivirali, ili koristite pogrešne informacije?';


/* End of file connect_lang.php */
/* Location: ./application/language/en/connect_lang.php */
