    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    
    <!--  Instantiate class -->
    <?php $userPosts = new UserPosts(); ?>
    

        <!-- Page Content -->
        <div class="container pt-3">

            <div class="row">
                
                <!-- sidebar => include -->
                <?php include "includes/sidebar.php"; ?>
               
                
                <!-- Blog Entries Column -->
                <div class="col-12 col-lg">

                    <h1 class="my-4">
                     
                     <?php Titles::GenerateTitles(); ?>
                      
                    </h1> <!-- /. -->

                           <!-- include Method to `generate posts` -->
                           <?php $userPosts -> generatePosts(); ?>
                            
                     

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

    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>