<?php

namespace Factory\Log;

class Log
{

	private $file;

	public function __construct($file = NULL)
	{
		if (!$file) {
			$this->file = base_path().'/storage/logs/laravel.log';
		} else {
			$this->file = $file;
		}
	}

	public function error($message)
	{
		$fd = fopen($this->file, 'a');
		fwrite($fd, "\nLog Error: $message");
	}

	public function message($message)
	{
		$fd = fopen($this->file, 'a');
		fwrite($fd, "\nLog Message: $message");
	}
}