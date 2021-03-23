<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Recipt.php';
require_once __DIR__ . '/../repository/ReciptRepository.php';

class N_reciptController extends AppController
{
    private $ReciptRepository;
    private $messageT = ["mess"];
 <?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Recipt.php';
require_once __DIR__ . '/../repository/ReciptRepository.php';

class N_reciptController extends AppController
{
    private $ReciptRepository;
    private $messageT = ["mess"];
    private $re=[];


    public function __construct()
    {
        parent::__construct();
        $this->ReciptRepository = new ReciptRepository();
    }

    public function recipts(){
        $recipts = $this->ReciptRepository->getRecipts();
         return $this->render('My_recipt',['recipts' => $recipts]);

    }

    public function add_recipts(){
        if ($this->isPost()){
            $recipt=new Recipt($_POST["name"],$_POST["style"],0,$_POST["volume"],$_POST["malt"],$_POST["kg"],$_POST["yeats"],$_POST["hop"],$_POST["g"],$_POST["min"],"sd",0,0);
            $this->ReciptRepository->addRecipt($recipt);
            $recipts = $this->ReciptRepository->getRecipts();
            return $this->recipts();
            ;
        }
        return $this->render('new_recipt', ['messages' => ["nn"]]);
    }

    public function N_recipt()
    {
        $recipts = $this->ReciptRepository->getRecipts();
        $this->render("new_recipt",['recipts' => $recipts]);
    }
}