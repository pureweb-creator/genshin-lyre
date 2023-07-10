<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Models\UserModel;

class HomeController extends Controller{

    public function __construct()
    {
        $this->model = new UserModel();

        parent::__construct();
    }

    public function index()
    {
		if ($_POST){
			$this->csrf_check();

			// OTHER STUFF GOES HERE
			
			header('Location: ./');
		}

        $users = $this->model->getAllUsers();

		$this->data->title = _("Home");
        $this->data->users = $users;

		$this->view->render('index', $this->data);
	}
}