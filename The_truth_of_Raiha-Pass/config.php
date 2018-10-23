<?php
// set default charset
ini_set('default_charset', 'UTF-8');

// TimeZone settings
date_default_timezone_set('Asia/Tokyo');

// PATHの定数
define('DOCROOT', __DIR__.DIRECTORY_SEPARATOR);  // ドキュメントルート パス
// define('APPPATH', realpath(__DIR__.'/app/').DIRECTORY_SEPARATOR);  // アプリケーションディレクトリ パス

define( 'IS_LOCALHOST', (bool) in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) );

//
const PAGE_TITLE = "[名探偵コナン] 来葉峠の真実 時系列(タイムライン)";
const PAGE_DESCRIPTION = "史上最大の謎、「来葉峠の真実」を時系列で振り返る";
const PAGE_URI = "http://conan.0218.jp/The_truth_of_Raiha-Pass/";
const PAGE_THUMBNAIL = "http://capture.heartrails.com/400x300?http://conan.0218.jp/The_truth_of_Raiha-Pass/";
//
define("PUBLISH_DATE", date("c", strtotime('2014-02-18')) );
define("MODIFY_DATE", date("c", strtotime('2016-02-18')) );
