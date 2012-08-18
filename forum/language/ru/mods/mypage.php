<?php

// mypage 0.2.0

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// general
$lang = array_merge($lang, array(
	'MP_PAGE_LIMIT_REACHED'		=> 'Достигнут лимит страниц, пожалуйста удалите какие-нибудь перед созданием новых.',
	'MP_PAGE_NOT_CREATED'		=> 'Страница не создана',
	'MP_NO_PERMISSION'			=> 'У вас нет прав для выполнения этого действия',
	'MP_NO_PAGE'				=> 'Страница не найдена',
	'MP_ULD_ERROR_NO'			=> 'Файл не загружен',
	'MP_ULD_ERROR_LARGE'		=> 'Файл слишком большой для загрузки',
	'MP_ULD_ERROR_NOT_IMG'		=> 'Файл не может быть загружен, потому что это не картинка',
	'MP_FILE_NOT_DELETED'		=> 'Файл не удален',
	'MP_PAGE_POST_LIMIT'		=> 'У вас недостаточно сообщений для использования этой функции',

	'MP_RETURN'					=> 'На последнюю просмотренную страницу',
	'MP_ULD_NO_ERROR'			=> 'Файл закачан',
	'MP_PAGE_ADDED'				=> 'Страница добавлена',
	'MP_PAGE_DELETED'			=> 'Страница удалена',
	'MP_PAGE_EDITED'			=> 'Страница изменена',
	'MP_FILE_DELETED'			=> 'Файл удален',
	'MP_PAGE_ORDER_UPDATED'		=> 'Заказанная страница обновлена',
	'MP_COMMENT_ADDED'			=> 'Ваш комментарий добавлен',
	'MP_COMMENT_UPDATED'		=> 'Комментарий обновлен',
	'MP_COMMENT_DELETED'		=> 'Комментарий удален',
	'MP_RATING_ADDED'			=> 'Ваша оценка добавлена',

	'MP_OVERVIEW'			=> 'Просмотр',
	'MP_USED_PAGES'			=> 'Использованные страницы',
	'MP_UPLOADED_FILES'		=> 'Закаченные файл',
	'MP_UPLOAD_FILES'		=> 'Закачать файл',
	'MP_FILE_TO_UPLOAD'		=> 'Файлы для закачки',
	'MP_COMMENTS'			=> 'Комментарии',
	'MP_RATINGS'			=> 'Оценки',
	'MP_OPTIONS'			=> 'Опции',
	'MP_ORDER'				=> 'Заказать',
	'MP_PAGE_LIST'			=> 'Список страниц',
	'MP_FILE_LIST'			=> 'Список файлов',
	'MP_ADD_PAGE'			=> 'Добавить файл',
	'MP_EDIT_PAGE'			=> 'Изменить страницу',
	'MP_UPLOADS'			=> 'Управление закаченными файлами',
	'MP_VIEW_MYPAGE'		=> 'Посмотреть Мою Страницу',
	'MP_MYPAGE'				=> 'Моя Страница',
	'MP_MYPAGES'			=> 'Мои Страницы',

	'MP_PAGE_TITLE'			=> 'Заголовок страницы',

	'MP_DELETE'					=> 'Удалить',
	'MP_DELETE_CONFIRM'			=> 'Вы уверены, что хотите удалить эту страницу?',
	'MP_DELETE_UPLOAD_CONFIRM'	=> 'Вы уверены, что хотите удалить этот файл?',
	'MP_VIEW'					=> 'Просмотр',
	'MP_EDIT'					=> 'Изменить',
	'MP_SELECT'					=> 'Удалить',
	'MP_MYPAGE_NO'				=> 'Нет созданных страниц',

	'MP_GENERAL_OPTIONS'		=> 'Общие настройки',
	'MP_STYLE_OPTIONS'			=> 'Настройки стиля',
	'MP_EDITOR'					=> 'Редактор',

	'MP_ALLOW_COMMENTS'		=> 'Разрешить комментарии',
	'MP_ALLOW_RATINGS'		=> 'Разрешить оценки',
	'MP_PARSE_HTML'			=> 'Анализ html',
	'MP_PARSE_BBCODE'		=> 'Анализ bbcode',
	'MP_PARSE_SMILES'		=> 'Анализ smiles',
	'MP_PARSE_URL'			=> 'Анализ url',
	'MP_BGRND_COLOR'		=> 'Фоновый цвет',
	'MP_BGRND_IMAGE'		=> 'Фоновое изображение',
	'MP_BGRND_STYLE'		=> 'Фоновый стиль',
	'MP_FONT_SIZE'			=> 'Размер шрифта',
	'MP_FONT_COLOR'			=> 'Цвет шрифта',
	'MP_RATE_PAGE'			=> 'оценка старницы',
	'MP_CHANGE_RATE'		=> 'Поменять оценку страницы',

	'MY_OVERVIEW_TITLE'		=> 'Моя Страница &bull; Просмотр',
	'MY_ADD_PAGE_TITLE'		=> 'Моя Страница &bull; Добавить страницу',
	'MY_EDIT_PAGE_TITLE'		=> 'Моя Страница &bull; Редактировать страницу',
	'MY_UPLOADS_TITLE'		=> 'Моя Страница &bull; Загрузки',

	'MP_INSERT'						=> 'Вставить',
	'MP_INSERT_INLINE'				=> 'Вставить в строку',
	'MP_MAKE_BACKGROUND'			=> 'Сделать фон',
	'MP_INSERT_COMMENT_LINK'		=> 'Ссылка на комментарии',
	'MP_INSERT_COMMENT_COUNT'		=> 'Счет комментариев',
	'MP_COMMENT_COUNT_STRING'		=> 'На страницу добавили % комментариев', // % will be replaced by the actual count
	'MP_COMMENT_LEAVE_VIEW_STRING'	=> 'Оставить / Посмотреть комментарии',
	'MP_COMMENT_BY_STRING'			=> 'Оставил %1 в %2', // %1 will be replaced by the username, %2 will be replaced by the date/time

	'MP_ORDER_EXPLAIN'			=> 'Заказать - это комманда Моим Страницам для упоминания в разных местах. Введите 0, чтобы спрятать страницу, страница со значением Заказать 1, будет упоминатся в ваших сообщениях',

	'MP_ACP_GEN'				=> 'Посмотреть Мою Страницу',
	'MP_ACP_GEN_EXPLAIN'		=> 'Здесь основная информация о Моей Странице',
	'MP_ACP_LIMITS'				=> 'Ограничения Моих Страниц',
	'MP_ACP_LIMITS_EXPLAIN'		=> 'Здесь можно поставить ограничения для Моих Страниц',
	'MP_ACP_STYLE'				=> 'Настройки стиля Моих Страниц',
	'MP_ACP_STYLE_EXPLAIN'		=> 'Здесь настройки стиля Моих Страниц',
	'MP_ACP_HTML'				=> 'html настройки Моих Страниц',
	'MP_ACP_HTML_EXPLAIN'		=> 'Здесь настраивается html Моих Страниц',

	'MP_ACP_PAGE_LIMIT_A'				=> 'Лимит страниц (A)',
	'MP_ACP_PAGE_LIMIT_A_EXPLAIN'		=> 'Лимит страниц для пользователей имеющих "Права страниц (A)" ',
	'MP_ACP_PAGE_LIMIT_B'				=> 'Лимит страниц (B)',
	'MP_ACP_PAGE_LIMIT_B_EXPLAIN'		=> 'Лимит страниц для пользователей имеющих "Права страниц (B)" ',
	'MP_ACP_PAGE_LIMIT_C'				=> 'Лимит страниц (C)',
	'MP_ACP_PAGE_LIMIT_C_EXPLAIN'		=> 'Лимит страниц для пользователей имеющих "Права страниц (C)" ',
	'MP_ACP_UPLOAD_LIMIT_A'				=> 'Лимит загрузки (A)',
	'MP_ACP_UPLOAD_LIMIT_A_EXPLAIN'		=> 'Лимит загрузки для пользователей имеющих "Права загрузки (A)" ',
	'MP_ACP_UPLOAD_LIMIT_B'				=> 'Лимит загрузки (B)',
	'MP_ACP_UPLOAD_LIMIT_B_EXPLAIN'		=> 'Лимит загрузки для пользователей имеющих "Права загрузки (B)" ',
	'MP_ACP_UPLOAD_LIMIT_C'				=> 'Лимит загрузки (C)',
	'MP_ACP_UPLOAD_LIMIT_C_EXPLAIN'		=> 'Лимит загрузки для пользователей имеющих "Права загрузки (C)" ',
	'MP_ACP_UPLOAD_SIZE'				=> 'Размер загружаемого файла',
	'MP_ACP_UPLOAD_SIZE_EXPLAIN'		=> 'Максимальный размер загружаемого файла в байтах',
	'MP_ACP_DEFAULT_CONTENT'			=> 'Начальное содержимое',
	'MP_ACP_DEFAULT_CONTENT_EXPLAIN'	=> 'Это помещается сначала на только что созданную страницу. (BBCODE разрешены)',
	'MP_ACP_FOOTER'						=> 'Низ',
	'MP_ACP_FOOTER_EXPLAIN'				=> 'Это помещается в низ каждой страницы. Чтобы не использовать введите 0. (HTML резрешен)',
	'MP_ACP_USE_HEADER'					=> 'Заголовок форума',
	'MP_ACP_USE_HEADER_EXPLAIN'			=> 'Разрешает устанавливать верхнею и нижнею часть как в форуме',

	'MP_ACP_TTL_PAGE_LIMIT'			=> 'Ограничение страниц',
	'MP_ACP_TTL_UPLOAD_LIMIT'		=> 'Ограничение загрузки',
	'MP_ACP_TTL_GEN_STYLE'			=> 'Общие настройки стиля',
	'MP_ACP_TTL_RATE_IMGS'			=> 'Оценка изображений',
	'MP_ACP_TTL_RATE_IMGS_EXPLAIN'	=> 'Изображения оценок, они должны быть в images/mypage_ratings',

	'MP_ACP_UPDATED'			=> 'Настройки Моих Страниц обновлены',

	'MP_ACP_PAGE_CNT'			=> 'Количество страниц',
	'MP_ACP_FILE_CNT'			=> 'Количество загружаемых файлов',
	'MP_ACP_COMMENT_CNT'		=> 'Количество комментариев',
	'MP_ACP_RATING_CNT'			=> 'Количество оценок',

	// ratings
	'MP_RATE_0'				=> 'Отвратительно',
	'MP_RATE_1'				=> 'Ужасно',
	'MP_RATE_2'				=> 'Плохо',
	'MP_RATE_3'				=> 'Средне',
	'MP_RATE_4'				=> 'Хорошо',
	'MP_RATE_5'				=> 'Отлично',
	'MP_RATE_NR'			=> 'Без оценки',

	// colors
	'MYPAGE_COLORS' => array(
		// ONLY CHANGE THE VALUES AFTER THE =>
		'AQUA'			=> 'Водяной',
		'BLACK'			=> 'Черный',
		'BLUE'			=> 'Синий',
		'FUCHSIA'		=> 'Fuchsia',
		'GRAY'			=> 'Серый',
		'GREEN'			=> 'Зелёный',
		'LIME'			=> 'Лаймовый',
		'MAROON'		=> 'Темно-бордовый',
		'NAVY'			=> 'Морской',
		'OLIVE'			=> 'Оливковый',
		'PURPLE'		=> 'Фиолетовый',
		'RED'			=> 'Красный',
		'SILVER'		=> 'Серебряный',
		'TEAL'			=> 'Teal',
		'WHITE'			=> 'Белый',
		'YELLOW'		=> 'Желтый',
	),

	// font sizes
	'MYPAGE_FNT_SIZE' => array(
		// ONLY CHANGE THE VALUES AFTER THE =>
		'XX_SMALL'		=> 'XX-Small',
		'X_SMALL'		=> 'X-Small',
		'SMALL'			=> 'Small',
		'MEDIUM'		=> 'Medium',
		'LARGE'			=> 'Large',
		'X-LARGE'		=> 'X-Large',
		'XX-LARGE'		=> 'XX-Large',
	),

));

