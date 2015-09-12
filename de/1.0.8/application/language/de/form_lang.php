<?php
/*
|--------------------------------------------------------------------------
| Ionize Form library Language file
|
| Copy this file to /themes/<my_theme/language/xx/form_lang.php
| to replace these translations with your one.
|
| IMPORTANT:
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
$lang['form_label_address'] = 'Addresse';
$lang['form_label_birthdate'] = 'Geburtsdatum';
$lang['form_label_city'] = 'Stadt';
$lang['form_label_company'] = 'Firma';
$lang['form_label_country'] = 'Land';
$lang['form_label_delete_account'] = 'Konto Löschen';
$lang['form_label_email'] = 'Email';
$lang['form_label_firstname'] = 'Vorname';
$lang['form_label_gender'] = 'Geschlecht';
$lang['form_label_gender_female'] = 'Weiblich';
$lang['form_label_gender_male'] = 'Männlich';
$lang['form_label_gender_unisex'] = 'Möchte ich nicht sagen';
$lang['form_label_lastname'] = 'Nachame';
$lang['form_label_login'] = 'Login';
$lang['form_label_message'] = 'Mitteilung';
$lang['form_label_name'] = 'Name';
$lang['form_label_password'] = 'Passwort';
$lang['form_label_password_confirmation'] = 'Passwort wiederholen';
$lang['form_label_phone'] = 'Tel';
$lang['form_label_screen_name'] = 'Spitzname';
$lang['form_label_state'] = 'Bundesland/Kanton';
$lang['form_label_subject'] = 'Betreff';
$lang['form_label_topic'] = 'Thema';
$lang['form_label_username'] = 'Benutzername';
$lang['form_label_zip'] = 'PLZ';


/*
|--------------------------------------------------------------------------
| Placeholders
|--------------------------------------------------------------------------
*/
$lang['form_placeholder_address'] = 'Addresse eingeben';
$lang['form_placeholder_birthdate'] = 'Geburtsdatum eingeben';
$lang['form_placeholder_city'] = 'Stadt eingeben';
$lang['form_placeholder_company'] = 'Firma  eingeben';
$lang['form_placeholder_country'] = 'Land  eingeben';
$lang['form_placeholder_email'] = 'Email  eingeben';
$lang['form_placeholder_firstname'] = 'Vorname  eingeben';
$lang['form_placeholder_gender'] = 'Geschlecht  eingeben';
$lang['form_placeholder_lastname'] = 'Nachname  eingeben';
$lang['form_placeholder_login'] = 'Login  eingeben';
$lang['form_placeholder_message'] = 'Mitteilung  eingeben';
$lang['form_placeholder_name'] = 'Name  eingeben';
$lang['form_placeholder_password'] = 'Passwort  eingeben';
$lang['form_placeholder_phone'] = 'Telefonnr  eingeben';
$lang['form_placeholder_screen_name'] = 'Spitzname  eingeben';
$lang['form_placeholder_state'] = 'Bundesland/Kanton  eingeben';
$lang['form_placeholder_subject'] = 'Betreff  eingeben';
$lang['form_placeholder_username'] = 'Benutzername  eingeben';
$lang['form_placeholder_zip'] = 'PLZ  eingeben';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['form_button_answer'] = 'Antwort';
$lang['form_button_login'] = 'Login';
$lang['form_button_logout'] = 'Logout';
$lang['form_button_password_back'] = 'Passwort zurück erhalten';
$lang['form_button_post'] = 'Post';
$lang['form_button_register'] = 'Registrieren';
$lang['form_button_save'] = 'Speichern';
$lang['form_button_save_profile'] = 'Profil speichern';
$lang['form_button_send'] = 'Senden';
$lang['form_button_send_message'] = 'Mitteilung absenden';


/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration: Email to Admin
$lang['mail_website_registration_message'] = 'Here are the details of this new member.';
$lang['mail_website_registration_subject'] = 'Someone registered on the website';


// Registration: Email to user
$lang['mail_user_registration_activate'] = 'Before login, you need to activate your account through this link:';
$lang['mail_user_registration_intro'] = 'Dear %s,';
$lang['mail_user_registration_message'] = 'You just registered on <b>%s</b>.<br/>Here are your login informations.';
$lang['mail_user_registration_subject'] = 'Registration on %s';


// New Password: Email to user
$lang['mail_user_password_intro'] = 'Dear %s,';
$lang['mail_user_password_message'] = 'You just asked for one new password to access to the website <b>%s</b>.<br/>Here are your new login informations:';
$lang['mail_user_password_subject'] = 'New password for your account on %s';


// Contact: Email to Admin
$lang['mail_website_contact_message'] = 'A visitor left you a message through the website contact form.';
$lang['mail_website_contact_subject'] = 'Message from Contact Form';


// Contact: Email to user
$lang['mail_user_contact_intro'] = 'Dear %s,';
$lang['mail_user_contact_message'] = 'Thank you for your message.<br/>We will answer you very quickly.';
$lang['mail_user_contact_posted_data'] = 'Here is the data you submitted with the form.';
$lang['mail_user_contact_subject'] = 'Thank you for your message to %s';


// Message about automatic message
$lang['mail_automatic_message_warning'] = 'This message was automatically generated. Please do not answer.';


/*
|--------------------------------------------------------------------------
| Messages
| Success messages for contact / login / registration forms
| Declared as 'success' for each form in form setup: /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_alert_error_message'] = 'Check the form, something is perhaps missing...';
$lang['form_alert_error_title'] = 'Oops! We got one error!';
$lang['form_alert_success_message'] = 'Everything was OK!';
$lang['form_alert_success_title'] = 'Success!';
$lang['form_contact_error_message'] = 'perhaps just some missing fields. Please check the form...';
$lang['form_contact_error_title'] = 'Oops, we got an error.';
$lang['form_contact_success_message'] = 'Thank you for your message, we will answer you very quickly!';
$lang['form_contact_success_title'] = 'Your message was sent successfully!';
$lang['form_login_error_message'] = 'Error: Check your login / password.';
$lang['form_login_not_activated_message'] = 'This account is not activated. Check your emails and click on the activation link.';
$lang['form_login_not_found_message'] = 'User not found.';
$lang['form_login_success_message'] = 'You successfully logged in.';
$lang['form_not_logged'] = "You're not logged in.";
$lang['form_note_password_change'] = 'Leave it empty if you don\'t want to change your password.';
$lang['form_password_error_message'] = 'Oups, an error occurred.';
$lang['form_password_not_found_message'] = 'This email seems not to be in our system';
$lang['form_password_success_message'] = 'An email with your new password has just been sent to you.';
$lang['form_profile_account_deleted'] = 'Account deleted';
$lang['form_profile_error_message'] = 'This user already exists. Please change your username or email';
$lang['form_profile_success_message'] = 'Profile data saved';
$lang['form_register_error_message'] = 'Error: Registration not successful.';
$lang['form_register_success_message'] = 'You successfully registered.<br/>We just sent you an email with your account activation instructions.';


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

