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
        if($cat_Id != 1 && $cat_Id != 2){
            
            // Start of table-row                                            
            echo "<tr>";

                echo "<td scope='row' class='text-center'>".$cat_Id."</td>";
                echo "<td>".$cat_Title."</td>";
                echo "<td class='text-center'><a href='categories.php?edit=".$cat_Id."'>Edit</a></td>";
                echo "<td class='text-center'><a href='categories.php?delete=".$cat_Id."'>Delete</a></td>";

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
            
            // Prepare query statement to CHANGE the category (cat_id) of posts with the deleted `cat_id`
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


// Used to delete `categories` from the DB
function post_Delete(){
    
    global $link;
    global $_GET;
    
    if(isset($_GET['delete'])){
        
        // Assign $_GET key to a variable
        $post_Get_Id = $_GET['delete'];
        
        // Prepare query statement to DELETE the category (cat_id) used
        $query = "DELETE FROM `posts` WHERE `post_id` = '".mysqli_real_escape_string($link,$post_Get_Id)."'";
        
        // Run delete query and assign to variable to ensure it executed
        $run = mysqli_query($link,$query);
        
        if(!$run){
            
            die("QUERY FAILED: " . mysqli_error($link));
            
        }else{
            
            
                // Used to refresh the page
                header("Location: posts.php");
                

            
        }
        
    }
    
    
}
// /. func delete_Cat()

class Posts{
    
    // Initialise initial values
    public $post_Title = "";
    public $post_Category_Id = "";
    public $post_Status = "";
    // Image stored on database
    public $post_Image = "";
    public $post_Tags = "";
    public $post_Author = "";
    
    public $post_Date = "";
    public $post_Contents = "";
    
    // Validates that fields aren't empty
    function validation($error_Message){
        
        global $_POST;
        
        if(!isset($_POST['post_Title']) || empty($_POST['post_Title'])){
            
            $error_Message .= "<p> Please provide a `Post Title` to continue </p>";
            
        }
        
        if(!isset($_POST['post_Category']) || empty($_POST['post_Category'])){
            
            $error_Message .= "<p> Please provide a `Post Title` to continue </p>";
            
        }
        
        if(!isset($_POST['post_Status']) || empty($_POST['post_Status'])){
            
            $error_Message .= "<p> Please provide a `Post Status` to continue </p>";
            
        }
        
        if(!isset($_POST['post_Tags']) || empty($_POST['post_Tags'])){
            
            $error_Message .= "<p> Please provide a `Post Tag(s)` to continue </p>";
            
        }
        
        if(!isset($_POST['post_Author']) || empty($_POST['post_Author'])){
            
            $error_Message .= "<p> Please provide a `Post Author` to continue </p>";
            
        }
        
        if(!isset($_POST['post_Content']) || empty($_POST['post_Content'])){
            
            $error_Message .= "<p> Please provide `Post Content` to continue </p>";
            
        }
        
        return $error_Message;
        
    }
    /* /. validation */
    
    
    /* UPDATE DB - Method */
    function update_DB($new_Variables){
        
        global $link;
              
        // Moves the `uploaded user image` to the `image` folder after $_POST[] submit
        move_uploaded_file($new_Variables['post_Temp_Image_Location'], "../images/posts/{$new_Variables['post_Image']}");
        
        // Inserts <br> tags after `new lines`
        // Used to display correct for `post- users/readers`
        $new_Variables['post_Contents'] = nl2br($new_Variables['post_Contents']);
        
        // Insert into DB
        if($new_Variables['post_Type'] == "add"){
            
            // Create DB `query`
            // PART - 1
            $query = "INSERT INTO `posts` (
            `post_title`,
            `post_category_id`,
            `post_status`,
            `post_tags`,
            `post_author`,
            `post_date`,
            `post_image`,
            `post_content`)";
            
            // PART - 2
            $query .= " VALUES (
            '".mysqli_real_escape_string($link,$new_Variables['post_Title']).
            "',".mysqli_real_escape_string($link,$new_Variables['post_Category_Id']).
            ",'".mysqli_real_escape_string($link,$new_Variables['post_Status']).
            "','".mysqli_real_escape_string($link,$new_Variables['post_Tags']).
            "','".mysqli_real_escape_string($link,$new_Variables['post_Author']).
            "', now(),
            '".mysqli_real_escape_string($link,$new_Variables['post_Image']).
            "','".mysqli_real_escape_string($link,$new_Variables['post_Contents'])."')";
            
        }elseif($new_Variables['post_Type'] == "edit"){
            
            // Create DB `query`
           
            $query = "UPDATE `posts` SET 
            `post_title` = '".mysqli_real_escape_string($link,$new_Variables['post_Title']).
            "',`post_category_id` = '".mysqli_real_escape_string($link,$new_Variables['post_Category_Id']).
            "',`post_status` = '".mysqli_real_escape_string($link,$new_Variables['post_Status']).
            "',`post_tags` = '".mysqli_real_escape_string($link,$new_Variables['post_Tags']).
            "',`post_author` = '".mysqli_real_escape_string($link,$new_Variables['post_Author']).
            "',`post_content` = '".mysqli_real_escape_string($link,$new_Variables['post_Contents']).
            "' WHERE `post_id` = ".mysqli_real_escape_string($link, $new_Variables['post_Id']);
            
            
        }
        
        
        
        
        $results = mysqli_query($link,$query);
        
        if(!$results){
            
            die("QUERY FAILURE: " . mysqli_error($link));
            
        }else{
            
            $last_Post_Id = mysqli_insert_id($link);
            
            // Display success messages
            if($new_Variables['post_Type'] == "add"){
                
                header ('Location: posts.php?source=edit-post&secret='.$last_Post_Id.'&cat='.$new_Variables['post_Category_Id'].'&message=true');
                // Success `created` Message
                echo "<div class='alert alert-success'> <p>Successfully Created Post</p></div>";
                
            }elseif($new_Variables['post_Type'] == "edit"){
                
                //header ('Location: posts.php?source=edit-post&secret='.$new_Variables['post_Id'].'&cat='.$new_Variables['post_Category_Id'].'&message=true');
                // Success `edit` Message
                echo "<div class='alert alert-success'> <p>Successfully Edited Post</p></div>";
                
            }
            
            
        }
        
    }
    /* /. update_DB */
    
    
    
    // Used to set variables == DB equavilants
    function set_Edit_Variables($edit_Post_Id){
        
        global $link;
        
        // initialise query
        $query = "SELECT * FROM `posts` WHERE `post_id` = ".mysqli_real_escape_string($link,$edit_Post_Id);
        
        // run query
        $results = mysqli_query($link,$query);
        
        if(!$results){
            
            die ("QUERY FAILURE </br> '" . $query . "' <br>" . mysqli_error($link));
            
        }
        
        // Fetch array results
        $row = mysqli_fetch_assoc($results);
        
        // Change Variables `values`
        $this -> post_Title = $row['post_title'];
        $this -> post_Category_Id = $row['post_category_id'];
        $this -> post_Status = $row['post_status'];
        $this -> post_Image = $row['post_image'];
        $this -> post_Tags = $row['post_tags'];
        $this -> post_Author = $row['post_author'];
        $this -> post_Date = $row['post_date'];
        $this -> post_Contents = $row['post_content'];
        
    }
    
    // Used to see which `POST-Submit` type it is: `EDIT` || `ADD`
    function check_POST(){
        
        // Update DB with user submited variables from `POST`
        if(isset($_POST['edit_Post_Submit']) || isset($_POST['add_Post_Submit'])){
            
            // Clear Error message
            $error_Message = "";
            
            // insert error checking method
            $this -> validation($error_Message);
            
            // Sets $post_Id if the GET variable is available
            if(isset($_GET['secret'])){
                
                $post_Id = $_GET['secret'];
                
            }else{
                $post_Id = "";
                
            }
            
            if(isset($_POST['edit_Post_Submit'])){
                
                $post_Type = "edit";
                
            }elseif(isset($_POST['add_Post_Submit'])){
                
                $post_Type = "add";
                
            }
            
            // Assign Variables
            $new_Variables = array (
                
                'post_Id' => $post_Id,
                
                'post_Type' => $post_Type,
                
                'post_Title' => $_POST['post_Title'],
                'post_Category_Id' => intval($_POST['post_Category']),
                'post_Status' => $_POST['post_Status'],
                
                // Image stored on database
                'post_Image' => $_FILES['post_Image']['name'],
                // Stores uploaded images in a temporary place
                'post_Temp_Image_Location' => $_FILES['post_Image']['tmp_name'],
                
                'post_Tags' => $_POST['post_Tags'],
                'post_Author' => $_POST['post_Author'],
                
                'post_Date' => date("d-m-Y"),
                'post_Contents' => $_POST['post_Content'],
                
            );
            
            // Checks to see if there are any errors and displayes them if there are
            if($error_Message != ""){
                
                $error_Message = "<div class='alert alert-danger text-center p-2'> <span class='h5'>An error(s) occured:</span> <p>".$error_Message."</p></div";
                
                // Echo error message(s)
                echo $error_Message;
                
            }else{
                
                // insert duction to handle values => bd update
                $this -> update_DB($new_Variables);
                
            }
            
        }
        
    }
    
    
}


?>