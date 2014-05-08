<?php

class RarArchive{

	private $filename = '';

	private function __construct($filename) {
		$this->filename = addcslashes($filename, ' \'');
	}

	public function close() {
		throw new Exception("Not Implemented");
	}

	public function getComment() {
		throw new Exception("Not Implemented");
	}

	public function getEntries() {
		$bash_result = shell_exec("unrar --list " . $this->filename);
		$rows = explode("\n", $bash_result);

		function hash_rar($var) {
			return strlen($var) === 8;
		}

		for ($i = 9;$i < count($rows) - 3;$i += 2) {
			if (isset($rows[$i+1])) {
				$data = array_filter(explode(' ', $rows[$i+1]), "hash_rar");
				
				$entries[] = "RarEntry for file \"{$rows[$i]}\" (" . end($data) . ")";
			}
		}

		return $entries;
	}

	public function isBroken() {
		$bash_result = shell_exec("md5sum " . $this->filename . " > t.md5 && md5sum -c t.md5 && rm t.md5");
		list($file, $status) = explode(':', $bash_result);
		
		return str_replace(' ', '', $status) == "OK\n";
	}

	public function isSolid() {
		throw new Exception("Not Implemented");
	}

	public static function open($filename, $password = null, $volume_callback = null) {
		return new RarArchive($filename);
	}

	public function setAllowBroken($allow_broken) {
		throw new Exception("Not Implemented");
	}

	public function __toString() {
		return "RAR Archive \"{$this->filename}\"";
	}

}