<?php 

/* START::Title => Used to generate the `titles` for each page */
class Titles{
    
    static $page_Title = "";
    
    /* Used to generate titles based on `GET[]`  */
    static function generateTitles(){
        
        global $link;
        
        if(isset($_GET['cat-zone'])){
            
            // Prepare query statement
            $query = "SELECT `cat_title` FROM `categories` WHERE `cat_id` = ".mysqli_real_escape_string($link, $_GET['cat-zone']);
            
            // Run query
            $results = mysqli_query($link, $query);
            
            // ensures that query was successfull
            if(!$results){
                
                die("QUERY FAILURE: </br>" . $link . "</br" . mysqli_error($link));
                
            }
            
            // Fetch `query -> Array` results
            $row = mysqli_fetch_assoc($results);
            
            echo Titles::$page_Title = $row['cat_title'];
            
        }
        
    }
    
}
/* /. Title */

?>