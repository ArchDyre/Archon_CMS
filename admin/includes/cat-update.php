<!-- Categories - EDIT -->            
<form action="" method="post" class="border border-dark p-3">

    <div class="form-group text-center">

        <label>Edit Categories</label>

        <!-- Start of Php -->
        <?php
                
            if($_GET['edit'] != 1 && $_GET['edit'] != 0){
                                                    
                // Assign `GET[]` id to variable 
                $cat_Id_Edit = $_GET['edit'];

                // Fetch correct `category title` from database
                $query = "SELECT `cat_title` FROM `categories` WHERE `cat_id` = '".mysqli_real_escape_string($link,$cat_Id_Edit)."'";

                // Run $query and assign to variable
                $results = mysqli_query($link,$query);

                if(!$results){


                    die("QUERY FAILED: " . mysqli_error($link));

                }else{

                    // Fetch array content from $results
                    $row = mysqli_fetch_assoc($results);

                    // Assign `category_title` to variable to `echo` it
                    $edit_Cat_Title = $row['cat_title'];

                } 
                // /. else -->                                     
                                                    
            }else{

                echo "<div class='alert alert-danger text-center'>The selected category can't be edited.</div>";

            }
        
                

                ?> <!-- /. php -->


                <input type="text" name="cat_New_Title_Edit" class="form-control text-center" rows=1 value="<?php if(isset($edit_Cat_Title)){echo $edit_Cat_Title;} ?>"> <!-- /.input -->


    </div> <!-- /.form-group -->

    <div class="form-group">

        <input type="submit" name="cat_Title_Submit_Edit" value="Submit Changes" class="btn btn-success form-control">

    </div> <!-- /.form-group -->

</form> <!-- /.form -->



<!-- CAT UPDATE -->
<?php
                                                    
// Used to update the `cat_title` when the `submit` button is pressed
if(isset($_POST['cat_Title_Submit_Edit'])){
    
    // Checks if the `new ctaegory title - FIELD` that the users enetered isn't empty
    if(!isset($_POST['cat_New_Title_Edit']) || empty($_POST['cat_New_Title_Edit'])){
        
        // Echo an error if it is empty
        echo "An error has occured... (Category edit field is empty)";


    }else{

        // Set the `updated cat_title` received through `$_POST` = variable
        $cat_Title_Update = $_POST['cat_New_Title_Edit'];

        // Set query to update the `category title` 
        $query = "UPDATE `categories` SET `cat_title` = '".mysqli_real_escape_string($link,$cat_Title_Update)."' 
        WHERE `cat_id` = '".$cat_Id_Edit."'";

        // assign the query to a variable for fault checking
        $results = mysqli_query($link, $query);

        // Fault checking for `query`
        if(!$results){

            // Kills connectoin if the query failed to run.
            die("QUERY FAILURE: " . mysqli_error($link));
            echo "Error has occureded while updating the category ".$cat_Title_Update;

        }else{

            // Echo success
            echo "Successfully updated";

            // Refresh page
            header("Location: categories.php");

        }
    }

}

?>