<?php


class Database{
    
       
    public $link;

    // DB connection Method
    function connection (){

        // DB Connection array
        private $db = ["db_Host"=>"localhost", "db_Username" => "root", "db_Password" => "", "db_Name" => "archon"];

        /*
         * Runs through each value in the $db['']
         * Generates associative values for each item in the `$db` array
         * 
         */ 
        foreach ($db as $key => $value){

            // Transforms all `keys` into constants (Constants have to be uppercase)
            define (strtoupper($key),$value);

        }

        // Establish db link connection with `constants`
        $this->$link = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

        // Error handling
        if($link === false){

            // kills the db connection and prevents further use
            die("DB connection error: ".mysqli_error());

        }

    }
}

?>
    
    
