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
	protected $model;
	protected object $data;
	protected array $available_languages;
	protected array $lang_codes;
	protected string $default_lang;
	protected string $cur_lang;
	protected string $domain = "messages";

	public function __construct()
	{
        // Set logging
        $this->logger = new Logger('controller');
        $this->logger->pushHandler(new StreamHandler('debug.log'));

		// Setup app language
		$this->set_language();

		// Redirect if wrong lang in url
		if (!in_array($this->cur_lang, $this->available_languages))
			header("Location: ".SITEURL."/{$this->default_lang}");

        // Prepare the data view
		$this->data = (object) array(
			'active' => Router::getCurrentController(),
			'home_url' => Router::getUrl(),
			'lang_code' => $this->cur_lang,
			'lang_list' => $this->available_languages
		);

		$this->view = new View();
	}

	protected function set_language(){
		$this->available_languages = ['ru', 'en'];
		$this->lang_codes = ['en'=>'en_US','ru' => 'ru_RU'];
		$this->default_lang = $this->available_languages[0];
		$this->cur_lang = Router::getCurrentLang();

		bindtextdomain($this->domain, $_SERVER['DOCUMENT_ROOT']."/locale/");
		putenv("LANGUAGE={$this->lang_codes[$this->cur_lang]}");
		setlocale(LC_ALL, $this->lang_codes[$this->cur_lang].".utf8");
	}

	protected function csrf_check(): void
    {
		if (!isset($_POST['csrf'])){
			die("No CSRF token provided");
		}
		if ($_POST['csrf'] != $_SESSION['csrf_token']){
			die("CSRF token mismatch");
		}

		unset($_SESSION['csrf_token']);
	}
}