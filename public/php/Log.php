<?php
class Log{
    public function logMessage($logLevel, $message) {
        $opensFile = new File();
        $opensFile->write($logLevel . $message);
    }
    public function info($message){
        return logMessage("ERROR", $message);
    }
    public function error($message){
        return logMessage("INFO", $message);
    }
}



 ?>
