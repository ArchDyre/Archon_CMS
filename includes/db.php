<?php
// DB Connection
$db = ["db_Host"=>"localhost", "db_Username" => "root", "db_Password" => "", "db_Name" => "archon"];

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




?>