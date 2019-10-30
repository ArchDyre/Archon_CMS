<?php

    // instantiate posts class
    $posts = new Posts();

    // Method to check $_POST
    $posts -> checkPOST();
    
    if($_GET['source'] == "edit-post" && isset($_GET['secret'])){
            
        // assign `post_id` FROM $_GET['secret']
        $edit_Post_Id = $_GET['secret'];
        
        // Call method to change variables
        $posts -> setEditVariables($edit_Post_Id);
        
    }elseif($_GET['source'] == "add-post"){
        
        // vairable `values` remain as is (empty).   
        // Assign to blank due to being sent to the update_DB() method
        $edit_Post_Id = "";
        $posts -> post_Date = date('d-m-Y');
        
    }else{

        // redirect to posts.php
        header ("Location: posts.php");

    }

?>


<div class="row py-5">
   
   <div class="col"></div> <!-- /.col -->
   
   <div class="col-6">
       
       <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">

                <label for="up_Post_Title">Post Title</label>
                <input type="text" id="up_Post_Title" class="form-control" name="post_Title" value="<?php echo $posts -> post_Title;?>">

            </div> <!-- /. -->
            
            <!-- START OF: `category_Select_Div` -->
            <div class="form-group">
                
                <label for="up_Post_Category">Post Category</label>

                <select class="form-control" id="up_Post_Category" name="post_Category">
                    
                    <!-- START OF: `php` -->
                    <?php
                    
                        if(isset($_GET['source']) && isset($_GET['cat']) && $_GET['source'] == 'edit-post'){
                            
                            $selected_Cat_Id = $_GET['cat'];
                            
                            
                        }else{
                            
                            // Default category id
                            $selected_Cat_Id = "1";
                            
                        }
                        
                        // Create query
                        $query = "SELECT * FROM `categories`";
                        
                        // Run query
                        $results = mysqli_query($link,$query);
                        
                        // Check if query run failed
                        if(!$results){

                            die( "CATEGORY QUERY FAILURE: " . mysqli_error($link) );

                        }else{
                            
                            while($row = mysqli_fetch_assoc($results)){
                                
                                // Checks if a category id is available or not
                                if($row['cat_id'] == $selected_Cat_Id){
                                    
                                    // Assigns category as `selected` value
                                    $cat_Id = $row['cat_id'];
                                    $cat_Title = $row['cat_title'];
                                    $selected = 'Selected';
                                    
                                }elseif($row['cat_id'] == 2){
                                    
                                    $cat_Id = "";
                                    $cat_Title = "";
                                    $selected = 'hidden';
                                    
                                }else{

                                    // assigns default value
                                    $cat_Id = $row['cat_id'];
                                    $cat_Title = $row['cat_title'];
                                    $selected = "";
                                    
                                }
                                
                                
                                
                                
                                ?>
                                <!-- /. `php` -->
                                
                                <!--  Use `cat_id` as identified to users chosen `category` for the post -->
                                <option value='<?php echo $cat_Id;?>' <?php echo $selected;?>> <?php echo $cat_Title; ?> </option>
                                
                                
                        
            <!-- START OF: `php` -->
                    <?php   }

                        }



                    ?> 
                    <!-- /. `php` -->

                </select> <!-- /.select -->

            </div>
            <!-- /. `post_Category_Div`-->    
               

            <div class="form-group">

                <label for="up_Post_Status">Post Status</label>
                
                <select class="form-control" id="up_Post_Status" name="post_Status">
                   	
                   	<!-- Start . PHP -->
                   	<?php 
                   	
                   	if($posts -> post_Status == 'draft'){
                   	        
                   	    $selected_Draft = "Selected";
                   	    $selected_Published = "";               	        
               	        
                   	}elseif($posts -> post_Status == 'published'){
                   	        
                   	    $selected_Draft = "";
                   	    $selected_Published = "Selected";               	        
                   	        
                   	}else{
                   	    
                   	    $selected_Draft = "Selected";
                   	    $selected_Published = "";
                   	    
                   	}
                   	
                   	
                   	?>
                   	<!-- /. PHP -->
                   	
                    <option value="draft" <?php echo $selected_Draft; ?>>Draft</option>
                    <option value="published" <?php echo $selected_Published; ?>>Published</option>
                    
                </select> <!-- /.select -->
                
            </div> <!-- /. -->
            
            
            <!-- post date -->
          	<div class="form-group">
				
				<label for="up_Post_Date">Post Date</label>
				<input type="text" id="up_Post_Date" class="form-control" disabled name="post_Date" value="<?php echo date_format(new DateTime($posts -> post_Date), 'd-m-Y');?>">
				
				<!-- Hide until implemented. == Editable Date Function -->
				<?php  
                // <input type="date" id="up_Post_Date" class="form-control" name="post_Date" value="#">
                ?>
                
            </div> <!-- /. -->
            

            <div class="form-group">
            	
            	<!-- Display image input -->
            	<div class='my-md-4'>
                	<label for="up_Post_Image">Choose Image</label>
                	<input type="file" id="up_Post_Image" name="post_Image" class="form-control-file">
                </div>
            	
            	<?php 
            	   if($_GET['source'] == 'edit-post'){
            	       
            	       // Check if `$post_Image` is empty && Assigns broken image if it is
            	       if($posts -> post_Image == ""){
            	           
            	           $posts -> post_Image = "broken-image.png";
            	           
            	       }
            	       
            	?>
            	<!--  Display image from DB -->
				<div>
				
					<img src='../images/posts/<?php echo $posts -> post_Image;?>' class='image-fluid w-50'>
				
				</div>
				<?php }	?>
            </div> <!-- /. -->


            <div class="form-group">

                <label for="up_Post_Tags">Post Tags</label>
                <input type="text" id="up_Post_Tags" class="form-control" name="post_Tags" value="<?php echo $posts -> post_Tags;?>">

            </div> <!-- /. -->


            <div class="form-group">

                <label for="up_Post_Author">Post Author</label>
                <input type="text" id="up_Post_Author" class="form-control" name="post_Author" value="<?php echo $posts -> post_Author;?>">

            </div> <!-- /. -->

            <div class="form-group">

                <label for="up_Post_Content">Post Content</label>
                <textarea class="form-control" id="up_Post_Content" name="post_Content" cols="30" rows="10"><?php echo $posts -> post_Contents;?></textarea>

            </div> <!-- /. -->
            
            <!-- /start php -->
			<?php 
			
			// Check if new post `add`
			if($_GET['source'] == "add-post"){
			    ?>
			    <!-- /. php -->
			    <div class="form-group text-center">
			    
			    <input type="submit" value="Create Post" class="btn btn-primary" name="add_Post_Submit">
			    
			    </div> <!-- /. -->
			    
			    <!-- /start php -->
			    <?php 
			// check if DB post `edit`    
			}elseif($_GET['source'] == "edit-post"){
			    ?>
			    <!-- /. php -->
			    
			    <div class="form-group text-center">
			    
			    <input type="submit" value="Update Post" class="btn btn-primary" name="edit_Post_Submit">
			    
			    </div> <!-- /. -->
			    
			    <!-- /start php -->
			    <?php 
			}
			
			?>
            <!-- /. php -->


        </form> <!-- /. form -->
       
   </div> <!-- /.col -->
   
   <div class="col"></div> <!-- /.col -->
   

</div> <!-- /. div -->