<?php
class instructeurGebruiktAuto extends BaseController
{
    private $instructeurGebruiktAutoModel;

    function __construct()
    {
        $this->instructeurGebruiktAutoModel = $this->model('instructeurGebruiktAutoModel');
    }
    function index()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id']; // Retrieve the ID from the URL parameter
            $result = $this->instructeurGebruiktAutoModel->getInstructeursCars($id);
        } else {
            $result = $this->instructeurGebruiktAutoModel->getInstructeursCars();
        }
        
        $result = $this->instructeurGebruiktAutoModel->getInstructeursCars($id);
        
        $data = [
            'title' => "Door instructeur gebruikte voertuigen",
            'result' => $result
        ];
        
        // var_dump($data);
        $this->view('InstructeurGebruiktAuto/index',$data);
    }
}