<?php

// Used to `view all categories` from the database
function cat_View_All(){
    
    global $link;
    
    // Find all categories to display 
    $query = "SELECT * FROM `categories`";

    // $results = Query resutls
    $results = mysqli_query($link, $query);

    while($row = mysqli_fetch_assoc($results)){

        $cat_Id = $row['cat_id'];
        $cat_Title = $row['cat_title'];
        
        // Ensures that the `category -unsorted-` can't be deleted
        if($cat_Id != 1){
            
            // Start of table-row                                            
            echo "<tr>";

                echo "<td scope='row' class='text-center'>".$cat_Id."</td>";
                echo "<td>".$cat_Title."</td>";
                echo "<td class='text-center'><a href='categories.php?edit=".$cat_Id."'>Edit</a></td>";
                echo "<td class='text-center'><a href='categories.php?delete=".$cat_Id."'>Delete</a></td>";

            echo "</tr>"; /* <!-- /.tr --> */
            
        }elseif($cat_Id == 1){
            
            // Start of table-row                                            
            echo "<tr>";

                echo "<td scope='row' class='text-center'>".$cat_Id."</td>";
                echo "<td>".$cat_Title."</td>";

            echo "</tr>"; /* <!-- /.tr --> */
            
        }

    }
    
}
// END OF: func view_Cat()

// Used to delete `categories` from the DB
function cat_Delete(){
    
    global $link;
    global $_GET;
    
    if(isset($_GET['delete'])){

        // Assign $_GET key to a variable
        $cat_Get_Id = $_GET['delete'];

        // Prepare query statement to DELETE the category (cat_id) used
        $query = "DELETE FROM `categories` WHERE `cat_id` = '".mysqli_real_escape_string($link,$cat_Get_Id)."'";

        // Run delete query and assign to variable to ensure it executed
        $run = mysqli_query($link,$query);

        if(!$run){

            die("QUERY FAILED: " . mysqli_error($link));

        }else{
            
            // Prepare query statement to CHANGE the category (cat_id) of posts with thedeleted `cat_id`
            $query = "UPDATE `posts` SET `post_category_id` = 1 WHERE `post_category_id` = '".mysqli_real_escape_string($link,$cat_Get_Id)."'";

            // Run delete query and assign to variable to ensure it executed
            $run = mysqli_query($link,$query);

            if(!$run){

                die("QUERY FAILED: " . mysqli_error($link));

            }else{
                
                // Repeat query until all related posts have been affected
                while($row = mysqli_fetch_assoc($run)){}


                // Used to refresh the page
                header("Location: categories.php");

            }

        }

    }
    
    
}                                        
// /. func delete_Cat()

// Used to add a new `category` to the database
function cat_Add(){
    
    global $link;
    global $_Post;
    
    if(isset($_POST['cat_Title_Submit'])){
                                    
        if($_POST["cat_Title"] == "" || empty($_POST["cat_Title"])){

            echo "<div class='alert alert-danger text-center'> Please fill in a new category name to continue. </div>";

        }else{

            // Assign POST value to variable
            $category_Title = $_POST['cat_Title'];

            // Create query statement
            $query = "INSERT INTO `categories` (`cat_title`) VALUE ('".mysqli_real_escape_string($link,$category_Title)."')";

            // Execute sql query and assaign a variable to determine success of execution
            $run = mysqli_query($link,$query);

            // Check if the query `executed` succesfully
            if(!$run){

                die("QUERY FAILED" . mysqli_error($link));
                
            // END OF: if()
            }else{
                
                echo "<div class='alert alert-success text-center'> Category '".$category_Title."' has been successfully added. </div>";
                
            }

        } // END OF: else()


    }// END OF: if()
    
}
// END OF: func cat_Add()


?>