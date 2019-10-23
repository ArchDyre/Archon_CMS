    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    
<!--     Mobile menu-->
        
        

    <!-- START OF: .container -->
    <div class="container-fluid h-100 m-0"> 
        
        <!-- Sidebar + Content display area -->
        <div class="row">
            
            <!-- Side Bar -->
            <div class="col-2 dash_Sidebar desktop_Nav_Display">
               
                <?php include "includes/sidebar.php"; ?>    
                
            </div> <!-- /.col -->
            
            
            
            <!-- Inner Content -->
            <div class="col-12 col-md-10 px-0">
                
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Categories</li>
                </ol> <!-- /. breadcrumbs -->
                
                
                
                <!-- Content -->
                <div class="container-fluid h-75 w-100">
                    <div class="row align-items-center w-100 h-100 align-items-center">
                            
                            <!-- Add Category && Update Category -->
                            <div class="col-12 col-md-6 py-3 px-0 mx-0">
                                <div class="container-fluid">
                                    <div class="row w-100 m-3">

                                        <div class="col">

                                            <?php

                                                // ADD - categories function()
                                                cat_Add();

                                            ?> <!-- /PHP -->

                                            <!-- Categories - ADD -->
                                            <form action="" method="post" class="border border-dark p-3">

                                                <div class="form-group text-center">

                                                    <label>Add Category</label>
                                                    <input type="text" name="cat_Title" class="form-control text-center">

                                                </div> <!-- /.form-group -->

                                                <div class="form-group">

                                                    <input type="submit" name="cat_Title_Submit" value="Add Category" class="btn btn-primary form-control">

                                                </div> <!-- /.form-group -->

                                            </form> <!-- /.form -->

                                        </div> <!-- /.col -->


                                    </div> <!-- /.row -->
                                </div> <!-- /. container-fluid -->    
                                  
                                <div class="container-fluid"><div class="row w-100 m-3"></div> <!-- /.row --></div> <!-- /. container-fluid --> 
                                
                                  
                                 <div class="container-fluid">  
                                    <div class="row w-100 m-3">

                                        <div class="col">

                                            <!-- Insert `edit` form && `php` -->
                                            <?php

                                                if(isset($_GET['edit'])){

                                                    include "includes/cat_update.php";

                                                } 

                                            ?> <!-- /. php -->

                                        </div> <!-- /.col -->


                                    </div> <!-- /.row -->
                                </div> <!-- /. container-fluid -->

                            </div> <!-- /. Add Category && Update Category -->
                            
                            
                            
                            
                            <!-- Displays current categories -->
                            <div class="col-12 col-md-6 py-3 px-auto mx-0 table-responsive">
                               
                                <table class="table table-striped table-bordered table-hover">
                                   
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Category Title</th>
                                            <th scope="col">EDIT?</th>
                                            <th scope="col">DELETE?</th>
                                        </tr>
                                    </thead> <!-- -->
                                    
                                    <tbody>
                                                                      
                                        <!-- Fetch Categories and create table-rows -->
                                        <?php
                                            
                                            cat_View_All();
                                        
                                        ?> <!-- closing while loop -->
                                        
                                        
                                        <!-- Execute `delete` $_GET request for `categories` -->
                                        <?php
                                            
                                            // Insert delete function
                                            cat_Delete();
                                        
                                        ?>
                                        
                                        
                                    </tbody> <!-- -->
                                    
                                </table> <!-- /. table -->
                                
                            </div> <!-- /.col -->


                    </div> <!--/.row -->
                    
                </div> <!-- /.container-fluid -->
                

                <!-- Footer - include -->
                <?php include "includes/footer.php"; ?>
                