    <!-- header => include -->
    <?php include "includes/header.php"; ?>

    
    <div class="container-fluid h-100 m-0"> <!-- START OF: .container -->
        
        <div class="row">
            
            <div class="col col-sm-4 col-md-4 col-lg-2 p-0 p-md-3" id="dash_Sidebar">
               
                <?php include "includes/sidebar.php"; ?>    
                
            </div> <!-- /.col -->
            
            
            
            
            <div class="col overflow-auto p-0">
                
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">View All Posts</li>
                </ol> <!-- /. breadcrumbs -->
                
                
                
                
                <div class="container-fluid h-75 overflow-auto">
                    
                                <table class="table table-striped table-bordered table-hover">
                                   
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Check</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Tags</th>
                                            <th scope="col">Comments</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead> <!-- -->
                                    
                                    <tbody>
                                        
                                        <?php
                                        
                                            $query = "SELECT * FROM `posts`";
                                        
                                            $results = mysqli_query($link,$query);
                                            
                                            if(!$results){
                                                
                                                die("QUERY ERROR: " . mysqli_error($link));
                                                
                                            }else{
                                                
                                                while($row = mysqli_fetch_assoc($results)){
                                                    
                                                    // Assign variables to echo in table creation.
                                                    $post_Id = $row['post_id'];
                                                    $post_Author = $row['post_author'];
                                                    $post_Title = $row['post_title'];
                                                    // Categories is done below
                                                    $post_Status = $row['post_status'];
                                                    $post_Image = $row['post_image'];
                                                    $post_Tags = $row['post_tags'];
                                                    $post_Total_Comments = $row['post_comment_count'];
                                                    $post_Create_Date = $row['post_date'];
                                                    
                                                    // retrieve category title
                                                    
                                                    // create query to retrieve `cat_title` with `cat_id` FROM `categories`
                                                    $query = "SELECT `cat_title` FROM `categories` WHERE `cat_id` = '".mysqli_real_escape_string($link,$row['post_category_id'])."'";
                                                    
                                                    // assign `query execution` to variable for fault-checking
                                                    $results_Cat = mysqli_query($link,$query);
                                                    
                                                    // checks if the `categories` query succesfully executed
                                                    if(!$results_Cat){

                                                        die("QUERY ERROR: " . mysqli_error($link));
                                                        $post_Category = "Category unavailable";

                                                    }else{
                                                        
                                                        $row_Cat = mysqli_fetch_assoc($results_Cat);
                                                        $post_Category = $row_Cat['cat_title'];
                                                        
                                                    }
                                                    
                                                    
                                                    
                                                    
                                                    ?>
                                                    
                                                        <tr class='text-center'>

                                                            <td class="py-3"><input type="checkbox" name="checkbox.<?php echo $id; ?>"></td>
                                                            <td><?php echo $post_Id; ?></td>
                                                            <td><?php echo $post_Author; ?></td>
                                                            <td><?php echo $post_Title; ?></td>
                                                            <td><?php echo $post_Category; ?></td>
                                                            <td><?php echo $post_Status; ?></td>
                                                            <td><img src='../images/posts/<?php echo $post_Image; ?>' class='img-fluid'></td>
                                                            <td><?php echo $post_Tags; ?></td>
                                                            <td><?php echo $post_Total_Comments; ?></td>
                                                            <td><?php echo $post_Create_Date; ?></td>
                                                            <td>View</td>
                                                            <td>Edit</td>
                                                            <td>Delete</td>

                                                        </tr> 
                                                    
                                                    
                                                    <?php
                                                    
                                                }
                                                
                                            }
                                            
                                            
                                        
                                        ?>

                                                               
                                        
                                    </tbody> <!-- -->
                                    
                                </table> <!-- /. table -->
                            
                </div> <!-- /.container-fluid -->
                
                
                
                
                
                <!-- Footer - include -->
                <?php include "includes/footer.php"; ?>
                