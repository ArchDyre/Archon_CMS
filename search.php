    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    
   
    <div class="container"> <!-- START OF: .container -->
        
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                
                <!-- sidebar => include -->
                <?php include "includes/sidebar.php"; ?>
               
                
                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1 class="my-4">
                     
                     Search results for: <span class="font-weight-bold"> <?php echo $_POST['sidebar_Search']; ?></span>
                     
                     <?php // echo $page_Title; ?>
                      
                    </h1> <!-- /. -->

                    <?php
            
                    if(isset($_POST['search_submit'])){
                        
                        $search_Query = $_POST['sidebar_Search'];
                        
                        // Prepare query to find related contents to the users' search query
                        $query = "SELECT * FROM `posts` WHERE `post_tags` LIKE '%".mysqli_real_escape_string($link,$search_Query)."%' OR `post_title` LIKE '%".mysqli_real_escape_string($link,$search_Query)."%' OR `post_content` LIKE '%".mysqli_real_escape_string($link,$search_Query)."%'";
                        
                        $search_Results = mysqli_query($link,$query);
                        
                        // run the mysqli query to find relatable results
                        $search_Results = mysqli_query($link,$query);

                        // if the query did not work, the connection is killed with an error.
                        if(!$search_Results){
                            
                            die("QUERY FAILED" . mysqli_error($link));
                            
                        }
                        
                        // See if there were any query results found (number wise)
                         
                        
                        $count = mysqli_num_rows($search_Results);
                        
                       if($count == 0){
                            
                            echo "No search results found...";
                            
                        }else{
                            
                            // Creates posts 

                                while($row = mysqli_fetch_assoc($search_Results)){
                                    
                                    $post_Title = $row['post_title'];
                                    $post_Author = $row['post_author'];
                                    $post_Date = $row['post_date'];
                                    $post_Content = $row['post_content'];
                                    $post_Tags = $row['post_tags'];
                                    $post_Image = $row['post_image'];
                                    
                                    // End php script to include html::after
                                    ?>
                                    
                                    <!-- Blog Post -->
                                    <div class="card mb-4">  

                                        <img class="card-img-top" src="images/posts/<?php echo $post_Image; ?>" alt="Post Related Image">
                                        <div class="card-body"> 
                                            
                                            <h2 class="card-title"><?php echo $post_Title; ?></h2>
                                            
                                            <p class="card-text">
                                                <?php echo $post_Content; ?>
                                            </p>
                                            
                                            <a href="#" class="btn btn-primary">Read More &rarr;</a>
                                            
                                        </div> <!-- /. -->

                                        <div class="card-footer text-muted">
                                           
                                            Posted on <?php echo $post_Date; ?> 
                                            by <a href="#"><?php echo $post_Author; ?></a>
                                            
                                        </div> <!-- /. -->

                                    </div> <!-- /. -->
                                    

                        <!-- Open php to `enclose` the `while` loops closing tag -->
                         <?php  } 
                            
                        }
                    
                        
                    }?> <!-- Close php `while` loop -->
       

                </div> <!-- /. -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
        
        
    </div> <!-- END OF: .container -->
    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>