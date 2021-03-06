<?php

//===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===
// Mod: MetaVerification
// File: main.php
// Path: D:\OpenServer\domains\ingermany.local/engine/inc/maharder/admin/modules/webmaster-verification/main.php
// ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  =
// Author: Maxim Harder <dev@devcraft.club> (c) 2022
// Website: https://devcraft.club
// Telegram: http://t.me/MaHarder
// ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  =
// Do not change anything!
//===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===  ===

// Как добавить свои стили?
// 1. Вариант
// добавляем дополнительные стили в существующий массив: $variables['css'][] = htmlStatic( 'путь/к/стилям.css' );
// тем самым добавив новый стиль к существующим
//
// 2. Вариант
// создаём новый массив с новыми стилями и перезаписываем переменную для рендера
// $variables['css'] = htmlStatic( $newCssArray );

// Как добавить свои скрипты?
// 1. Вариант
// добавляем дополнительные скрипты в существующий массив: $variables['js'][] = htmlStatic( 'путь/к/скриптам.js', 'html', 'js' );
// тем самым добавив новый скрипт к существующим
//
// 2. Вариант
// создаём новый массив с новыми скриптами и перезаписываем переменную для рендера
// $variables['js'] = htmlStatic( $newJssArray, 'js' );


$modVars = [
	'title' => 'Настройки модуля'
];

$htmlTemplate = 'modules/webmaster-verification/main.html';