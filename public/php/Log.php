<?php
class Log{
    public $currentDate;
    public $loggedTime;
    public $handle;
    public $filename;
    public function __construct($prefix = 'log'){
        $this->currentDate    = date('Y-m-d');
        $this->loggedTime     = date('g:i:s');
        $this->filename = "{$prefix}-{$this->currentDate}.log";
    }
    public function logMessage($logLevel, $message) {
       $this->handle = fopen($this->filename, 'a');
       fwrite($this->handle, $this->currentDate . '-' . $this->loggedTime.' ' . $message .PHP_EOL);
    }
    public function __destruct(){
        fclose($this->handle);
    }

    public function info($message){
        return logMessage("ERROR", $message);
    }
    public function error($message){
        return logMessage("INFO", $message);
    }
}



 ?>
