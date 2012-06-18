<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Адрес конвертера превью
 */
Config::Set('router.page.mainpreview', 'PluginMainpreview_ActionMain');

/**
 * Настройки
 */
$config['make_preview_video']   = true;  // Создавать или нет автоматические превью топика на основе вставленного в текст видео

/**
 * Список размеров превью топика
 * Обычно задается другим плагином или шаблоном
 */
$config['size_images_preview']=array(
	/*
	array(
		'w' => 100,
		'h' => 100,
		'crop' => true,
	)
	*/
);

/**
 * Системный параметр, его НЕ нужно изменять
 */
$config['load']   = true;

return $config;
?>