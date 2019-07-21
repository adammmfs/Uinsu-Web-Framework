<?php

class Tester extends Route{
    
    public function index()
    {       
        $this -> bind('/tester/default');
    }  
   
    public function datatable()
    {
        $this -> bind('/tester/datatable');
    }
   
    public function databaseBuilder()
    {
        $this -> state('test') ->  buatTabel();
    }
    
}
