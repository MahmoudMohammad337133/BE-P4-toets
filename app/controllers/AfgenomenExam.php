<?php
class AfgenomenExam extends BaseController
{
    private $AfgenomenExamens;

    function __construct()
    {
        $this->AfgenomenExamens = $this->model('AfgenomeExamModel');
    }
    function index()
    {
        $result = $this->AfgenomenExamens->getAfgenomenExams();
        
        $data = [
            'title' => "Overzicht Afgenomen Examens Examinatoren",
            'result' => $result
        ];
        
        // var_dump($data);
        $this->view('AfgenomenExam/index',$data);
    }
}