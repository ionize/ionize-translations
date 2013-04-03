<?php

$lang = array();

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 		'Установка';

$lang['title_system_check'] = 		'Результат проверки ситемы';
$lang['title_database_settings'] = 	'Параметры базы данных';
$lang['title_user_account'] = 	'Аккаунт администратора';
$lang['title_default_language'] = 	'Язык по умолчанию';
$lang['title_sample_data'] = 	'Установить примеры?';

$lang['button_next_step'] = 		'Следующий шаг';
$lang['button_skip_next_step'] = 	'Пропустить и перейти к следующему шагу';
$lang['button_save_next_step'] = 	'Сохранить и перейти к следующему шагу';
$lang['button_install_test_data'] = 	"Установить тестовые данные";
$lang['button_start_migrate'] = 		'Старт миграции БД';

$lang['nav_check'] = 'Поверка системы';
$lang['nav_db'] = 'База данных';
$lang['nav_settings'] = 'Установки';
$lang['nav_end'] = 'Конец';
$lang['nav_data'] = 'Демо-данные';


/*
|--------------------------------------------------------------------------
| System check
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			'PHP >= 5';
$lang['php_version_found'] = 	'PHP версия';
$lang['mysql_support'] = 		'MySQL поддержка';
$lang['mysql_version_found'] = 	'MySQL версия';
$lang['file_uploads'] = 		'Загрузка файлов';
$lang['mcrypt'] = 				'PHP Mcrypt Lib';
$lang['gd_lib'] = 				'PHP GD Lib';
$lang['write_config_dir'] = 	'<b>/application/config/</b>';
$lang['write_files'] = 			'<b>/files/*</b>';
$lang['write_themes'] = 		'<b>/themes/*</b>';
$lang['config_check_errors'] = 	'Некоторые требования базы не OK. <br/> Пожалуйста, исправьте их, чтобы продолжить установку.';
$lang['welcome_text'] = 		"<p>Добро пожаловать! Эти шаги помогут вам установить Ionize.</p>";
$lang['write_check_text'] = 	"<p>Следующие папки и файлы должны быть доступны для записи...</p>";
$lang['title_folder_check'] = 	"Эти папки должны быть доступны для записи";
$lang['title_files_check'] = 	"Эти файлы должны быть доступны для записи";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			'Driver';
$lang['database_hostname'] = 		'Имя хоста';
$lang['database_name'] = 			'База данных';
$lang['database_username'] = 		'Пользователь';
$lang['database_password'] = 		'Пароль';
$lang['database_create'] = 			'Создание базы данных';
$lang['title_database_create'] = 	'Создание базы данных';
$lang['db_create_text'] = 			"<p>Ionize будет установка или миграция базы данных:</p><p><b class=\"highlight\">Новая установка</b> : База данных и таблицы будут созданы<br/><b class=\"highlight2\">Обновление</b> : Следующим шагом будет проверка необходимости обновления</p>";
$lang['db_create_prerequisite'] = 			"Пользователь должен иметь права на создание базы данных. <br/> Если база данных уже существует, это не проверяется.";
$lang['database_error_missing_settings'] = 	'Некоторая информация отсутствует. <br/> Пожалуйста, заполните все поля !';
$lang['database_success_install'] = 		'<b class="ex">База данных успешно установлена.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">База данных OK.</b><br/>В базе данных информация уже существует, шаг настройки веб-сайта будет пропущен.';
$lang['database_success_migrate'] = 		'<b class="ex">База данных была успешно обновлена.</b>';
$lang['database_error_coud_not_connect'] = 		'Подключение к базе данных завершено с указанными параметрами.';
$lang['database_error_database_dont_exists'] = 		"База данных не существует !";
$lang['database_error_writing_config_file'] = 		"<b>Ошибка :</b><br/>Файл <b style=\"color:#000;\">/application/config/database.php</b> не может быть записан!<br/>Проверьте ваши права.";
$lang['database_error_coud_not_write_database'] = 		"<b>Ошибка :</b><br/> Невозможно записать данные в базу данных.<br/>Проверьте ваши права доступа к БД.";
$lang['database_error_coud_not_create_database'] = "Программа установки не может создать базу данных. Проверьте имя базы данных или ваши права";
$lang['database_error_no_ionize_tables'] = 			"База данных выбрана, кажется, это не Ionize база данных. Пожалуйста, проверьте еще ​​раз.";
$lang['database_error_no_users_to_migrate'] = 		"Обновление с акккаунтом пользователя";
$lang['database_migration_from'] = 			'Эта база данных должна быть обновлена.<br/>Обновление с версии : ';
$lang['database_migration_text'] = 		"<p class=\"error\"><b>Предупреждение :</b><br/> База данных теперь будет обновлена.<b><br/>Пожалуйста, сделайте резервную копию базы данных перед этим обновлением.</p>";


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		'Код (2 символа)';
$lang['lang_name'] = 		'Метка';
$lang['settings_default_lang_title'] = 		'Язык по умолчанию';
$lang['settings_default_lang_text'] = 		'Ваш сайт должен иметь язык по умолчанию.<br/>Посетите <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">страницу  Wikipedia ISO 639-1 </a> для дополнительной информации о кодах языка.';
$lang['settings_error_missing_lang_code'] = "Код языка является обязательным";
$lang['settings_error_missing_lang_name'] = "Имя языка является обязательным";
$lang['settings_error_lang_code_2_chars'] = "Код языка должен быть из 2 символов. Пример : \"en\"";
$lang['settings_error_write_rights'] = "Нет прав записи на <b>/application/config/language.php</b>. Пожалуйста, проверьте права PHP на этот файл.";
$lang['settings_error_write_rights_config'] = "Нет прав записи на <b>/application/config/config.php</b>. Пожалуйста, проверьте права PHP на этот файл.";
$lang['settings_error_admin_url'] = "URL Админки  должен быть буквенно-цифровой строкой, без пробелов и специальных символов";
$lang['settings_admin_url_title'] = 		'URL панели администратора';
$lang['settings_admin_url_text'] = 		'Настоятельно рекомендуется изменить значение по умолчанию.';
$lang['admin_url'] = 'URL панели администратора';

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	'Вы будете подключаться к панели администрирования с таким логином.';
$lang['username'] = 			'Логин (мин. 4 символа)';
$lang['screen_name'] = 			'Полное имя';
$lang['email'] = 				'Email';
$lang['password'] = 			'Пароль (мин. 4 символа)';
$lang['password2'] = 			'Подтвердить пароль';
$lang['user_error_missing_settings'] = 			'Пожалуйста, заполните все поля !';
$lang['user_error_not_enough_char'] = 			'Логин и пароль должны быть не менее 4 символов длиной!';
$lang['user_error_email_not_valid'] = 			'Email, кажется не коректно. Пожалуйста, исправьте.';
$lang['user_error_passwords_not_equal'] = 		'Пароль и его подтверждение не совпадают.	';
$lang['user_info_admin_exists'] = 		'Пользователь Администратор уже существует в базе данных.<br/>Вы можете пропустить этот шаг, если вы не хотите создать или хотите обновить учетную запись администратора.';
$lang['encryption_key'] = 			'Ключ шифрования';
$lang['encryption_key_text'] = 		"Ionize нуждается в 128 ключе шифрования.<br />Этот ключ будет кодировать аккаунт пользователя и все конфиденциальные данные.<br/>Это будет записано в <b>/application/config/config.php</b> файле.";
$lang['no_encryption_key_found'] = 	"Ключ шифрования не был найден. Учетная запись пользователя не была перенесена. <b>Вы должны создать нового Администратора</b>.";


/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	"<p>Если это первый раз, когда вы используете Ionize, это настоятельно рекомендуется для установки примеров на сайт.<br/>Этот веб-сайт включает в себя : </p><ul><li>Полный набор данных, полезных для тестирования Ionize,</li><li>1 рабочий пример темы</li></ul>";
$lang['title_skip_this_step'] = "Пропустить этот шаг";

$lang['title_finish'] = 		'Установка завершена';
$lang['finish_text'] = 			'<b>ВАЖНО</b>: <br/>Вы должны удалить "<b>/install</b>" папку вручную перед доступом к веб-сайту или разделу администрирования.';
$lang['button_go_to_admin'] = 	'В админ-панель';
$lang['button_go_to_site'] = 	'На главную сайта';
