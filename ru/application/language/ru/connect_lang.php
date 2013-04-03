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
$lang['connect_login_failed'] = 'Введённая Вами информация не может пройти проверку подлинности. Либо имя пользователя или пароль, введенный вами не правильный. Пожалуйста, попробуйте еще раз.';
$lang['connect_access_denied'] = 'Вы были лишены доступа к %s';
$lang['connect_missing_parameters']	= 'Параметр(ы) %s отсутствуют';
$lang['connect_parameter_error'] = 'Параметр, передаваемый в %s неправилен.';
$lang['connect_user_save_impossible'] = 'Мы не смогли сохранить данные в нашей системе, пожалуйста, повторите попытку или свяжитесь с нами.';
$lang['connect_user_already_exists'] = 'Уже существует пользователь в нашей системе с теми же данными. Пожалуйста, попробуйте использовать другое имя пользователя или адрес электронной почты.';
$lang['connect_blocked'] = 'Вход был заблокирован, попробуйте еще раз %s';
$lang['connect_cannot_ban_yourself'] = 'Вы не можете запретить себе.';
$lang['connect_register_success'] = 'Вы успешно зарегистрированы.';
$lang['connect_register_success_verify_user'] = 'Вы успешно зарегистрированы, но мы должны проверить ваши данные.Электронная почта была отправлена ​​к вам, пожалуйста, проверьте письмо и нажмите на ссылку активации в письме, чтобы активировать аккаунт.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = 'Регистрация';
$lang['connect_admin_mail_title'] = 'Регистрация';
$lang['connect_admin_mail_intro'] = 'Пользователь только что зарегистрировался на сайте.';
$lang['connect_admin_mail_nom'] = 'имя';
$lang['connect_admin_mail_login'] = 'Логин';
$lang['connect_admin_mail_email'] = 'Email';
$lang['connect_admin_mail_activation_link'] = 'Ссылка активации';

// Activation mail to User
$lang['connect_user_mail_subject'] = 'Ваша регистрация';
$lang['connect_user_mail_activated'] = 'Аккаунт активирован';
$lang['connect_act_user_mail_title'] = 'Добро пожаловать !';
$lang['connect_act_user_mail_intro'] = 'Вы только что зарегистрировались на нашем сайте, и мы благодарим Вас.';
$lang['connect_act_user_mail_text'] = 'Чтобы подтвердить свою регистрацию, нажмите на эту ссылку активации.';
$lang['connect_act_user_mail_activation_link'] = 'Ссылка активации';

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = 'Добро пожаловать !';
$lang['connect_wait_user_mail_intro'] = 'Вы только что зарегистрировались на нашем сайте, и мы благодарим вас.';
$lang['connect_wait_user_mail_text'] = 'Ваша учетная запись будет скоро активирована администратором.';

// Registration views
$lang['connect_user_registration_title'] = 'Успешная регистрация';
$lang['connect_user_registration_message'] = 'Вы получите письмо с регистрационной информацией и инструкции для подтверждения регистрации';

// Activation views
$lang['connect_home_page'] = 'Домашняя страница';
$lang['connect_activation_title'] = 'Активация аккаунта';
$lang['connect_user_activated_message'] = 'Ваша учетная запись активирована.<br/>Вы можете подключиться с домашней страницы';
$lang['connect_user_activated_error'] = 'Что-то пошло не так с аккаунтом, котрый вы пытаетесь активировать. Может быть, вы уже активировали его, или, возможно, вы используете неправильную информацию? Попробуйте войти с Вашими данными аккаунта, или проверить электронную почту, которую мы отправили вам и попробуйте еще раз.';

$lang['connect_admin_activated_message'] = 'Эта учетная запись будет активирована сейчас.<br/>Почта просто отправляется пользователю, чтобы сообщить ему.';
$lang['connect_admin_activated_error'] = 'Что-то пошло не так с аккаунтом, который вы пытаетесь активировать.Может быть вы уже активировали его, или, возможно, вы используете неправильные данные?';

