<?php

include_once '../includes/tools.php';

// Used to `view all categories` from the database
function catViewAll(){
    
    global $link;
    
    // Find all categories to display 
    $query = "SELECT * FROM `categories`";

    // $results = Query resutls
    $results = mysqli_query($link, $query);
    
    // Kills `MySql` connection and creates error report if the query didn't run
    echo Tools::queryCheck($results,$query);

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
function catDelete(){
    
    global $link;
    global $_GET;
    
    if(isset($_GET['delete'])){
          
        // Assign $_GET key to a variable
        $cat_Get_Id = $_GET['delete'];

        // Prepare query statement to DELETE the category (cat_id) used
        $query = "DELETE FROM `categories` WHERE `cat_id` = '".mysqli_real_escape_string($link,$cat_Get_Id)."'";

        // Run delete query and assign to variable to ensure it executed
        $results = mysqli_query($link,$query);

        // Kills `MySql` connection and creates error report if the query didn't run
        echo Tools::queryCheck($results,$query);
            
        // Prepare query statement to CHANGE the category (cat_id) of posts with the deleted `cat_id`
        $query = "UPDATE `posts` SET `post_category_id` = 1 WHERE `post_category_id` = '".mysqli_real_escape_string($link,$cat_Get_Id)."'";

        // Run delete query and assign to variable to ensure it executed
        $run = mysqli_query($link,$query);

        // Kills `MySql` connection and creates error report if the query didn't run
        echo Tools::queryCheck($run,$query);
            
        // Repeat query until all related posts have been affected
        while($row = mysqli_fetch_assoc($run)){}


        // Used to refresh the page with the new `values`
        header("Location: categories.php");



    }
    
    
}                                        
// /. func delete_Cat()

// Used to add a new `category` to the database
function catAdd(){
    
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

            // Kills `MySql` connection and creates error report if the query didn't run
            echo Tools::queryCheck($run,$query);
            
            // Echo success Message
            echo "<div class='alert alert-success text-center'> Category '".$category_Title."' has been successfully added. </div>";


        } // END OF: else()


    }// END OF: if()
    
}
// END OF: func cat_Add()




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
    function updateDB($new_Variables){
        
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
        
        // Kills `MySql` connection and creates error report if the query didn't run
        echo Tools::queryCheck($results,$query);
        
        // Finds out the last post that was insert into the db's `id`
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
    /* /. update_DB */
    
    
    
    // Used to set variables == DB equavilants
    function setEditVariables($edit_Post_Id){
        
        global $link;
        
        // initialise query
        $query = "SELECT * FROM `posts` WHERE `post_id` = ".mysqli_real_escape_string($link,$edit_Post_Id);
        
        // run query
        $results = mysqli_query($link,$query);
        
        // Kills `MySql` connection and creates error report if the query didn't run
        echo Tools::queryCheck($results,$query);
        
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
    function checkPOST(){
        
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
                $this -> updateDB($new_Variables);
                
            }
            
        }
        
    }
    /* /. checkPOST() */
    
    
    // Used to delete `Posts` from the DB
    function postDelete(){
        
        global $link;
        global $_GET;
        
        if(isset($_GET['delete'])){
            
            // Assign $_GET key to a variable
            $post_Get_Id = $_GET['delete'];
            
            // Prepare query statement to DELETE the `post` (post_id) used
            $query = "DELETE FROM `posts` WHERE `post_id` = '".mysqli_real_escape_string($link,$post_Get_Id)."' LIMIT 1";
            
            // Run delete query and assign to variable to ensure it executed
            $run = mysqli_query($link,$query);
            
            // Kills `MySql` connection and creates error report if the query didn't run
            echo Tools::queryCheck($run,$query);
                
            // Used to refresh the page
            header("Location: posts.php");
                
            
        }
        
        
    }
    // /. postDelete()
    
    
    
}


class Comments{
    
    
    // Used to delete `comments` from the DB
    function commentDelete(){
        
        global $link;
        global $_GET;
        
        if(isset($_GET['delete'])){
            
            // Assign $_GET key to a variable
            $comment_Get_Id = $_GET['delete'];
            
            // Prepare query statement to DELETE the `post` (post_id) used
            $query = "DELETE FROM `comments` WHERE `comment_id` = '".mysqli_real_escape_string($link,$comment_Get_Id)."' LIMIT 1";
            
            // Run delete query and assign to variable to ensure it executed
            $results = mysqli_query($link,$query);
            
            // Kills `MySql` connection and creates error report if the query didn't run
            echo Tools::queryCheck($results,$query);
                
                // Used to refresh the page
                header("Location: comments.php");
                
        }
        
        
    }
    // /. commentDelete()
    
}
/* /. class Comments */

