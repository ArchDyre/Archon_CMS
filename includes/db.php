<?php
// DB Connection
$db = ["db_Host"=>"127.0.0.1", "db_Username" => "root", "db_Password" => "", "db_Name" => "archon"];

// runs through each value in the $db['']
foreach ($db as $key => $value){
    
    // Transforms all `keys` into constants (Constants have to be uppercase)
    define (strtoupper($key),$value);
    
}

// Establish bd link connection with `constants`
$link = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

// Error handling
if($link === false){
    
    // kills the db connection and prevents further use
    die("DB connection error: ".mysqli_error());
        
}




// Declares and initialises connection variables for DB (NOT IN USE AT THE MOMENT)
class Dbconfig{
    
    protected $host_Name;
    protected $user_Name;
    protected $user_Password;
    protected $db_Name;
    
    function dbConfig(){
        
        // DB Connection
        $db = ["db_Host"=>"127.0.0.1", "db_Username" => "root", "db_Password" => "", "db_Name" => "archon"];
        
        // runs through each value in the $db['']
        foreach ($db as $key => $value){
            
            // Transforms all `keys` into constants (Constants have to be uppercase)
            define (strtoupper($key),$value);
            
        }
        
        // Establish bd link connection with `constants`
        $link = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
        
        // Error handling
        if($link === false){
            
            // kills the db connection and prevents further use
            die("DB connection error: ".mysqli_error());
            
        }
        
    }
    
}

// Contains all methods relating to queries (NOT IN USE AT THE MOMENT)
class Mysql extends Dbconfig{
    
    
    
}


?>