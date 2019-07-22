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

    public function formDatabase()
    {
        $this -> bind('/tester/formDatabase');
        
    }

    public function sqlCommand()
    {
        $status = ['status_command ' => 'Table successfully created'];
        $this -> state('test') ->  buatTabel();
        echo "Table successfully created";
    }
   
    public function databaseBuilder()
    {
        //$this -> state('test') ->  buatTabel();
    }
    
}
