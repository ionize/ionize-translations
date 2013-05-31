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
| To be used for form labels.
| Also used by Form Validation to display "human" name for each field in the errors messages.
| Declared as "label" for each fields of forms set in /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_label_email'] = "Email";
$lang['form_label_name'] = "Nom";
$lang['form_label_firstname'] = "Prénom";
$lang['form_label_lastname'] = "Nom";
$lang['form_label_subject'] = "Sujet";
$lang['form_label_message'] = "Message";
$lang['form_label_screen_name'] = "Nom Affiché";
$lang['form_label_username'] = "Nom utilisateur";
$lang['form_label_birthdate'] = "Date de naissance";
$lang['form_label_gender'] = "Genre";
$lang['form_label_gender_female'] = "Femme";
$lang['form_label_gender_male'] = "Homme";
$lang['form_label_gender_unisex'] = "Je préfère ne pas le dire";
$lang['form_label_login'] = "Login";
$lang['form_label_password'] = "Mot de passe";
$lang['form_label_password_confirmation'] = "Confirmer mot de passe";
$lang['form_label_delete_account'] = "Supprimer le compte";

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
$lang['form_button_save_profile'] = "Sauver profil";
$lang['form_button_password_back'] = "Récupérer mon mot de passe";

/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration : Email to Admin
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

// Contact : Email to Admin
$lang['mail_website_contact_subject'] = "Message du Contact Form";
$lang['mail_website_contact_message'] = "Un visiteur vous a envoyé un message via le site";

// Contact : Email to user
$lang['mail_user_contact_subject'] = "Merci pour votre message à %s";
$lang['mail_user_contact_intro'] = "%s,";
$lang['mail_user_contact_message'] = "Merci pour votre message.<br/>Nous allons vous répondre très vite.";

// Message about automatic message
$lang['mail_automatic_message_warning'] = "Ce message est généré automatiquement. Merci de ne pas y répondre.";


/*
|--------------------------------------------------------------------------
| Messages
| Success messages for contact / login / registration forms
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

$lang['form_contact_error_title'] = "Une erreur est survenue.";
$lang['form_contact_error_message'] = "Peut-être des informations manquantes. Vérifiez le formulaire.";
$lang['form_contact_success_title'] = "Votre message a été envoyé !<br/>";
$lang['form_contact_success_message'] = "Merci pour votre message. Nous allons vous répondre très vite.";


/*
|--------------------------------------------------------------------------
| Validation Errors of custom callbacks
|
| For custom form validation translation, copy the wished file from
| /system/language/xx/form_validation_lang.php to your theme language folder
| /themes/my_theme/language/xx/form_validation_lang.php and adapt it.
|
|--------------------------------------------------------------------------
|
*/

