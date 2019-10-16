<?php

    // Includes:
    // EXAMPLE: ` include "file.php"; `
    include "includes/db.php";

    session_start();





?>

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
                     
                     <?php echo $page_Title; ?>
                      
                    </h1> <!-- /. -->

                    
                       
                        
                           
                           <!-- Creates posts -->
                           <?php  
                            
                                $query = "SELECT * FROM `posts`";
                                $results = mysqli_query($link, $query);

                                while($row = mysqli_fetch_assoc($results)){
                                    
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
                         <?php  } ?> <!-- Close php `while` loop -->
                            
                            
                     

                    <!-- Pagination -->
                    <ul class="pagination justify-content-center mb-4">
                       
                        <li class="page-item">
                            <a class="page-link" href="#">&larr; Older</a>
                        </li> <!-- /. -->
                        
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Newer &rarr;</a>
                        </li> <!-- /. -->
                        
                    </ul> <!-- /. -->

                </div> <!-- /. -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
        
        
    </div> <!-- END OF: .container -->
    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>