<?php

$lang = array();

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] 	= 'Установка Ionize';
$lang['title_welcome'] 				= 'Добро пожаловать в  Ionize !';

$lang['title_system_check'] 		= 'Результат проверки системы';
$lang['title_database_settings'] 	= 'Параметры БД';
$lang['title_user_account'] 		= 'Аккаунт администратора';
$lang['title_default_language'] 	= 'Язык по умолчанию';
$lang['title_sample_data'] 			= 'Установить демо-данные?';

$lang['button_next_step'] 			= 'Следующий шаг';
$lang['button_skip_next_step'] 		= 'Пропустить & К следующему шагу';
$lang['button_save_next_step'] 		= 'Сохранить & Перейти к следующему шагу';
$lang['button_install_test_data'] 	= "Установка тестовых данных";
$lang['button_start_migrate'] 		= 'Старт миграции БД';

$lang['nav_check'] 					= 'Проверка системы';
$lang['nav_db'] 					= 'База данных';
$lang['nav_settings'] 				= 'Параметры';
$lang['nav_end'] 					= 'Конец';
$lang['nav_data'] 					= 'Демо-данные';


/*
|--------------------------------------------------------------------------
| System check
|--------------------------------------------------------------------------
*/
$lang['php_version'] 			= 'PHP >= 5';
$lang['php_version_found'] 		= 'PHP версия';
$lang['mysql_support'] 			= 'MySQL поддержка';
$lang['mysql_version_found'] 	= 'MySQL версия';
$lang['file_uploads'] 			= 'Загрузка файлов';
$lang['mcrypt'] 				= 'PHP Mcrypt библиотека';
$lang['gd_lib'] 				= 'PHP GD библиотека';
$lang['write_config_dir'] 		= '<b>/application/config/</b>';
$lang['write_files'] 			= '<b>/files/*</b>';
$lang['write_themes'] 			= '<b>/themes/*</b>';
$lang['config_check_errors'] 	= 'Некоторые требованиz не имеют статус OK.<br/>Пожалуйста, скорректируйте перед дальнейшей установкой.';
$lang['welcome_text'] 			= "<p>Следующие шаги помогут вам установить Ionize. </p> Ниже проверка основных требований.<br/>Если некотрые требования не имеют статус  OK, пожалуйста, скорректируйте и обновите эту страницу, убедитесь в корректном статусе.</p>";
$lang['write_check_text'] 		= "<p>Следующие папки и файлы должны быть доступны для записи...</p>";
$lang['title_folder_check'] 	= "Эти папки должны быть доступны для записи";
$lang['title_files_check'] 		= "Эти файлы должны быть доступны для записи";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/
$lang['database_driver'] 						= 'Driver';
$lang['database_hostname'] 						= 'Хост';
$lang['database_name'] 							= 'БД';
$lang['database_username']	 					= 'Пользователь';
$lang['database_password'] 						= 'Пароль';
$lang['database_create'] 						= 'Создайте БД';
$lang['title_database_create'] 					= 'БД создана';
$lang['db_create_text'] 						= "<p>Пожалуйста, укажите настройки вашей БД.<br/>В случае обновления, Ionize определит вашу версию и проведёт обновление БД.</p><p><strong>Важно:</strong> Если Вы обновляетесь, пожалуйста, сначала сделайте архив Вашей БД.</p>";
$lang['db_create_prerequisite'] 				= "Пользователь должен иметь права на создание базы данных.<br/>Если БД уже существует, не отмечайте.";
$lang['database_error_missing_settings'] 		= 'Некоторая информация отсутствует.<br/>Пожалуйста, заполните все поля !';
$lang['database_success_install'] 				= '<b class="ex">Эта база данных была успешно установлена​​.</b>';
$lang['database_success_install_no_settings_needed'] = 	'<b class="ex">База данных OK.</b><br/>Поскольку база данных уже существует, шаг настройки сайта будет пропущен.';
$lang['database_success_migrate'] 				= '<b class="ex">БД была успешно обновлена.</b>';
$lang['database_error_coud_not_connect'] 		= 'Неудачное подключение к базе данных с указанными параметрами.';
$lang['database_error_database_dont_exists'] 	= "База данных не существует !";
$lang['database_error_writing_config_file'] 	= "<b>Ошибка :</b><br/>Файл <b style=\"color:#000;\">/application/config/database.php</b> не имеет прав на запись!<br/>Проверьте Ваши права на запись.";
$lang['database_error_coud_not_write_database'] = "<b>Ошибка :</b><br/> Невозможно выполнить запись данных в базу данных.<br/>Проверьте права на запись в БД.";
$lang['database_error_coud_not_create_database'] = "Программа установки не может создать базу данных. Проверьте имя базы данных или ваши права";
$lang['database_error_no_ionize_tables'] 		= "The database you selected seems not to be an Ionize database. Пожалуйста, проверьте еще ​​раз.";
$lang['database_error_no_users_to_migrate'] 	= "Для обновления аккаунта пользователя";
$lang['database_migration_from'] 				= 'Эту базу данных нужно обновить.<br/>Обновление с версии : ';
$lang['database_migration_text'] 				= "<p class=\"error\"><b>ПРИМЕЧАНИЕ :</b><br/> База данных теперь будет обновлена.<b><br/>Пожалуйста, Создайте резервную копию базы данных перед этим обновлением.</p>";


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['lang_code'] 							= 'Код (2 символа)';
$lang['lang_name'] 							= 'Наименование';
$lang['settings_default_lang_title'] 		= 'Язык по умолчанию';
$lang['settings_default_lang_text'] 		= 'Ваш сайт должен иметь язык по умолчанию.<br/>Вы можете посетить <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">страницу Википедии ISO 639-1 </a> для дополнительной информации о кодах языков.';
$lang['settings_error_missing_lang_code'] 	= "Код языка обязателен";
$lang['settings_error_missing_lang_name'] 	= "Наименование языка является обязательным";
$lang['settings_error_lang_code_2_chars'] 	= "Код языка должен содержать 2 символа. Например : \"en\"";
$lang['settings_error_write_rights'] 		= "Нет права на запись на <b>/application/config/language.php</b>. Пожалуйста, проверьте PHP права на этот файл.";
$lang['settings_error_write_rights_config'] = "Нет права на запись на <b>/application/config/config.php</b>. Пожалуйста, проверьте PHP права на этот файл.";
$lang['settings_error_admin_url'] 			= "URL администратора должен быть буквенно-цифровой строкой, без пробелов или специальных символов";
$lang['settings_admin_url_title'] 			= 'URL панели администрирования';
$lang['settings_admin_url_text'] 			= 'Настоятельно рекомендуется изменить значение по умолчанию.';
$lang['admin_url'] 							= 'URL администрирования';

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] 					= 'Вы будете подключаться к панели администрирования с таким логином.';
$lang['username'] 							= 'Логин (миним. 4 символа)';
$lang['screen_name'] 						= 'Экранное имя';
$lang['email'] 								= 'Email';
$lang['password'] 							= 'Пароль (min. 4 chars)';
$lang['password2'] 							= 'Повтор пароля';
$lang['user_error_missing_settings'] 		= 'Пожалуйста, заполните все поля !';
$lang['user_error_not_enough_char'] 		= 'Логин и пароль должны иметь не менее 4 символов длиной!';
$lang['user_error_email_not_valid'] 		= 'Email кажется неправилен. Пожалуйста, исправьте.';
$lang['user_error_passwords_not_equal'] 	= 'Поля Пароль и Повтор пароля не совпадают.	';
$lang['user_info_admin_exists'] 			= 'Администратор уже существует в базе данных.<br/>Вы можете пропустить этот шаг, если вы хотите, чтобы не создать или обновить учетную запись администратора.';
$lang['encryption_key'] 					= 'Ключ шифрования';
$lang['encryption_key_text'] 				= "Ionize использует 128 битный ключ шифрования.<br />Этот ключ будет кодировать аккаунты пользователей и все конфиденциальные данные.<br/>Это будет записано в <b>/application/config/config.php</b> file.";
$lang['no_encryption_key_found'] 			= "Ключ шифрования не был найден. Пользователей  не были переносены. <b>Вы должны создать новый аккаунт Администратора</b>.";


/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] 		= "<p>Если Вы используете Ionize в первый раз, настоятельно рекомендуется установка демо-данных сайта.<br/>Эти данные включают : </p><ul><li>Полный набор данных, полезных для проверки Ionize,</li><li>1 рабочий пример темы оформления</li></ul>";
$lang['title_skip_this_step'] 		= "Пропустить этот шаг";

$lang['title_finish'] 				= 'Установка выполнена';
$lang['finish_text'] 				= '<b>ВАЖНО</b>: <br/>Вы должны удалить папку "<b>/install</b>" вручную до входа в раздел администрирования сайта.';
$lang['button_go_to_admin'] 		= 'Перейти в панель управления';
$lang['button_go_to_site'] 			= 'Перейти на главную сайта';
