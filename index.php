    <!-- header => include -->
    <?php require_once "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php require_once "includes/nav.php"; ?>
    
    <?php 
    
    // Instantiate class
    // functions.php -> userPosts{}

    $userPosts = new UserPosts(); 

    ?>
    

        <!-- Page Content -->
        <div class="container pt-3">

            <div class="row">
                
                <!-- sidebar => include -->
                <?php require_once "includes/sidebar.php"; ?>
               
                
                <!-- Blog Entries Column -->
                <div class="col-12 col-lg">

                    <h1 class="my-4">
                     
                    <?php 
                        
                    // titles.php -> Titles{} -> GenerateTitles()
                    Titles::generateTitles(); 
                    
                    ?>
                      
                    </h1> <!-- /. -->
                           
                   <?php 

                    // include Method to `generate posts`
                    // functions.php -> userPosts{} -> generatePosts()

                    $userPosts -> generatePosts(); 
                    
                    ?>
                            
                     

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
    <?php require_once "includes/footer.php"; ?>