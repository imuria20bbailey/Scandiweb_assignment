<?php

class Database
{   

     // CLASS PROPERTIES
    public  $connect;  
    private $host = "localhost";  
    private $username = 'pooldoctors_assignment';  
    private $password = '@$$1GnMent';  
    private $database = 'pooldoctors_assignment'; 

    // CLASS METHODS
     function __construct()  
     {  
          $this->database_connect();  
     }  


     public function database_connect()  
     {  
          $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);  
     }  


     public function execute_query($query)  
     {  
          return mysqli_query($this->connect, $query);  
          
     } 


}

?>