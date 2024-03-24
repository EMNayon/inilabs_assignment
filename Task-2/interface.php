<?php

// interface
interface Logger {
    public function log($message);
}

// Implementing  logger interface
class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function log($message) {
        file_put_contents($this->filename, $message . "\n", FILE_APPEND);
    }
}

// instanse create
$fileLogger = new FileLogger("log.txt");
$fileLogger->log("Logging message from FileLogger.");

