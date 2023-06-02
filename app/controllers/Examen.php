<?php
class Examen extends BaseController
{
    private $ExamenModel;

    function __construct()
    {
        $this->ExamenModel = $this->model('ExamenModel');
    }
    function index()
    {
        $result = $this->ExamenModel->getExamen();
        
        $data = [
            'title' => "Examen",
            'result' => $result
        ];
        
        // var_dump($data);
        $this->view('Examen/index',$data);
    }
}