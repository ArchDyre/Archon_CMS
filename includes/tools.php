<?php 

// Class containing general tools used in the project
class Tools{
    
    static public function queryCheck($result,$query){
        
        global $link;
        
        if(!$result){
            
            die("QUERY FAILED: " . $query . "</br>" . mysqli_error($link));
            
        }
        
    }
    /* /. method -> queryCheck() */
    
}
/* /. class Tools */


?>