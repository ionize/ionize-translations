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
$lang['form_label_name'] = 'Имя';
$lang['form_label_firstname'] = 'Имя';
$lang['form_label_lastname'] = 'Фамилия';
$lang['form_label_screen_name'] = 'Отображаемое имя';
$lang['form_label_username'] = 'Имя пользователя';
$lang['form_label_birthdate'] = 'Дата рождения';
$lang['form_label_gender'] = 'Пол';
$lang['form_label_login'] = 'Логин';
$lang['form_label_password'] = 'Пароль';
$lang['form_label_password_confirmation'] = 'Подтверждение пароля';
$lang['form_label_delete_account'] = 'Удалить аккаунт';

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

/*
|--------------------------------------------------------------------------
| Validation Errors
|--------------------------------------------------------------------------
*/
$lang['form_error_javascript_required'] = "Вы должны разрешить JavaScript, чтобы отправить эту форму.";
$lang['form_error_spam'] = "Thank you for your good Spam !";
$lang['form_error_required'] = "Поле <strong>%s</strong> является обязательным.";
$lang['form_error_isset'] = "Поле <strong>%s</strong> должно иметь значение.";
$lang['form_error_valid_email'] = "Поле <strong>%s</strong> должно содержать правильный email адрес.";
$lang['form_error_valid_emails'] = "Поле <strong>%s</strong>  должно содержать все правильные email адреса.";
$lang['form_error_valid_url'] = "Поле <strong>%s</strong> должно содержать правильный URL.";
$lang['form_error_valid_ip'] = "Поле <strong>%s</strong> должно содержать правильный IP.";
$lang['form_error_min_length'] = "Поле <strong>%s</strong> должно быть по крайней мере %s символов в длину.";
$lang['form_error_max_length'] = "Поле <strong>%s</strong>  не может превышать %s символов в длину.";
$lang['form_error_exact_length'] = "Поле <strong>%s</strong>  должны быть точно %s м.";
$lang['form_error_alpha'] = "Поле <strong>%s</strong>  может содержать только буквы алфавита.";
$lang['form_error_alpha_numeric'] = "Поле <strong>%s</strong>  может содержать только буквенно-цифровые символы.";
$lang['form_error_alpha_dash'] = "Поле <strong>%s</strong>  может содержать только буквенно-цифровые символы, подчеркивания и тире.";
$lang['form_error_numeric'] = "Поле <strong>%s</strong>  должен содержать только цифры.";
$lang['form_error_is_numeric'] = "Поле <strong>%s</strong>  должны содержать только цифровые символы.";
$lang['form_error_integer'] = "Поле <strong>%s</strong>  должно содержать целое число.";
$lang['form_error_matches'] = "Поле <strong>%s</strong>  не совпадают.";
$lang['form_error_is_natural'] = "Поле <strong>%s</strong>  должно содержать только положительные числа.";
$lang['form_error_is_natural_no_zero']	= "Поле <strong>%s</strong>  должно содержать число, большее нуля.";
$lang['form_error_restricted_field'] = "Данные были переданы, которые не допускаются.";
$lang['form_error_terms'] = "Вы должны согласиться с условиями использования.";
$lang['form_error_upload_something'] = "Что-то пошло не так при загрузке файлов.";
$lang['form_error_upload_file_size'] = "Загружаемый файл не должен быть больше, чем 1 MB.";
$lang['form_error_upload_file_type'] = "Только JPEG, PNG and GIF допускается.";

