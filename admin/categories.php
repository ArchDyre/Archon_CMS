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
                  <li class="breadcrumb-item active">Categories</li>
                </ol> <!-- /. breadcrumbs -->
                
                
                
                
                <div class="container-fluid h-75 overflow-auto">
                    <div class="row align-items-center h-100">
                            
                            <div class="col"></div> <!-- /.col -->
                            
                            <div class="col-5">
                                
                                
                                
                                
                                
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
                                  
                                <div class="row w-100 m-3"></div> <!-- /.row -->  
                                   
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

                            </div> <!-- /.col-6 -->
                            
                            <div class="col-1"></div> <!-- /.col-2 -->
                            
                            
                            <!-- Displays current categories -->
                            <div class="col-4">
                               
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
                            
                            <div class="col"></div> <!-- /.col -->


                    </div> <!--/.row -->
                </div> <!-- /.container-fluid -->
                
                
                
                
                
                <!-- Footer - include -->
                <?php include "includes/footer.php"; ?>
                