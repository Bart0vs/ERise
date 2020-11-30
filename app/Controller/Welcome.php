<?php

class Principal extends E_Controller{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->template->load('welcome', 'welcome');

    }

}