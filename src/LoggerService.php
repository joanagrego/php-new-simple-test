<?php
namespace App;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LoggerService
{
    private $logger;
    
    public function __construct()
    {
        $this->logger = new Logger('app');
        $this->logger->pushHandler(new StreamHandler('php://stdout', Logger::INFO));
    }
    
    public function log($message)
    {
        
        $this->logger->addRecord(Logger::INFO, $message, ['timestamp' => time()]);
    }
}