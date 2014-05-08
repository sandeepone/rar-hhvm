<?php

final class RarEntry {

	const integer HOST_MSDOS = 0 ;
	const integer HOST_OS2 = 1 ;
	const integer HOST_WIN32 = 2 ;
	const integer HOST_UNIX = 3 ;
	const integer HOST_MACOS = 4 ;
	const integer HOST_BEOS = 5 ;
	const integer ATTRIBUTE_WIN_READONLY = 1 ;
	const integer ATTRIBUTE_WIN_HIDDEN = 2 ;
	const integer ATTRIBUTE_WIN_SYSTEM = 4 ;
	const integer ATTRIBUTE_WIN_DIRECTORY = 16 ;
	const integer ATTRIBUTE_WIN_ARCHIVE = 32 ;
	const integer ATTRIBUTE_WIN_DEVICE = 64 ;
	const integer ATTRIBUTE_WIN_NORMAL = 128 ;
	const integer ATTRIBUTE_WIN_TEMPORARY = 256 ;
	const integer ATTRIBUTE_WIN_SPARSE_FILE = 512 ;
	const integer ATTRIBUTE_WIN_REPARSE_POINT = 1024 ;
	const integer ATTRIBUTE_WIN_COMPRESSED = 2048 ;
	const integer ATTRIBUTE_WIN_OFFLINE = 4096 ;
	const integer ATTRIBUTE_WIN_NOT_CONTENT_INDEXED = 8192 ;
	const integer ATTRIBUTE_WIN_ENCRYPTED = 16384 ;
	const integer ATTRIBUTE_WIN_VIRTUAL = 65536 ;
	const integer ATTRIBUTE_UNIX_WORLD_EXECUTE = 1 ;
	const integer ATTRIBUTE_UNIX_WORLD_WRITE = 2 ;
	const integer ATTRIBUTE_UNIX_WORLD_READ = 4 ;
	const integer ATTRIBUTE_UNIX_GROUP_EXECUTE = 8 ;
	const integer ATTRIBUTE_UNIX_GROUP_WRITE = 16 ;
	const integer ATTRIBUTE_UNIX_GROUP_READ = 32 ;
	const integer ATTRIBUTE_UNIX_OWNER_EXECUTE = 64 ;
	const integer ATTRIBUTE_UNIX_OWNER_WRITE = 128 ;
	const integer ATTRIBUTE_UNIX_OWNER_READ = 256 ;
	const integer ATTRIBUTE_UNIX_STICKY = 512 ;
	const integer ATTRIBUTE_UNIX_SETGID = 1024 ;
	const integer ATTRIBUTE_UNIX_SETUID = 2048 ;
	const integer ATTRIBUTE_UNIX_FINAL_QUARTET = 61440 ;
	const integer ATTRIBUTE_UNIX_FIFO = 4096 ;
	const integer ATTRIBUTE_UNIX_CHAR_DEV = 8192 ;
	const integer ATTRIBUTE_UNIX_DIRECTORY = 16384 ;
	const integer ATTRIBUTE_UNIX_BLOCK_DEV = 24576 ;
	const integer ATTRIBUTE_UNIX_REGULAR_FILE = 32768 ;
	const integer ATTRIBUTE_UNIX_SYM_LINK = 40960 ;
	const integer ATTRIBUTE_UNIX_SOCKET = 49152 ;

	
	public function extract ($dir, $filepath = "", $password = NULL, $extended_data = false) {
		throw new Exception("Not Implemented");
	}

	public function getAttr () {
		throw new Exception("Not Implemented");
	}

	public function getCrc () {
		throw new Exception("Not Implemented");
	}

	public function getFileTime () {
		throw new Exception("Not Implemented");
	}

	public function getHostOs () {
		throw new Exception("Not Implemented");
	}

	public function getMethod () {
		throw new Exception("Not Implemented");
	}

	public function getName () {
		throw new Exception("Not Implemented");
	}

	public function getPackedSize () {
		throw new Exception("Not Implemented");
	}

	public function getStream ($password = null) {
		throw new Exception("Not Implemented");
	}

	public function getUnpackedSize () {
		throw new Exception("Not Implemented");
	}

	public function getVersion () {
		throw new Exception("Not Implemented");
	}

	public function isDirectory () {
		throw new Exception("Not Implemented");
	}

	public function isEncrypted () {
		throw new Exception("Not Implemented");
	}

	public function __toString () {

	}

}