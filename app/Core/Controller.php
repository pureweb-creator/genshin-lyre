<?php

namespace App\Core;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * Controller
 */
abstract class Controller
{
    protected ?Logger $logger;
	protected ?View $view;
	protected object $data;
	protected string $domain = "messages";

	public function __construct()
	{
        // Set logging
        $this->logger = new Logger('controller');
        $this->logger->pushHandler(new StreamHandler('debug.log'));

        // Prepare the data view
		$this->data = (object) array(
			'active' => Router::getCurrentController(),
			'home_url' => Router::getUrl()
		);

		$this->view = new View();
	}
}