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
                
                <!-- Include Generating Sidebar Display `categories` -->
                <?php 
                
                $user_Categories = new userCategories();
                
                $user_Categories -> generateCat();
                
                ?>
                
                
            </div> <!-- /. -->
        </div> <!-- /. -->
    </div> <!-- /. -->

   
    <!-- Side Widget -->
    <?php include "widget.php"; ?>
    
    

</div> <!-- /.col sidebar_Widget_Area -->