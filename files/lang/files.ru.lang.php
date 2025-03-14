<?php

/**
 * Russian Language File for the Files Module
 *
 * @package Files
 * @author Cotonti Team
 * @copyright (c) Cotonti Team 2008-2014
 */
defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'Личное файловое хранилище и прикрепление изображений и файлов и создание фотогалерей на страницах и постах';
$L['info_notes'] = 'НЕ ЗАБУДЬТЕ создать доступную для записи директорию для хранения файлов. Jquery должен быть включен.';

// if lang/ru/main.ru.lang.php is not loaded
if (!isset($L['PFS'])) {
    $mainLangFile = cot_langfile('main', 'core');
    if (file_exists($mainLangFile)) {
        include $mainLangFile;
    }
}

$L['files_add'] = 'Добавить файлы';
$L['files_albums'] = 'Альбомы';
$L['files_attach'] = 'Прикрепить файлы';
$L['files_attachments'] = 'Вложения';
$L['files_cancel'] = 'Отменить закачку';
$L['files_created'] = 'Создан';
$L['files_downloads'] = 'Скачивания';
$L['files_draghere'] = 'Перетащите файлы сюда';
$L['files_extallowed'] = 'Разрешенные расширения';
$L['files_havenotfolders'] = 'пока не добавил ни одного раздела';
$L['files_intheroot'] = 'в корневом каталоге';
$L['files_inthisfolder'] = 'в текущем каталоге';
$L['files_isgallery'] = 'Альбом?';
$L['files_ispublic'] = 'Открытый доступ?';
$L['files_maxsize'] = 'Максимальный размер файла';
$L['files_maxspace'] = 'Максимальный разрешенный объем';
$L['files_morefiles'] = 'Больше файлов';
$L['files_mypage'] = 'Моя страница';
$L['files_newalbum'] = 'Создать новый альбом';
$L['files_newfile'] = 'Загрузить файл';
$L['files_newfolder'] = 'Создать новый каталог';
$L['files_onpage'] = 'На этой странице';
$L['files_pastecode'] = 'Код для вставки';
$L['files_pastefile'] = 'Вставить как ссылку на файл';
$L['files_pastegallery'] = 'Код для вставки';
$L['files_pasteimage'] = 'Вставить как изображение';
$L['files_pastethumb'] = 'Вставить миниатюру';
$L['files_processing'] = 'Обработка';
$L['files_replace'] = 'Заменить';
$L['files_select_avatar'] = 'Выбрать аватар';
$L['files_start'] = 'Начать';
$L['files_start_upload'] = 'Начать закачку';
$L['files_totalsize'] = 'Общий объем';
$L['files_updated'] = 'Обновлен';
$L['files_youhavenotfolders'] = 'Вы пока не добавили ни одного раздела';

/**
 * Admin
 */
$L['adm_maxsizesingle'] = $L['files_maxsizesingle'] = 'Максимальный размер одного файла в разделе «'.$L['PFS'].
        '» ('.$L['bytes'].'),<br /> 0 - неограничено, -1 - отключено';
$L['adm_maxsizeallpfs'] = $L['files_maxsizeallpfs'] = 'Максимальный размер всех файлов в разделе «'.$L['PFS'].
        '» ('.$L['bytes'].'),<br /> 0 - неограничено, -1 - отключено';
$L['files_allpfs'] = 'Разделы «'.$L['PFS'].'» всех пользователей';
$L['files_allpfs_help'] = 'Разделы «'.$L['PFS'].'» всех пользователей';
$L['files_cleanup'] = 'Уборка мусора';
$L['files_cleanup_conf'] = 'Это удалит все файлы, прикрепленные к более не существующим сообщениям. Продолжить?';
$L['files_cleanup_desc'] = 'Удалит вложения к несуществующим более страницам и постам на форуме, если по какой-то
    причине они не были удалены автоматически';
