<?php

require 'RarArchive.php';

if (!function_exists('rar_open')) {
	function rar_open($filename, $password = null, $volume_callback = null) {
		RarArchive::open($filename, $password, $volume_callback);
	}
}