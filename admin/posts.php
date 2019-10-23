    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    
    
    <!-- START OF: .container -->
    <div class="container-fluid h-100 m-0"> 
        
        <div class="row">
            
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
                  <li class="breadcrumb-item active">View All Posts</li>
                </ol> <!-- /. breadcrumbs -->
                
                
                
                
                <div class="container-fluid mb-5 pt-3">
                    
                    <!-- Include Posts Table -->
                    <?php
                    
                    if(isset($_GET['source'])){
                        
                        $source = $_GET['source'];
                        
                    }else{
                        
                        $source = "";
                        
                    }
                    
                    switch ($source) {
                            
                        case 'add_post':
                            include "includes/add_post.php";
                            break;
                        
                        case 'edit_post':
                            echo "OOps";
                            break;
                        
                            // Displays the default table to `view all posts`
                        default:
                            
                            include "includes/view_all_posts.php";
                            break;

                    }


                    ?> <!-- /. php -->
                    
                

                
        <!-- Footer - include -->
        <?php include "includes/footer.php"; ?>
                