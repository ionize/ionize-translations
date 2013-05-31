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
$lang['form_label_email'] 			= 'Email';
$lang['form_label_name'] 			= 'Имя';
$lang['form_label_firstname'] 		= 'Имя';
$lang['form_label_lastname'] 		= 'Фамилия';
$lang['form_label_subject'] 		= 'Subject';
$lang['form_label_message'] 		= 'Message';
$lang['form_label_screen_name'] 	= 'Отображаемое имя';
$lang['form_label_username'] 		= 'Имя пользователя';
$lang['form_label_birthdate'] 		= 'Дата рождения';
$lang['form_label_gender'] 			= 'Пол';
$lang['form_label_gender_female'] 	= 'Female';
$lang['form_label_gender_male'] 	= 'Male';
$lang['form_label_gender_unisex'] 	= 'I prefer not to say';
$lang['form_label_login'] 			= 'Логин';
$lang['form_label_password'] 		= 'Пароль';
$lang['form_label_password_confirmation'] = 'Подтверждение пароля';
$lang['form_label_delete_account'] 	= 'Удалить аккаунт';

/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['form_button_send'] = "Отправить";
$lang['form_button_save'] = "Сохранить";
$lang['form_button_register'] = "Регистрация";
$lang['form_button_login'] = "Войти";
$lang['form_button_logout'] = "Выйти";
$lang['form_button_post'] = "Сообщение";
$lang['form_button_answer'] = "Ответить";
$lang['form_button_save_profile'] = "Save Profile";
$lang['form_button_password_back'] = "Get password back";

/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration : Email to the website email
$lang['mail_website_registration_subject'] = "Кто-то зарегистрировался на сайте";
$lang['mail_website_registration_message'] = "Здесь подробности нового пользователя";

// Registration : Email to user
$lang['mail_user_registration_subject'] = "Регистрация на %s";
$lang['mail_user_registration_intro'] = "Уважаемый %s,";
$lang['mail_user_registration_message'] = "Вы только что зарегистрировались на <b>%s</b>.<br/>Вот ваши данные для входа.";
$lang['mail_user_registration_activate'] = "Прежде чем войти, необходимо активировать свой аккаунт по этой ссылке :";

// New Password : Email to user
$lang['mail_user_password_subject'] = "Новый пароль для вашей учетной записи на %s";
$lang['mail_user_password_intro'] = "Уважаемый %s,";
$lang['mail_user_password_message'] = "Вы просто попросил один новый пароль для входа на сайт <b>%s</b>.<br/>Здесь новая информация для входа";

// Contact : Email to Admin
$lang['mail_website_contact_subject'] = "Message from Contact Form";
$lang['mail_website_contact_message'] = "One visitor let you a message through the website contact form.";

// Contact : Email to user
$lang['mail_user_contact_subject'] = "Thank you for your message to %s";
$lang['mail_user_contact_intro'] = "Dear %s,";
$lang['mail_user_contact_message'] = "Thank you for your message.<br/>We will answer you very quickly.";

// Message about automatic message
$lang['mail_automatic_message_warning'] = "This message was automatically generated. Please do not answer.";


/*
|--------------------------------------------------------------------------
| Messages
| Success messages for login / registration forms
| Declared as 'success' for each form in form setup : /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_not_logged'] = "Вы не вошли";

$lang['form_login_success_message'] = "Вы успешно прошли идентификацию";
$lang['form_login_error_message'] = "Ошибка : Проверьте ваш логин / пароль.";
$lang['form_login_not_found_message'] = "Пользователь не найден.";
$lang['form_login_not_activated_message'] = "Этот аккаунт не активирован. Проверьте ваш emails и перейдите по ссылке активации.";

$lang['form_register_success_message'] = "Вы успешно зарегистрировались.";
$lang['form_register_error_message'] = "Ошибка : регистрация провалена";

$lang['form_profile_success_message'] = "Данные профиля сохранены";
$lang['form_profile_error_message'] = "Этот пользователь уже существует. Пожалуйста, измените имя пользователя или email";
$lang['form_profile_account_deleted'] = "Аккаунт удалён";

$lang['form_password_error_message'] = "Произошла ошибка";
$lang['form_password_not_found_message'] = "Этого email нет в нашей системе";
$lang['form_password_success_message'] = "Письмо с новым паролем только что был послано вам.";

$lang['form_contact_error_title'] = 'Oups, we got an error.';
$lang['form_contact_error_message'] = 'perhaps just some missing fields. Please check the form...';
$lang['form_contact_success_title'] = 'Your message was sent successfully !';
$lang['form_contact_success_message'] = 'Thank you for your message, we will answer you very quickly !';


/*
|--------------------------------------------------------------------------
| Validation Errors
| of custom callbacks
| Must look like : $lang['form_error_<field_key>'] = 'Error message'
|
| For custom form validation translation, copy the wished file from
| /system/language/xx/form_validation_lang.php to your theme language folder
| /themes/my_theme/language/xx/form_validation_lang.php and adapt it.
|
|--------------------------------------------------------------------------
| $lang['form_error_upload'] = "Something went wrong while uploading the files.";
|
*/