// module titles
$lang = array_merge($lang, array(
	'UCP_MYPAGE'			=> 'Моя Страница',
	'UCP_MP_MAIN'			=> 'Просмотр',
	'UCP_MP_UPLOADS'		=> 'Загрузки',
	'UCP_MP_EDIT'			=> 'Редактировать Мою Страницу',
	'UCP_MP_ORDER'			=> 'Заказать',
	'UCP_MP_ADD'			=> 'Добавить страницу',
	'ACP_MP_MYPAGE'			=> 'Моя Страница',
	'ACP_MP_MAIN'			=> 'Просмотр',
	'ACP_MP_LIMITS'			=> 'Настройки лимита',
	'ACP_MP_STYLE'			=> 'Настройки стиля',
	'ACP_MP_HTML'			=> 'Html настройки',
));

// new for 0.2.2
$lang = array_merge($lang, array(
	'MP_SUPPORT_LINE'		=> 'Для поббержки загленити <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=576979">сюда</a> или <a href="http://www.jtsenterprises.biz">here</a>.<br /><br />
					    Для метериальной помощи проэкту <a href="http://www.jtsenterprises.biz/donate.php">here</a>.<br /><br />
					    Спасибо за использование,<br /><br />
					    JTS Enterprises, перевод - A.R.T. ',

	'MP_ACP_UPLOADS_SECURE'			=> 'Используйте защищенные загрузки',
	'MP_ACP_UPLOADS_SECURE_EXPLAIN'	=> 'Если да, то проверка будет mime, если нет, то проверено будет только добавленное',
	'MP_RATE_THIS_PAGE'				=> 'Оценить страницу',
	'MP_BE_FIRST_COMMENT'			=> 'Будте первые написавшие комметарий.',
	'MP_ADD_COMMENT'				=> 'Добавить комментарий',
	'MP_NO_FILES'					=> 'У вас нет загруженны файлов',
	'MP_OVERVIEW_EXPLAIN'			=> 'Добро пожаловать на Мою Страницу. Это место для создания своих страниц на форуме.',
	'MP_UP_FILE_NAME'				=> 'Имя файла',
	'MP_UP_UPLOADED'				=> 'Загружено',
	'MP_UP_EXTENSION'				=> 'Добавлено',
	'MP_UP_OPTIONS'					=> 'Настройки',
));

?>
