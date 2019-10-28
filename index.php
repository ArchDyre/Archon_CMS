    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    
    <!--  Instantiate class -->
    <?php $user_Posts = new UserPosts(); ?>
    
   <!-- START OF: .container -->
    <div class="container"> 
        
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                
                <!-- sidebar => include -->
                <?php include "includes/sidebar.php"; ?>
               
                
                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1 class="my-4">
                     
                     <?php Titles::GenerateTitles(); ?>
                      
                    </h1> <!-- /. -->

                           <!-- include Method to `generate posts` -->
                           <?php $user_Posts -> generate_Posts(); ?>
                            
                     

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