$L['files_deleteallthumbs'] = 'Удалить все миниатюры';
$L['files_deleteallthumbs_conf'] = 'Будут удалены все миниатюры для всех изображений. Новые миниатюры будут сгенерированы по мере необходимости';
$L['files_deleteallthumbs_desc'] = 'Если Вы изменили настройки миниатюр и хотите перегенерировать их, используйте <b>«Удалить все миниатюры»</b>. '
    . 'Новые превью будут генерироваться по мере обращения к ним. Может вызвать проблемы на страницах с большим количеством миниатюр.';
$L['files_gd'] = 'Графическая библиотека GD';
$L['files_imagick'] = 'Графическая библиотека Imagick';
$L['files_itemsperpost'] = 'Макс. число вложений в каждом сообщении, 0 - неограничено';
$L['files_items_removed'] = 'Элементов удалено';
$L['files_thumbs_removed'] = 'Миниатюры удалены';
$L['files_userfilespace'] = 'Файловое хранилище пользователя';
$L['files_userfilespace_desc'] = 'Это Ваши файлы. Подставьте id нужного пользователя';
$L['files_userpublic_albums'] = 'Публичные изображения и альбомы пользователя';
$L['files_userpublic_files'] = 'Публичные файлы и каталоги пользователя';
$L['files_extrafields_hint'] = 'Экстраполя должны иметь класс «file-edit» для редактирования их значений через Ajax';
$L['files_extrafields_files'] = 'Экстраполя для файлов';
$L['files_extrafields_folders'] = 'Экстраполя для папок';

/**
 * Errors & Messages
 */
$L['files_err_abort'] = 'Загрузка файла прервана';
$L['files_err_count'] = 'Превышено максимальное число файлов';
$L['files_err_move'] = 'Невозможно переместить загруженный файл';
$L['files_err_no_driver'] = 'На этом хосте нет поддерживаемых графических библиотек. Создание миниатюр для изображений невозможно.';
$L['files_err_nospace'] = 'Недостаточно персонального дискового пространства';
$L['files_err_perms'] = 'У вас недостаточно прав для данного действия';
$L['files_err_replace'] = 'Невозможно заменить файл';
$L['files_err_toobig'] = 'Файл слишком велик';
$L['files_err_type'] = 'Такой тип файлов не разрешен';
$L['files_err_unknown'] = 'Неизвестная ошибка';
$L['files_err_upload'] = 'Не удалось загрузить файл';
$L['files_folder_deleted'] = 'Раздел «%1$s» удален';
$L['files_foldertitlemissing'] = 'Отсутствует заголовок каталога';
//$L['files_nogd'] = 'Графическая библиотека GD не поддерживается данным хостом. Создание миниатюр для изображений невозможно.'; // @todo
$L['files_saved'] = 'Сохранено.';

/**
 * Module Config
 */
$L['cfg_folder'] = 'Директория для файлов';
$L['cfg_prefix'] = 'Префикс имен файлов';
$L['cfg_checkAllowedType'] = 'Проверять тип загружаемых файлов';
$L['cfg_checkAllowedType_hint'] = 'Проверять загружаемые файлы на соответствие списку разрешенных типов ниже. Рекомендуется включить в целях безопасности.';
$L['cfg_exts'] = 'Разрешенные типы файлов (через запятую, без точек и пробелов)';
$L['cfg_fixExtensionsByMime'] = 'Исправлять расширения файлов в соответствии с Mime-типом';
$L['cfg_fixExtensionsByMime_hint'] = 'Лучше работает с установленным '
    . '<a href="https://flysystem.thephpleague.com/docs/advanced/mime-type-detection/" target="_blank">'
    . 'https://flysystem.thephpleague.com/docs/advanced/mime-type-detection/</a>';
$L['cfg_loadAssetsGlobally'] = 'Загружать JS и CSS модуля глобально';
$L['cfg_loadAssetsGlobally_hint'] = 'Полезно при инициализации загрузчика динамически (ajax, SPA)';
$L['cfg_maxFoldersPerPage'] = 'Максимальное количество папок на страницу';
$L['cfg_pfs_winclose'] = 'Закрывать всплывающее окно после вставки файла в редактор';

