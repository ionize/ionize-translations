<?php

$lang['email_must_be_array'] 		= "Методу проверки email должен быть передан массив.";
$lang['email_invalid_address'] 		= "Неправильный email адрес: %s";
$lang['email_attachment_missing'] 	= "Не удалось найти следующие вложения в email: %s";
$lang['email_attachment_unreadable']= "Неудалось открыть следующее вложение: %s";
$lang['email_no_recipients'] 		= "Вы должны включить получателей: Кому, Копия, или Скрытая копия";
$lang['email_send_failure_phpmail'] = "Невозможно отправить email используя функцию PHP mail().  Ваш сервер быть может не  настроен для отправки почты с помощью этого метода.";
$lang['email_send_failure_sendmail']= "Невозможно отправить email используя функцию PHP Sendmail.  Ваш сервер быть может не  настроен для отправки почты с помощью этого метода.";
$lang['email_send_failure_smtp'] 	= "Невозможно отправить email используя PHP SMTP.  Ваш сервер быть может не  настроен для отправки почты с помощью этого метода.";
$lang['email_sent'] 				= "Ваше сообщение было успешно отправлено с помощью следующих протоколов: %s";
$lang['email_no_socket'] 			= "невозможно открыть сокет для Sendmail. Пожалуйста, проверьте параметры.";
$lang['email_no_hostname'] 			= "Вы не указали имя хоста SMTP.";
$lang['email_smtp_error'] 			= "Следующая ошибка SMTP была обнаружена : %s";
$lang['email_no_smtp_unpw'] 		= "Ошибка: Вы должны указать имя пользователя SMTP и пароль.";
$lang['email_failed_smtp_login'] 	= "Failed to send AUTH LOGIN command. Error: %s";
$lang['email_smtp_auth_un'] 		= "Не удалось проверить подлинность имени пользователя. Ошибка: %s";
$lang['email_smtp_auth_pw'] 		= "Не удалось проверить подлинность пароля. Ошибка: %s";
$lang['email_smtp_data_failure'] 	= "Не удается отправить данные: %s";
$lang['email_exit_status'] 			= "Код статуса Выхода: %s";


/* End of file email_lang.php */
/* Location: ./system/language/english/email_lang.php */