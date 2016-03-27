<?php
class Log{
    private $currentDate;
    private $loggedTime;
    private $handle;
    private $filename;
    public function __construct($prefix = 'log'){
        $this->currentDate    = date('Y-m-d');
        $this->loggedTime     = date('g:i:s');
        $this->create_filename();
    }

    private function create_filename($prefix = 'log')
    {
        $this->filename = (string) "{$prefix}-{$this->currentDate}.log";

        if (is_writable($this->filename) && touch($this->filename)) {
            $this->handle = fopen($this->filename, 'a');
        }else {
            return 'this failed';
        }

    }

    public function logMessage($logLevel, $message) {
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