$L['cfg_upl_separator'] = 'Настройка загрузки';
$L['cfg_autoupload'] = 'Начинать закачку автоматически';
$L['cfg_sequential'] = 'Последовательная загрузка вместо параллельной';
$L['cfg_chunkSize'] = 'Загружать файлы чанками по (байт)';
$L['cfg_chunkSize_hint'] = 'Большие файлы могут быть загружены небольшими частями.
    Это позволяет загружать файлы большего размера, чем указано в ограничениях на загрузку файлов через $_POST.
    (Оставьте пустым для отключения)';

$L['cfg_img_separator'] = 'Настройки изображений';
$L['cfg_image_convert'] = 'Конвертировать изображения при загрузке в';
$L['cfg_image_convert_params'] = [
    'jpg' => 'JPEG',
    'png' => 'PNG',
    'webp' => 'WEBP',
    'no' => 'не конвертировать',
];
$L['cfg_image_to_convert'] = 'Расширения/типы изображений для конвертирования';
$L['cfg_image_to_convert_hint'] = 'Если опция выше включена. Если оставить пустым, конвертироваться будут все файлы. (через запятую, без точек и пробелов)';
$L['cfg_image_resize'] = 'Уменьшать загружаемые изображения';
$L['cfg_image_resize_hint'] = 'Загружаемые изображения будут пропорционально уменьшены в соответствии со следующими параметрами';
$L['cfg_image_maxwidth']  = 'Уменьшать ширину изображения до';
$L['cfg_image_maxheight'] = 'Уменьшать высоту изображения до';
$L['cfg_image_maxheight_hint'] = 'UltraHD (4k): 3840x2160, FullHd (2k): 1920x1080';
$L['cfg_imageResizeInBrowser'] = 'Уменьшать в браузере';
$L['cfg_imageResizeInBrowser_hint'] = 'Если включено "Уменьшать загружаемые изображения", уменьшать их в браузере пользователя, если возможно, и '
    . 'отправлять на сервер уменьшенное изображение';
$L['cfg_quality'] = 'Качество изображения в %';

$L['cfg_th_separator'] = 'Настройки миниатюр';
$L['cfg_thumbs'] = 'Показывать миниатюры изображений?';
$L['cfg_thumb_width'] = 'Ширина миниатюры по умолчанию';
$L['cfg_thumb_height'] = 'Высота миниатюры по умолчанию';
$L['cfg_thumb_framing'] = 'Режим кадрирования миниатюры по умолчанию';
$L['cfg_thumb_framing_params'] = [
    'height' => 'По высоте',
    'width' => 'По ширине',
    'inset' => 'Авто',
    'outbound' => 'Кадрировать',
];
$L['cfg_upscale'] = 'Увеличивать изображения, которые меньше размеров миниатюры';

$L['cfg_wm_separator'] = 'Настройки водяного знака';
$L['cfg_thumb_watermark'] = 'Водяной знак для миниатюр';
$L['cfg_thumb_watermark_hint'] = 'Путь к файлу водяного знака. Поддерживаются png с прозрачностью. (Оставьте пустым, чтобы не ставить водяные знаки)';
$L['cfg_thumb_wm_widht'] = 'Минимальная ширина миниатюры';
$L['cfg_thumb_wm_widht_hint'] = 'Водяной знак будет поставлен на миниатюру только если ее ширина и высота больше или равны заданным';
$L['cfg_thumb_wm_height'] = 'Минимальная высота миниатюры';

$L['cfg_av_separator'] = 'Настройки аватаров пользователей';
$L['cfg_avatar_width'] = 'Ширина аватара по умолчанию';
$L['cfg_avatar_height'] = 'Высота аватара по умолчанию';
$L['cfg_avatar_framing'] = 'Режим кадрирования аватара по умолчанию';
$L['cfg_avatar_framing_params'] = $L['cfg_thumb_framing_params'];