<?php 
class Log
{
	public $filename;
	public $handle;
	public function __construct($prefix = "../logs/log"){
		$this->filename= "{$prefix}-" . date("Y-m-d") . ".log";
		$this->handle = fopen($this->filename, 'a');
	}
	public function logInfo($message){
	    return $this->logMessage("INFO", $message);
	}
	public function logError($message){
	    return $this->logMessage("ERROR", $message);
	}
	public function logMessage($logLevel, $message)
	{
	    fwrite($this->handle, PHP_EOL . date("Y-m-d H:i:s ") . "[{$logLevel}] $message" . PHP_EOL);
	}
	public function __destruct(){
		fclose($this->handle);
	}
}
 ?>