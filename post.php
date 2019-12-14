    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    
    
    <!-- START OF: Page Content -->
    <div class="container pt-3"> <!-- START OF: .container -->
        
        <div class="row">
            
            <!-- sidebar => include -->
            <?php include "includes/sidebar.php"; ?>
            
            <!-- Post Content Column -->
            <div class="col-lg-8">
                
            <?php

                // Check if a spesific `post_id` was refered to the page through $_GET['reference']
                if(isset($_GET['reference'])){

                    // Assign $_GET['reference'] to a variable
                    $post_Id = $_GET['reference'];

                    // prepare query to fetch `post` information from `posts` - database
                    $query = "SELECT * FROM `posts` WHERE `post_id` = '".mysqli_real_escape_string($link,$post_Id)."'";

                    // Run query && assign variable for error checking
                    $results = mysqli_query($link,$query);

                    // Query error checking
                    if(!$results){

                        die("QUERY FAILURE: " . mysqli_error($link));

                    }else{

                        // Fetch query - array results
                        $row = mysqli_fetch_assoc($results);

                        // Assign $row[''] variables
                        $post_Title = $row['post_title'];
                        $post_Author = $row['post_author'];
                        $post_Cat_Id = $row['post_category_id'];
                        $post_Date = $row['post_date'];
                        $post_Content = preg_replace('/[\/\n\r<br>]/', "", $row['post_content']);
                        $post_Tags = $row['post_tags'];
                        $post_Image = $row['post_image'];
                        
                        // Sets a default post image
                        if(empty($post_Image)){
                            
                            $post_Image = "broken-image.png";
                            
                        }

                        // create query to retrieve `cat_title` with `cat_id` FROM `categories`
                        $query = "SELECT `cat_title` FROM `categories` WHERE `cat_id` = '".mysqli_real_escape_string($link,$post_Cat_Id)."'";

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
                        <!-- /. php --> 


                        <!-- Post Title -->
                        <h1 class="mt-4"><?php echo $post_Title; ?></h1>

                        <!-- Post Author -->
                        <p class="lead">
                            by
                            <a href="#"><?php echo $post_Author; ?></a>
                        </p> <!-- -->

                        <hr>

                        <!-- Date/Time -->
                        <p><?php echo $post_Date; ?></p>

                        <hr>

                        <!-- Preview Image -->
                        <div class="container-fluid mx-0 px-0"><img class="img-fluid rounded" src="images/posts/<?php echo $post_Image; ?>" alt=""></div>

                        <!-- Post Content -->
                        <div class="container py-3"><?php echo $post_Content; ?></div>

                        <hr>

                            <div class="container">

                                    <!-- Tags -->
                                    <p>Tags: <span class="px-3"><small><?php echo $post_Tags; ?></small></span></p>

                                    <!-- Category -->
                                    <p>Category(s): <span class="px-3"><small><?php echo $post_Category; ?></small></span></p>

                            </div> <!-- /.row -->

                        <hr>


                <!-- Start php -->                
                <?php    }

                }

            ?>

                <hr>

                <!-- Comments Form -->
                <div class="card my-4">
                   
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                           
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </form> <!-- /. -->
                    </div> <!-- /. -->
                    
                </div> <!-- /. -->

                <!-- Single Comment -->
                <div class="media mb-4">
                   
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div> <!-- /. -->
                    
                </div> <!-- /. -->

                <!-- Comment with nested comments -->
                <div class="media mb-4">
                   
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                       
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                        <div class="media mt-4">

                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div> <!-- /. -->
                          
                        </div> <!-- /. -->

                        <div class="media mt-4">
                           
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div> <!-- /. -->

                        </div> <!-- /. -->

                    </div> <!-- /. -->
                    
                </div> <!-- /. -->

            </div> <!-- /. -->

        </div>
        <!-- /.row --> 
        
        
    </div> <!-- END OF: .container -->
    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>
