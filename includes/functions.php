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
        
        if(isset($_GET['cat-zone'])){
            
            $query = "SELECT * FROM `posts` WHERE `post_category_id` = ".mysqli_real_escape_string($link, $_GET['cat-zone']);
            
        }else{
            
            $query = "SELECT * FROM `posts`";
            
        }
        
        
        $results = mysqli_query($link, $query);
        
        while($row = mysqli_fetch_assoc($results)){
            
            $this -> post_Id = $row['post_id'];
            $this -> post_Title = $row['post_title'];
            $this -> post_Author = $row['post_author'];
            $this -> post_Date = $row['post_date'];
            $this -> post_Content = $row['post_content'];
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
                    
                    echo "<h2 class='card-title'>{$this -> post_Title}</h2>";
                    
                    echo "<p class='card-text'>
                    {$this -> post_Content}
                    </p>";
                    
                    echo "<a href='post.php?reference={$this -> post_Id}' class='btn btn-primary'>Read More &rarr;</a>";
                    
                echo "</div>"; /* /. div - card-body */

                echo "<div class='card-footer text-muted'>";
                   
                echo "Posted on".date_format(new DateTime($this -> post_Date), 'd-m-Y'); 
                    echo "by <a href='#'>{$this -> post_Author}</a>";
                    
                echo "</div>"; /* /. div - card-footer */

            echo "</div>"; /* /. div - card */
        
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
        $query = " SELECT * FROM `categories` LIMIT 6";
        $results = mysqli_query($link, $query);
        
        $number_Categories = mysqli_num_rows($results);
        $n = 1;
        
        /*
        
        This while loop setup uses `$n` to ensure that there are equal amounts of
        categories in both `ul` areas
        
        
        */
        
        while ($n <= $number_Categories) {
            
            
            // Left Categories display area
            if($n <= ceil($number_Categories/2)){
                
                
                echo "<div class='col-lg-6'>";
                
                    echo "<ul class='list-unstyled mb-0'>";
                    
                    
                    while($n <= ceil($number_Categories/2)){
                        
                        $row = mysqli_fetch_assoc($results);
                        
                        // Ensures that `uncategorized` && `Latest` Categories aren't displayed on categories sidebar display.
                        if($row['cat_id'] != 1 && $row['cat_id'] != 2){
                            
                            if(isset($_GET['cat-zone']) && $_GET['cat-zone'] == $row['cat_id']){
                                
                                $hide_Cat = "hidden";
                                
                            }else{
                                
                                $hide_Cat = "";
                                
                            }
                            
                            $this -> cat_Id = $row['cat_id'];
                            $this -> cat_Title = $row['cat_title'];
                            
                            echo
                            
                            "<li {$hide_Cat}>
                                <a href='index.php?cat-zone={$this -> cat_Id}'>{$this -> cat_Title}</a>
                            </li> <!-- /. -->";
                            
                            // Add +1 at the end of the loop
                            $n ++;
                            
                        }
                    }
                    
                    
                    echo "</ul>"; /* /. ul :: list-unstyled */
                
                echo "</div>"; /* /. col */
                
                
                // Right side of categories display area
                
            }else{
                
                echo "<div class='col-lg-6'>";
                
                    echo "<ul class='list-unstyled mb-0'>";
                    
                    
                    while($n >= ceil($number_Categories/2) && $n <= $number_Categories){
                        
                        $row = mysqli_fetch_assoc($results);
                        
                        // Ensures that `uncategorized` && `Latest` Categories aren't displayed on categories sidebar display.
                        if($row['cat_id'] != 1 && $row['cat_id'] != 2){
                            
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
                    
                    echo "</ul>"; /* /. */
                
                echo "</div>"; /* /. */
                
            } // /. if => else
            
            
            
            
        } // /. while loop
        
        
    }
    /* /. generate_Cat */
    
    
}


?>