class Views{
    
    // used for visibility of table rows
    private $post_visible;
    private $comment_visible;
    
    // Default `table name` used in `$query`
    protected $data_Table = '';
    
    // Create Variables
    protected $id = '';
    protected $author = '';
    protected $title = '';
    protected $category = '';
    protected $status = '';
    protected $image = '';
    protected $tags = '';
    protected $total_comments = '';
    protected $origin_date = '';
    protected $email = '';
    protected $content = '';

    // Assign navigation / $_GET[]  => `href's`
    protected $view = "#";
    protected $approve = "#";
    protected $unapprove = "#";
    protected $edit = "#";
    protected $delete = "#";

    
    // Used to generate the table structure and contents
    function adminTableGenerate(String $type){
        
        // include method to validate $type
        $this -> validateType($type);
        
        // Insert method to determine visibility of `Table Headers` and `Table Content Entries`
        $this->variableVisibility($type);

        echo "<div class='table-responsive pb-5'>";
            echo "<table class='table table-striped table-bordered table-hover'>";
            
                echo "<thead class='thead-dark'>";
                    echo "<tr class='text-center'>";
                        //echo "<th scope='col'>Check</th>";
                        echo "<th scope='col'>ID</th>";
                        echo "<th scope='col'>Post Title</th>";
                        echo "<th scope='col'>Author</th>";
                        echo "<th scope='col' {$this->comment_visible}>Email</th>";
                        echo "<th scope='col' {$this->post_visible}>Category</th>";
                        echo "<th scope='col' {$this->comment_visible}>Content</th>";
                        echo "<th scope='col'>Status</th>";
                        echo "<th scope='col' {$this->post_visible}>Image</th>";
                        echo "<th scope='col' {$this->post_visible}>Tags</th>";
                        echo "<th scope='col' {$this->post_visible}>Comments</th>";
                        echo "<th scope='col'>Date</th>";
                        echo "<th scope='col'>View</th>";
                        echo "<th scope='col' {$this->comment_visible}>Approve</th>";
                        echo "<th scope='col' {$this->comment_visible}>Unapprove</th>";
                        echo "<th scope='col'>Edit</th>";
                        echo "<th scope='col'>Delete</th>";
                    echo "</tr>";
                echo "</thead>"; /* /.thead  */
            
                echo "<tbody>";
                
                /* Include php method to generate the table content */
                
                $this->adminTableContents($type);
                
                echo "</tbody>"; /* /. tbody */
            
            echo "</table>"; /* /.table  */
        echo "</div>"; /* /.div  */  

    }
    /* /. tableGenerator */
    
