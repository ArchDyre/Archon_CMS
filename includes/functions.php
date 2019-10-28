<?php


Class UserPosts{
    
    // Posts Related
    public $post_Id = "";
    public $post_Title = "";
    public $post_Author = "";
    public $post_Date = "";
    public $post_Content = "";
    public $post_Tags = "";
    public $post_Image = "";

    
    function generate_Posts(){
        
        global $link;
        $no_Posts = 0;
        
        if(isset($_GET['cat-zone'])){
            
            $query = "SELECT * FROM `posts` WHERE `post_category_id` = ".mysqli_real_escape_string($link, $_GET['cat-zone'])." AND `post_status` = 'published'";
            
        }else{
            
            $query = "SELECT * FROM `posts`";
            
        }
        
        
        $results = mysqli_query($link, $query);
        
        if(!$results){
            
            die("QUERY FAILURE: </br>: " . $link . "</br>" . mysqli_error($link));
            
        }
        
        while($row = mysqli_fetch_assoc($results)){
            
            $this -> post_Id = $row['post_id'];
            $this -> post_Title = $row['post_title'];
            $this -> post_Author = $row['post_author'];
            $this -> post_Date = $row['post_date'];
            
            // keeps white spaces intact
            $this -> post_Content = preg_replace('#(\\\r\\\n|\\\n)#', "\n", $row['post_content']);
            $this -> post_Tags = $row['post_tags'];
            $this -> post_Image = $row['post_image'];
            
            //ensure image isn't empty && display broken image if it is empty
            if($this -> post_Image == ""){
                
                $this -> post_Image = "broken-image.png";
                
            }
            
            
            /* Blog Post */
            echo "<div class='card mb-4'>";
            
            echo "<img class='card-img-top' src='images/posts/{$this -> post_Image}' alt='Post Related Image' style='max-width: 750px; max-height: 300px;'>";
            echo "<div class='card-body'>";
            
            echo "<h2 class='card-title'><a href='post.php?reference={$this -> post_Id}'>{$this -> post_Title}</a></h2>";
            
            echo "<p class='card-text'>
                {$this -> post_Content}
                </p>"; /* /. Post Content */
                
            echo "<a href='post.php?reference={$this -> post_Id}' class='btn btn-primary'>Read More &rarr;</a>";
            
            echo "</div>"; /* /. div - card-body */
            
            echo "<div class='card-footer text-muted'>";
            
            echo "Posted on ".date_format(new DateTime($this -> post_Date), 'd-m-Y');
            echo " by <a href='#'>{$this -> post_Author}</a>";
            
            echo "</div>"; /* /. div - card-footer */
            
            echo "</div>"; /* /. div - card */
                
            $no_Posts ++;

        }
        
        // Checks if $row is empty.
        if($row == "" && $no_Posts == 0){
            
            echo("<div class='alert alert-danger text-center'>No results found</div>");
            
        }
    
    }
    /* /. generate_Posts() */ 

}

// START: class UserCategories
class UserCategories{
    
    // Categories Related
    public $cat_Id = "";
    public $cat_Title = "";
    
    
    /* START: generate_Categories  */
    function generate_Cat(){
        
        global $link;
        
        // Displays `categories`
        // Limited to max -> 6 categories
        $query = " SELECT * FROM `categories`";
        $results = mysqli_query($link, $query);

        $n = 1;
        
        /*
        
        This while loop setup uses `$n` to ensure that there are equal amounts of
        categories in both `ul` areas
        
        
        */
        
        while ($n <= 6) {
            
            
            // Left Categories display area
            if($n <= 3){
                
                
                echo "<div class='col-lg-6'>";
                
                    echo "<ul class='list-unstyled mb-0'>";
                    
                    
                    while($n <= 3){
                        
                        $row = mysqli_fetch_assoc($results);
                        
                        // Ensures that `uncategorized` && `Latest` Categories aren't displayed on categories sidebar display.
                        if($row['cat_id'] != 1 && $row['cat_id'] != 2){
                            
                            if(isset($_GET['cat-zone']) && $_GET['cat-zone'] == $row['cat_id']){
                                
                                // Nothing Happens
                                
                            }else{
                                
                                $this -> cat_Id = $row['cat_id'];
                                $this -> cat_Title = $row['cat_title'];
                                
                                echo
                                
                                "<li>
                                    <a href='index.php?cat-zone={$this -> cat_Id}'>{$this -> cat_Title}</a>
                                </li> <!-- /. -->";
                                
                                // Add +1 at the end of the loop
                                $n ++;
                                
                            }
                            
                            
                        }
                    }
                    
                    
                    echo "</ul>"; /* /. ul :: list-unstyled */
                
                echo "</div>"; /* /. col */
                
                
                // Right side of categories display area
                
            }elseif($n <= 6){
                
                echo "<div class='col-lg-6'>";
                
                    echo "<ul class='list-unstyled mb-0'>";
                    
                    
                    while($n >= 3 && $n <= 6){
                        
                        $row = mysqli_fetch_assoc($results);
                        
                        // Ensures that `uncategorized` && `Latest` Categories aren't displayed on categories sidebar display.
                        if($row['cat_id'] != 1 && $row['cat_id'] != 2){
                            
                            if(isset($_GET['cat-zone']) && $_GET['cat-zone'] == $row['cat_id']){
                                
                                // Nothing Happens
                                
                            }else{
                                
                                $this -> cat_Id = $row['cat_id'];
                                $this -> cat_Title = $row['cat_title'];
                                
                                echo
                                
                                "<li>
                                    <a href='index.php?cat-zone={$this -> cat_Id}'>{$this -> cat_Title}</a>
                                </li> <!-- /. -->";
                                
                                // Add +1 at the end of the loop
                                $n ++;
                                
                            }
                            
                        }
                        
                    }
                    
                    echo "</ul>"; /* /. */
                
                echo "</div>"; /* /. */
                
            } // /. if => else
            
            
            
            
        } // /. while loop
        
        
    }
    /* /. generate_Cat */
    
    // Used to generate the navigation-bar `categories`
    function nav_Categories(){
        
        global $link;
        
        // Displays `categories`
        $query = " SELECT * FROM `categories`";
        
        $results = mysqli_query($link, $query);
        
        
        while ($row = mysqli_fetch_assoc($results)) {
            
            if ($row['cat_id'] != 1){
                
                $this -> cat_Id = $row['cat_id'];
                $this -> cat_Title = $row['cat_title'];
                
                // Used to modify the $_GET string
                $get_Identifier = "";
                
                if($row['cat_id'] == 2){

                    //   This ensures that the `Latest` Category always goes back to the `index.php`
                    $get_Identifier = "";
                    
                }else{
                    
                    // Assigns the `$_GET` modifier to generate the `categories` own page
                    $get_Identifier = "?cat-zone={$this -> cat_Id}";
                    
                }
                


                echo 
                
                "<a class='nav-item nav-link text-light' href='index.php{$get_Identifier}'>

                    {$this -> cat_Title}

                </a> <!-- /. a -->";

                echo "<span class='vertical_Line desktop_Nav_Display my-auto'></span>";
                echo "<span > <hr class='m-auto border-light mobile_Nav_Display'></span>";
                
            }

        }
        
    }
    /* /. nav_Categories */
    
}


?>