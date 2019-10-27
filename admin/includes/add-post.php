<?php
    
    // Include `posts` class
    include 'includes/functions';
    $posts = new Posts();

    if(isset($_POST['create_Post_Submit'])){
        
        $error_Message = "";
        
        // Call validation method
        
        
        if($error_Message != ""){
            
            $error_Message = "<div class='lert alert-danger text-center p-2'> <span class='h5'>An error(s) occured:</span> <p>".$error_Message."</p></div";
            
            // Echo error message(s)
            echo $error_Message;
            
        }else{
            
            $post_Title = $_POST['add_Post_Title'];
            $post_Category_Id = intval($_POST['add_Post_Category']);
            $post_Status = $_POST['add_Post_Status'];

            // Image stored on database
            $post_Image = $_FILES['add_Post_Image']['name'];
            // Stores uploaded images in a temporary place
            $post_Temp_Image_Location = $_FILES['add_Post_Image']['tmp_name'];

            $post_Tags = $_POST['add_Post_Tags'];
            $post_Author = $_POST['add_Post_Author'];

            $post_Date = date("D, d-m-Y, H:i A");
            $post_Contents = $_POST['add_Post_Content'];

            // Moves the `uploaded user image` to the `image` folder after $_POST[] submit
            move_uploaded_file($post_Temp_Image_Location, "../images/posts/$post_Image");
            
            // Insert into DB
            
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
            $query .= " VALUES ('".mysqli_real_escape_string($link,$post_Title)."',".mysqli_real_escape_string($link,$post_Category_Id).",'".mysqli_real_escape_string($link,$post_Status)."','".mysqli_real_escape_string($link,$post_Tags)."','".mysqli_real_escape_string($link,$post_Author)."','".mysqli_real_escape_string($link,$post_Date)."','".mysqli_real_escape_string($link,$post_Image)."','".mysqli_real_escape_string($link,$post_Contents)."')";
            
            $results = mysqli_query($link,$query);
            
            if(!$results){
                
                die("NEW POST QUERY FAILURE: " . mysqli_error($link));
                
            }else{
                
                // Success Message
                echo "<div class='alert alert-success'> <p>Successfull Form Submission:</p></div>";
                
            }
            
        }

    }

?>


<div class="row py-5">
   
   <div class="col"></div> <!-- /.col -->
   
   <div class="col-6">
       
       <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">

                <label for="add_Post_Title">Post Title</label>
                <input type="text" id="add_Post_Title" class="form-control" name="add_Post_Title">

            </div> <!-- /. -->
            
            <!-- START OF: `category_Select_Div` -->
            <div class="form-group">
                
                <label for="add_Post_Category">Post Category</label>

                <select class="form-control" id="add_Post_Category" name="add_Post_Category">
                    
                    <!-- START OF: `php` -->
                    <?php
                
                        $query = "SELECT * FROM `categories`";

                        $results = mysqli_query($link,$query);

                        if(!$results){

                            die( "CATEGORY QUERY FAILURE: " . mysqli_error($link) );

                        }else{
                            
                            while($row = mysqli_fetch_assoc($results)){
                                    
                                $cat_Id = $row['cat_id'];
                                $cat_Title = $row['cat_title'];
                                
                                
                                ?>
                                <!-- /. `php` -->
                                
                                <option value='<?php echo $cat_Id;?>'> <?php echo $cat_Title; ?> </option>
                                
                                
                        
            <!-- START OF: `php` -->
                    <?php   }

                        }



                    ?> 
                    <!-- /. `php` -->

                </select> <!-- /.select -->

            </div>
            <!-- /. `post_Category_Div`-->    
               

            <div class="form-group">

                <label for="add_Post_Status">Post Status</label>
                
                <select class="form-control" id="add_Post_Status" name="add_Post_Status">
                   
                    <option selected value="draft">Draft</option>
                    <option value="published">Published</option>
                    
                </select> <!-- /.select -->
                
            </div> <!-- /. -->

            <div class="form-group">

                <label for="add_Post_Image">Choose Image</label>
                <input type="file" id="add_Post_Image" name="add_Post_Image" class="form-control-file">

            </div> <!-- /. -->


            <div class="form-group">

                <label for="add_Post_Tags">Post Tags</label>
                <input type="text" id="add_Post_Tags" class="form-control" name="add_Post_Tags">

            </div> <!-- /. -->


            <div class="form-group">

                <label for="add_Post_Author">Post Author</label>
                <input type="text" id="add_Post_Author" class="form-control" name="add_Post_Author">

            </div> <!-- /. -->

            <div class="form-group">

                <label for="add_Post_Content">Post Content</label>
                <textarea class="form-control" id="add_Post_Content" name="add_Post_Content"></textarea>

            </div> <!-- /. -->

            <div class="form-group text-center">

                <input type="submit" value="Create Post" class="btn btn-primary" name="create_Post_Submit">

            </div> <!-- /. -->


        </form> <!-- /. form -->
       
   </div> <!-- /.col -->
   
   <div class="col"></div> <!-- /.col -->
   

</div> <!-- /. div -->