    function adminTableContents(String $type){
        
        global $link;
        
        // Determine table to be used based on input
        if($type == "posts"){
         
            $this->data_Table = "posts";
            
        }elseif($type == "comments"){
            
            $this->data_Table = "comments";
            
        }

        // create query
        $query = "SELECT * FROM `".mysqli_real_escape_string($link, $this->data_Table)."`";
        
        $results = mysqli_query($link,$query);
        
        // Kills `MySql` connection and creates error report if the query didn't run
        echo Tools::queryCheck($results,$query);
            
        while($row = mysqli_fetch_assoc($results)){
            
            // Assigns variables based on request - `$type`
            if($type == "posts"){
                
                // Assign variables to echo in table creation.
                $this->id = $row['post_id'];
                $this->author = $row['post_author'];
                $this->title = $row['post_title'];
                $this->category = $row['post_category_id'];
                $this->status = $row['post_status'];
                $this->image = $row['post_image'];
                $this->tags = $row['post_tags'];
                $this->total_comments = $row['post_comment_count'];
                $this->origin_date = $row['post_date'];

                // insert method to retrieve category title
                $this -> categoryTitle($this->category);
                
                // Check if `$post_Image` is empty && Assigns broken image if it is
                if($this->image == ""){
                    
                    $this->image = "broken-image.png";
                    
                }
                
                // Assign navigation / $_GET[]  => `href's`
                $this->image = "../images/posts/{$this->image}";
                $this->view = "../post.php?reference={$this->id}";
                $this->edit = "posts.php?source=edit-post&secret={$this->id}&cat={$row['post_category_id']}";
                $this->delete = "posts.php?delete={$this->id}";
                
            }elseif($type == "comments"){
                
                // Comment table related
                $this->id = $row['comment_id'];
                
                /*
                 * 
                 * CREATE FUNCTION for => `post title` related to the comment
                 * 
                 * 
                 * */
                $this->title = $row['comment_post_id'];
                    
                $this->author = $row['comment_author'];
                $this->email = $row['comment_email'];
                $this->content = substr(preg_replace('#(\\\r\\\n|\\\n)#', "\n", $row['comment_content']),0,100);
                $this->status = $row['comment_status'];
                $this->origin_date = $row['comment_date'];
                
                // Assign navigation / $_GET[]  => `href's`
                $this->view = "../comments.php?reference={$this->id}";
                $this->approve = "#";
                $this->unapprove = "#";
                $this->edit = "comments.php?source=edit-comment&secret={$this->id}&post={$row['comment_post_id']}";
                $this->delete = "comments.php?delete={$this->id}";
                
            }

                echo "<tr class='text-center'>";

                    //echo "<th scope='row' class='py-3'><input type='checkbox' name='checkbox{$this->id}'></th>";
                    echo "<th scope='row'>{$this->id}</th>";
                    echo "<td>{$this->title}</td>";
                    echo "<td>{$this->author}</td>";
                    echo "<td {$this->comment_visible}>{$this->email}</td>";
                    echo "<td {$this->comment_visible}>{$this->content}</td>";
                    echo "<td {$this->post_visible}>{$this->category}</td>";
                    echo "<td>{$this->status}</td>";
                    echo "<td {$this->post_visible}><img src='{$this->image}' href='{$this->image}' class='img-fluid' style='width: 100%; height: 100%; max-width: 300px; max-height: 300px;'></td>";
                    echo "<td {$this->post_visible}>{$this->tags}</td>";
                    echo "<td {$this->post_visible}>{$this->total_comments}</td>";
                    echo "<td>{$this->origin_date}</td>";
                    echo "<td><a class='btn' href='{$this->view}'>View</a></td>";
                    echo "<td $this->comment_visible><a class='btn' href='{$this->approve}'>Approve</a></td>";
                    echo "<td $this->comment_visible><a class='btn' href='{$this->unapprove}'>Unapprove</a></td>";
                    echo "<td><a class='btn' href='{$this->edit}'>Edit</a></td>";
                    echo "<td><a class='btn' href='{$this->delete}'>Delete</a></td>";

                echo "</tr>"; /* /.tr */

        }
    }
    
    // Used to find the `category_title` based on the `post_category_id` provided
    function categoryTitle($category_id){
        
        global $link;
        
        // retrieve category title
        
        // create query to retrieve `cat_title` with `cat_id` FROM `categories`
        $query = "SELECT `cat_title` FROM `categories` WHERE `cat_id` = ".mysqli_real_escape_string($link,$category_id)." LIMIT 1";
        
        // assign `query execution` to variable for fault-checking
        $results = mysqli_query($link,$query);
        
        // checks if the `categories` query succesfully executed
        // Kills `MySql` connection and creates error report if the query didn't run
        echo Tools::queryCheck($results,$query);
        
        // Fetch query Array[] results
        $row = mysqli_fetch_assoc($results);
        
        // Assign `category_title` to variable
        $this->category = $row['cat_title'];
        
    }
    /* /. categoryTitle() */
    
    
    function variableVisibility($type){
        
        if($type == 'posts'){
            
            // Makes `posts-variables` VISIBLE
            $this->post_visible = "";
            // Makes `comments-variables` HIDDEN
            $this->comment_visible = "Hidden";
            
        }elseif($type == 'comments'){
            
            // Makes `comments-variables` VISIBLE
            $this->comment_visible = "";
            // Makes `posts-variables` HIDDEN
            $this->post_visible = "Hidden";
        }
    }
    /* /. variableVisibility($type) */
    
    // Used to validate that the `$type` vairablie has a `valid` declaration
    function validateType($type){
        
        // Validates that $type has a set variable
        if(!isset($type)){
            
            if($type != "posts" || $type != "comments"){
            return 'An error has occured, please contact the website administrator. ERROR CODE: aTC-Type-Empty';
            }
        }
        
    }
    /* /. validateType($type) */
}



?>