<?php
class Examinator extends BaseController
{
    private $ExaminatorModel;

    function __construct()
    {
        $this->ExaminatorModel = $this->model('ExaminatorModel');
    }
    function index()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id']; // Retrieve the ID from the URL parameter
            $result = $this->ExaminatorModel->getExamenPerExaminator($id);
        } else {
            $result = $this->ExaminatorModel->getExamenPerExaminator();
        }
        
        $result = $this->ExaminatorModel->getExamenPerExaminator($id);
        
        $data = [
            'title' => "Door instructeur gebruikte voertuigen",
            'result' => $result
        ];
        
        // var_dump($data);
        $this->view('Examinator/index',$data);
    }
}