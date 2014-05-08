<?php

require 'RarArchive.php';

if (!function_exists('rar_open')) {
	function rar_open($filename, $password = null, $volume_callback = null) {
		RarArchive::open($filename, $password, $volume_callback);
	}
}

if (!function_exists('rar_close')) {
	function rar_close($rarFile) {
		
	}
}

if (!function_exists('rar_comment_get')) {
	function rar_comment_get($rarFile) {

	}
}