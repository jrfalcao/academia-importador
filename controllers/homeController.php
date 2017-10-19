<?php
class homeController extends controller 
{
    public function __construct() {
    }
    
    public function index() {
        $dados = array();

                
        
        $this->loadTemplate('home', $dados);
    }

    public function ajax_btn(){
    	if(isset($_POST['nome']) && !empty($_POST['nome'])){
        	var_dump($_POST); exit;
        }
    }

}