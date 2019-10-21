<!-- Sidebar Widgets Column -->
<div class="col-md-4">

   
   
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
           
           
           
           
           <form method="post" action="search.php">
           
                <div class="input-group">

                    <input type="text" name="sidebar_Search" class="form-control" placeholder="Search for...">
                    
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit" name="search_submit">Go!</button>
                    </span> <!-- /span -->

                </div> <!-- /.input -->
            
            </form> <!-- /.search form -->
            
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
    
    
    

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                
                <?php 
    
                    // Displays `categories`
                    // Limited to max -> 6 categories
                    $query = " SELECT * FROM `categories` LIMIT 6";
                    $results = mysqli_query($link, $query);

                    $number_Categories = mysqli_num_rows($results);
                    $n = 1;
                
                    /* 
                    
                    This while loop setup uses `$n` to ensure that there are equal amounts of
                    categories in both `ul` areas
                    
                    
                    */

                        while ($n <= $number_Categories) {
                                                       
                            if($n <= ceil($number_Categories/2)){
                                
                            ?> <!-- close php -->
                               
                                <div class="col-lg-6">

                                    <ul class="list-unstyled mb-0">
                                        
                                        <!-- Start php -->
                                        <?php
                                        
                                            while($n <= ceil($number_Categories/2)){
                                            
                                                $row = mysqli_fetch_assoc($results);
                                                $cat_Title = $row['cat_title'];

                                                echo 

                                                "<li>
                                                    <a href='#'>".$cat_Title."</a>
                                                </li> <!-- /. -->";

                                                // Add +1 at the end of the loop
                                                $n ++;
                                            
                                            }
                            

                                        ?> <!-- close php -->


                                    </ul> <!-- /. -->

                                </div> <!-- /. -->
                            
                            <!-- Start php -->
                            <?php         
                            }else{
                                
                                ?> <!-- close php -->
                                
                                <div class="col-lg-6">

                                    <ul class="list-unstyled mb-0">
                                        
                                        <!-- Start php -->
                                        <?php

                                        while($n >= ceil($number_Categories/2) && $n <= $number_Categories){
                                            
                                            $row = mysqli_fetch_assoc($results);
                                            $cat_Title = $row['cat_title'];
                                            
                                            echo 

                                            "<li>
                                                <a href='#'>".$cat_Title."</a>
                                            </li> <!-- /. -->";
                                            
                                            // Add +1 at the end of the loop
                                            $n ++;
                                            
                                        }

                                        ?> <!-- close php -->


                                    </ul> <!-- /. -->

                                </div> <!-- /. -->
                                
                                <!-- Start php -->
                                <?php
                                
                            } // /. if => else
                            
                            
                            
                            
                        } // /. while loop

                ?> <!-- close php -->   
                
                
            </div> <!-- /. -->
        </div> <!-- /. -->
    </div> <!-- /. -->

   
    <!-- Side Widget -->
    <?php include "widget.php"; ?>
    
    

</div> <!-- /.col sidebar_Widget_Area -->