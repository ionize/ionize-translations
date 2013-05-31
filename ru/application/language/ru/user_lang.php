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
$lang['connect_login_failed'] 					= 'Предоставленная Вами информация не может быть проверена. Ошибочный ввод или имя пользователя или пароль. Пожалуйста, попробуйте еще раз.';
$lang['connect_access_denied'] 					= 'Вам было отказано в доступе к %s';
$lang['connect_missing_parameters']				= 'Не хватает  %s параметра (ов)';
$lang['connect_parameter_error'] 				= 'Передаваемый параметр %s является ошибочным.';
$lang['connect_user_save_impossible'] 			= 'Мы не смогли сохранить данные в нашей системе, пожалуйста, попробуйте еще раз или свяжитесь с нами.';
$lang['connect_user_already_exists'] 			= 'В нашей системе уже существует пользователь с теми же данными. Пожалуйста, попробуйте использовать другое имя пользователя или адрес электронной почты.';
$lang['connect_blocked'] 						= 'Вы были заблокированы из-за слишком много неудачных логин, попробуйте еще раз %s';
$lang['connect_cannot_ban_yourself'] 			= 'Вы не можете заблокировать себя.';
$lang['connect_register_success'] 				= 'Вы успешно зарегистрировались.';
$lang['connect_register_success_verify_user'] 	= 'Вы успешно зарегистрированы, но мы должны проверить Ваши данные.Электронная почта была вам послана , пожалуйста, проверьте её и нажмите на ссылку активации в сообщении, чтобы активировать свой аккаунт.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] 			= 'Регистрация';
$lang['connect_admin_mail_title'] 				= 'Регистрация';
$lang['connect_admin_mail_intro'] 				= 'Пользователь только что зарегистрировался на сайте.';
$lang['connect_admin_mail_nom'] 				= 'Имя';
$lang['connect_admin_mail_login'] 				= 'Логин';
$lang['connect_admin_mail_email'] 				= 'Email';
$lang['connect_admin_mail_activation_link'] 	= 'Ссылка активации';

// Activation mail to User
$lang['connect_user_mail_subject'] 				= 'Ваша регистрация';
$lang['connect_user_mail_activated'] 			= 'Аккаунт активирован';
$lang['connect_act_user_mail_title'] 			= 'Добро пожаловать !';
$lang['connect_act_user_mail_intro'] 			= 'Вы только что зарегистрировались на нашем сайте, и мы благодарим Вас.';
$lang['connect_act_user_mail_text'] 			= 'Чтобы подтвердить свою регистрацию, нажмите на эту ссылку активации.';
$lang['connect_act_user_mail_activation_link'] 	= 'Ссылка активации';

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] 			= 'Добро пожаловать !';
$lang['connect_wait_user_mail_intro'] 			= 'Вы только что зарегистрировались на нашем сайте, и мы благодарим вас.';
$lang['connect_wait_user_mail_text'] 			= 'Ваша учетная запись будет активирована администратором в ближайшее время.';

// Registration views
$lang['connect_user_registration_title'] 		= 'Регистрация прошла успешно.';
$lang['connect_user_registration_message'] 		= 'Вы получите электронное письмо с  информацией о  регистрации и инструкцией для подтверждения этой регистрации';

// Activation views
$lang['connect_home_page'] 						= 'Домашняя страница';
$lang['connect_activation_title'] 				= 'Активация аккаунта';
$lang['connect_user_activated_message'] 		= 'Ваш аккаунт активирован<br/>Вы можете начать с главной страницы.';
$lang['connect_user_activated_error'] 			= 'Что-то пошло не так при попытке активации аккаунта. Может быть, вы уже активировали его, или, может быть, вы используете неправильную информацию? Попытайтесь войти в систему с Вашей информацией аккаунта, или проверить электронную почту, которую мы вам отправили и повторите попытку.';

$lang['connect_admin_activated_message'] 		= 'Эта учетная запись активирована. <br/> Уведомление об этом было отправлено пользователю.';
$lang['connect_admin_activated_error'] 			= 'Что-то пошло не так при попытке активации аккаунта. Может быть, вы уже активировали его, или, может быть, вы используете неправильную информацию?';

