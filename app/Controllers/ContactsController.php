<?php 
namespace App\Controllers;

use App\Core\Controller;

class ContactsController extends Controller{
	public function index(){

		$this->data->title = _("Contact us");
		
		$this->view->render('contacts', $this->data);
	}
}