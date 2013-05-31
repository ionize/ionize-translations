<?php
/*
|--------------------------------------------------------------------------
| Ionize Connect library Language file
|
| This lang file can be replaced by a theme one.
| Simply copy this file in the folder /themes/your_theme/language/xx/
| and modify the translations elements.
|
|--------------------------------------------------------------------------
*/

// Main library language elements
$lang['connect_login_failed'] = "The login information you provided could not be authentificated. Either the username or the password you entered are wrong. Please try again.";
$lang['connect_access_denied'] = "Vous n'avez pas accès à %s";
$lang['connect_missing_parameters']	= "Le paramètre %s est manquant";
$lang['connect_parameter_error'] = "Le paramètre passé à %s est incorrect.";
$lang['connect_user_save_impossible'] = "Nous n'avons pas été en mesure de sauvegarder vos données. Veuillez recommencer ou nous contacter.";
$lang['connect_user_already_exists'] = "Ce compte existe déjà. Veuillez changer l'adresse email.";
$lang['connect_blocked'] = "You have been blocked because of too many failed logins, please try again %s";
$lang['connect_cannot_ban_yourself'] = "Vou sne pouvez pas vous bannir vous-même";
$lang['connect_register_success'] = "Enregistrement effectué avec succès";
$lang['connect_register_success_verify_user'] = "Enregistrement effectué avec succès. Veuillez confirmer votre enregistrement en cliquant sur le lien d'activation que nous vous avons envoyé par email.";

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = "Enregistrement";
$lang['connect_admin_mail_title'] = "Enregistrement";
$lang['connect_admin_mail_intro'] = "Un utilisateur s'est enregistré sur votre site.";
$lang['connect_admin_mail_nom'] = "Nom";
$lang['connect_admin_mail_login'] = "Login";
$lang['connect_admin_mail_email'] = "Email";
$lang['connect_admin_mail_activation_link'] = "Lien d'activation";

// Activation mail to User
$lang['connect_user_mail_subject'] = "Votre enregistrement";
$lang['connect_user_mail_activated'] = "Compte activé";
$lang['connect_act_user_mail_title'] = "Bienvenue !";
$lang['connect_act_user_mail_intro'] = "Vous vous êtes enregistré sur le site.<br/>Nous vous en remercions.";
$lang['connect_act_user_mail_text'] = "Pour confirmer votre enregistrement, cliquez sur le lien d'activation ci-dessous.";
$lang['connect_act_user_mail_activation_link'] = "Votre lien d'activation";

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = "Bienvenue !";
$lang['connect_wait_user_mail_intro'] = "Vous vous êtes enregistré sur le site.<br/>Nous vous en remercions.";
$lang['connect_wait_user_mail_text'] = "Votre compte sera validé par l'administrateur du site au plus vite.";

// Registration views
$lang['connect_user_registration_title'] = "Enregistrement réussi";
$lang['connect_user_registration_message'] = "Vous allez recevoir un email avec vos identifiants et les instructions d'activation de votre compte";

// Activation views
$lang['connect_home_page'] = "Page d'accueil";
$lang['connect_activation_title'] = "Activation du compte";
$lang['connect_user_activated_message'] = "Votre compte est activé.<br/>Vous pouvez vous connecter depuis la page d'accueil du site.";
$lang['connect_user_activated_error'] = "Une erreur est survenue à l'activation de ce compte.<br/>Peut-être ce compte est-il déjà activé ou peut-être les informations utilisées sont-elles erronées ? <br/>Essayez de vous connecter avec votre compte ou vérifiez le mail que vous avez reçu et tentez à nouveau une activation.";

$lang['connect_admin_activated_message'] = "Ce compte est à présent activé.<br/>Un mail vient d'être envoyé à l'abonné pour le prévenir.";
$lang['connect_admin_activated_error'] = "Une erreur est survenue à l'activation de ce compte.<br/>Peut-être ce compte est-il déjà activé ou peut-être les informations utilisées sont-elles erronées ?";

