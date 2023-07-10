<?php

namespace App\Core;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Model
 */
abstract class Model
{
	protected \PDO $pdo;
    protected Logger $logger;

	public function __construct()
	{
        $this->logger = new Logger('model');
        $this->logger->pushHandler(new StreamHandler('debug.log'));

        try {
	        $this->pdo = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USERNAME,DB_PASSWORD);
        } catch (\Exception $e){
            $this->logger->critical('Could not connect to the database');
            die("No database connection");
        }
	}
}