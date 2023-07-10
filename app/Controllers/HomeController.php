<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\MelodiesModel;

class HomeController extends Controller
{
    public function index()
    {
        $model = new MelodiesModel();
        
        $melody_id = htmlspecialchars($_GET['melody_id'] ?? 1);
        $melody = $model->getMelody($melody_id);
        $melody[0]->notes = json_encode(explode(' / ', $melody[0]->notes));
        
        if (!empty($melody))
            $this->data->chosenMelody = array_shift($melody);

        $this->data->melodiesList = $model->getAllMelodies();
        $this->data->title = "Genshin Impact Lyre";

        $this->view->render('index', $this->data);    
    }
}
