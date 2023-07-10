<?php 
namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller{
	public function index(){

		$this->data->title = _("About us");
		$this->view->render('about', $this->data);
	}
}