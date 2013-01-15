<?php
/*
|--------------------------------------------------------------------------
| Ionize Form library Language file
|
| Copy this file to /themes/<my_theme/language/xx/form_lang.php
| to replace these translations with your one.
|
| IMPORTANT :
| Do not modify this file.
| It will be overwritten when migrating to a new Ionize release.
|
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Labels
| To be used for form lables.
| Also used by Form Validation to display "human" name for each field in the errors messages.
| Declared as "label" for each fields of forms set in /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_label_email'] = 'Email';
$lang['form_label_name'] = 'Nom';
$lang['form_label_firstname'] = 'Prénom';
$lang['form_label_lastname'] = 'Nom';
$lang['form_label_screen_name'] = 'Nom Affiché';
$lang['form_label_username'] = 'Nom utilisateur';
$lang['form_label_birthdate'] = 'Date de naissance';
$lang['form_label_gender'] = 'Genre';
$lang['form_label_login'] = 'Login';
$lang['form_label_password'] = 'Mot de passe';
$lang['form_label_password_confirmation'] = 'Confirmer mot de passe';
$lang['form_label_delete_account'] = 'Supprimer le compte';

/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['form_button_send'] = "Envoyer";
$lang['form_button_save'] = "Enregistrer";
$lang['form_button_register'] = "Inscrire";
$lang['form_button_login'] = "Login";
$lang['form_button_logout'] = "Déconnexion";
$lang['form_button_post'] = "Poster";
$lang['form_button_answer'] = "Répondre";

/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration : Email to the website email
$lang['mail_website_registration_subject'] = "Quelqu'un s'est inscrit sur le site";
$lang['mail_website_registration_message'] = "Voici les détails du nouveau membre.";

// Registration : Email to user
$lang['mail_user_registration_subject'] = "Inscription sur %s";
$lang['mail_user_registration_intro'] = "Cher %s,";
$lang['mail_user_registration_message'] = "Vous venez de vous inscrire sur <b>%s</b>.<br/>Voici les informations de connexion.";
$lang['mail_user_registration_activate'] = "Avant de vous connecter, vous devez activer votre compte en suivant ce lien :";

// New Password : Email to user
$lang['mail_user_password_subject'] = "Nouveau mot de passe pour votre compte sur %s";
$lang['mail_user_password_intro'] = "Cher %s,";
$lang['mail_user_password_message'] = "Vous venez de demander un nouveau mot de passe pour accéder au site <b>%s</b>.<br/>Voici vos nouvelles informations de connexion :";

/*
|--------------------------------------------------------------------------
| Messages
| Success messages for login / registration forms
| Declared as 'success' for each form in form setup : /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_not_logged'] = "Vous n'êtes pas connecté.";

$lang['form_login_success_message'] = "Vous êtes connecté avec succès.";
$lang['form_login_error_message'] = "Erreur : Vérifier vos identifiant / mot de passe.";
$lang['form_login_not_found_message'] = "Utilisateur inconnu.";
$lang['form_login_not_activated_message'] = "Ce compte n'est pas activé. Vérifiez vos emails et cliquez sur le lien d'activation.";

$lang['form_register_success_message'] = "Vous vous êtes inscrit avec succès.";
$lang['form_register_error_message'] = "Erreur : echec lors de l'inscription.";

$lang['form_profile_success_message'] = "Données du profil enregistrées";
$lang['form_profile_error_message'] = "Cet utilisateur existe déjà. Veuillez changer d'identifiant ou d'email";
$lang['form_profile_account_deleted'] = "Compte supprimé";

$lang['form_password_error_message'] = "Une erreur est survenue.";
$lang['form_password_not_found_message'] = "Cet email ne semble pas être dans notre système";
$lang['form_password_success_message'] = "Un email avec votre nouveau mot de passe vient de vous être envoyé.";

/*
|--------------------------------------------------------------------------
| Validation Errors
|--------------------------------------------------------------------------
*/
$lang['form_error_javascript_required'] = "Vous devez avoir javascript activé pour envoyé ce formulaire.";
$lang['form_error_spam'] = "Merci pour votre bon Spam !";
$lang['form_error_required'] = "Le champ <strong>%s</strong> est obligatoire.";
$lang['form_error_isset'] = "Le champ <strong>%s</strong> doit contenir une valeur.";
$lang['form_error_valid_email'] = "Le champ <strong>%s</strong> doit contenir une adresse email valide.";
$lang['form_error_valid_emails'] = "Le champ <strong>%s</strong> ne doit contenir que des adresses emails valides.";
$lang['form_error_valid_url'] = "Le champ <strong>%s</strong> doit contenir une URL valide.";
$lang['form_error_valid_ip'] = "Le champ <strong>%s</strong> doit contenir une adresse IP valide.";
$lang['form_error_min_length'] = "Le champ <strong>%s</strong> doit contenir au minimum %s catact&egrave;res.";
$lang['form_error_max_length'] = "Le champ <strong>%s</strong> ne peut contenir plus de %s catact&egrave;res.";
$lang['form_error_exact_length'] = "Le champ <strong>%s</strong> doit contenir exactement %s catact&egrave;res.";
$lang['form_error_alpha'] = "Le champ <strong>%s</strong> ne peut contenir que des caract&egrave;res alphab&eacute;tiques.";
$lang['form_error_alpha_numeric'] = "Le champ <strong>%s</strong> ne peut contenir que des caract&egrave;res alphanum&eacute;riques.";
$lang['form_error_alpha_dash'] = "Le champ <strong>%s</strong> ne peut contenir que des caract&egrave;res alphanum&eacute;riques, des tirets bas (underscore) et des traits d'union.";
$lang['form_error_numeric'] = "Le champ <strong>%s</strong> doit contenir un nombre.";
$lang['form_error_is_numeric'] = "Le champ <strong>%s</strong> ne peut contenir que des caract&egrave;res num&eacute;riques.";
$lang['form_error_integer'] = "Le champ <strong>%s</strong> doit contenir un nombre entier.";
$lang['form_error_matches'] = "Le champ <strong>%s</strong> ne correspond pas au champ <strong>%s</strong>.";
$lang['form_error_is_natural'] = "Le champ <strong>%s</strong> doit contenir un nombre positif.";
$lang['form_error_is_natural_no_zero']	= "Le champ <strong>%s</strong> doit contenir un nombre plus grand que z&eacute;ro.";
$lang['form_error_restricted_field'] = "Les données ont été transmises, mais elles ne sont pas autorisées.";
$lang['form_error_terms'] = "Vous devez accpeter les conditions d'utilisation.";
$lang['form_error_upload_something'] = "Quelque chose de mauvais est survenu durant l'upload des fichiers.";
$lang['form_error_upload_file_size'] = "Le fichier uploadé ne doit pas exéder 1 Mo.";
$lang['form_error_upload_file_type'] = "Sont autorisés uniquement les JPEGs, PNGs et GIFs.";

