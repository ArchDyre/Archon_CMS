<div class="table-responsive pb-5">
    <table class="table table-striped table-bordered table-hover">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Check</th>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Tags</th>
                <th scope="col">Comments</th>
                <th scope="col">Date</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead> <!-- -->

        <tbody>

            <?php

                $query = "SELECT * FROM `posts`";

                $results = mysqli_query($link,$query);

                if(!$results){

                    die("QUERY ERROR: " . mysqli_error($link));

                }else{

                    while($row = mysqli_fetch_assoc($results)){

                        // Assign variables to echo in table creation.
                        $post_Id = $row['post_id'];
                        $post_Author = $row['post_author'];
                        $post_Title = $row['post_title'];
                        // Categories is done below
                        $post_Status = $row['post_status'];
                        $post_Image = $row['post_image'];
                        $post_Tags = $row['post_tags'];
                        $post_Total_Comments = $row['post_comment_count'];
                        $post_Create_Date = $row['post_date'];

                        // retrieve category title

                        // create query to retrieve `cat_title` with `cat_id` FROM `categories`
                        $query = "SELECT `cat_title` FROM `categories` WHERE `cat_id` = '".mysqli_real_escape_string($link,$row['post_category_id'])."'";

                        // assign `query execution` to variable for fault-checking
                        $results_Cat = mysqli_query($link,$query);

                        // checks if the `categories` query succesfully executed
                        if(!$results_Cat){

                            die("QUERY ERROR: " . mysqli_error($link));
                            $post_Category = "Category unavailable";

                        }else{

                            $row_Cat = mysqli_fetch_assoc($results_Cat);
                            $post_Category = $row_Cat['cat_title'];

                        }




                        ?>

                            <tr class='text-center'>

                                <th scope="row" class="py-3"><input type="checkbox" name="checkbox.<?php echo $id; ?>"></th>
                                <td><?php echo $post_Id; ?></td>
                                <td><?php echo $post_Author; ?></td>
                                <td><?php echo $post_Title; ?></td>
                                <td><?php echo $post_Category; ?></td>
                                <td><?php echo $post_Status; ?></td>
                                <td><img src='../images/posts/<?php echo $post_Image; ?>' class='img-fluid' style='width: 100%; height: 100%; max-width: 300px; max-height: 300px;'></td>
                                <td><?php echo $post_Tags; ?></td>
                                <td><?php echo $post_Total_Comments; ?></td>
                                <td><?php echo $post_Create_Date; ?></td>
                                <td><a class="btn" href="../post.php?reference=<?php echo $post_Id ?>">View</a></td>
                                <td><a class="btn" href="posts.php?source=edit_post">Edit</a></td>
                                <td><a class="btn" href="#">Delete</a></td>

                            </tr> 


                        <?php

                    }

                }



            ?>



        </tbody> <!-- -->

    </table> <!-- /. table -->
</div> <!--- /. -->    