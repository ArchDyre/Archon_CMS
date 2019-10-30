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
                
                <!-- Include Breadcrumb -->
                <?php include "includes/breadcrumb.php";?>
                
                
                
                <div class="container-fluid mb-5 pt-3">
                    
                    
                    
                    <!-- Include Posts Table -->
                    <?php
                    
                    if(isset($_GET['source'])){
                        
                        $source = $_GET['source'];
                        
                        
                    }else{
                        
                        $source = "";
                        
                    }
                    
                    switch ($source) {
                        
                        // Used to display area to `add` a new post
                        case 'add-post':
                            include "includes/up-post.php";
                            break;
                        
                        // Used to display area to `edit` a new post
                        case 'edit-post':
                            include "includes/up-post.php";
                            break;

                        
                            // Displays the default table to `view all posts`
                        default:
                            $type = 'comments';
                            $views = new Views();
                            $views -> adminTableGenerate($type);
                            break;

                    }
                        
                    
                        // Instantiate `Comments` class
                        $comments = new Comments();
                        // Call `delete` method from `Comments` - class
                        $comments->commentDelete();
    

                    ?> <!-- /. php -->
                    
                

                
        <!-- Footer - include -->
        <?php include "includes/footer.php"; ?>
                