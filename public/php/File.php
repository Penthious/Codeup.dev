<?php
class File{
    private $currentYear;
    private $currentMonth;
    private $currentDay;
    private $loggedHour;
    private $loggedMinute;
    private $loggedSecond;
    private $handle;
    private function open(){
         $this->currentYear    = date('Y');
         $this->currentMonth   = date('m');
         $this->currentDay     = date('d');
         $this->loggedHour     = date('g');
         $this->loggedMinute   = date('i');
         $this->loggedSecond   = date('s');

        $this->filename = "log--{$this->currentYear}--{$this->currentMonth}--{$this->currentDay}.log";

        $this->handle = fopen($this->filename, 'a');

    }
    public function write($message){
        $this->open();
        fwrite($this->handle, $this->currentYear . '-' . $this->currentMonth . '-' . $this->currentDay . ' ' . $this->loggedHour . ':' . $this->loggedMinute . ':' . $this->loggedSecond .' ' . $message .PHP_EOL);
        $this->close();
    }
    private function close(){
        fclose($this->handle);
    }
}


 ?>
