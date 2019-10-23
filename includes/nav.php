<!-- Inserts the `navbar` -->
<div class="container-fluid mx-0 px-0 mb-3" id="nav"> <!-- START OF: .container-fluid -->

    <!-- START OF: NAV 01 -->
    <nav class="navbar navbar-expand-md navbar-light bg-light my-auto bg-dark">
        
        <!-- Mobile: Archon CMS - Logo -->
        <a class="navbar-brand mobile_Nav_Display" href="#"><img src="images/logo/Capture_Modified_Transparent_New.png" alt="Archon CMS Logo" height="50"></a>
        
        <!--  Mobile: Toggler btn && Icon Image -->
        <button class="navbar-toggler nav-brand ml-auto py-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;">
           
            <img src="images/icons/list-round-solid-light.png" height="20">
            
        </button> <!-- /button -->



        <div class="navbar-nav collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav pt-3 mobile_Nav_Display text-center">

                <div class="row">

                    <div class="col-6">

                        <!-- Mobile - Dashboard -->
                        <li class="nav-item">

                            <p class="p-0 m-0"><img src="images/icons/shield-outline-light.png" class="" alt="" style="width: 15px;"></p>
                            <a class="nav-link pt-0 text-light" href="dashboard.php">Login</a>

                        </li> <!-- /. Mobile - Login -->

                        <!-- Mobile - Dashboard -->
                        <li class="nav-item" hidden>

                            <p class="p-0 m-0"><img src="images/icons/home-outline-light.png" class="" alt="" style="width: 15px;"></p>
                            <a class="nav-link pt-0 text-light" href="dashboard.php">Register</a>

                        </li> <!-- /. Mobile - Register -->

                        <!-- Mobile - Dashboard -->
                        <li class="nav-item" hidden>

                            <p class="p-0 m-0"><img src="images/icons/home-outline-light.png" class="" alt="" style="width: 15px;"></p>
                            <a class="nav-link pt-0 text-light" href="dashboard.php">Log Out</a>

                        </li> <!-- /. Mobile - Log out -->


                    </div> <!-- /. col-6 -->

                    <div class="col-6">

                        <li class="nav-item">

                            <p class="p-0 m-0"><img src="images/icons/notification-outline-light.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></p>
                            <a class="nav-link pt-0 text-light" href="dashboard.php">Notifications</a>

                        </li> <!-- /. Mobile - Notifications -->


                    </div> <!-- /. col-6 -->

                </div> <!-- /.row -->

            </ul> <!-- /. ul -->
            <!-- /. Mobile - {login,register,log out,notifications} -->
            
            <!-- Divider -->
            <div class="dropdown-divider mobile_Nav_Display" style="border-width: thick;"></div>
            
            
            <!-- . Nav Content -->
            <div class="row w-100 desktop_Nav_Display mx-auto">
                
                <!-- ROW: 1 -->
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col">

                        <a class="navbar-brand text-light" id="brand_Logo" href="#">

                            <a class="navbar-brand desktop_Nav_Display" href="#"><img src="images/logo/Capture_Modified_Transparent_New.png" alt="Archon CMS Logo" height="50"></a>

                        </a> <!-- -->

                        </div> <!-- /.col-max -->


                        <div class="col-2 desktop_Nav_Display py-md-2">

                            <div class="navbar-nav justify-content-center desktop_Nav_Display">


                                <button type="submit" class="btn text-light"><img src="images/icons/mail-outline-light.png" alt="White Mail Icon" style="width: 16px; height: 16px;"><span class="pl-2">Subscribe</span></button>

                                <div class="d-flex">

                                        <button type="button" class="btn text-light dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="images/icons/person-solid-light.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button>

                                        <form class="dropdown-menu dropdown-menu-right border border-secondary mr-1 p-4 px-4 py-3 p-4 mt-2 mr-2" method="post">

                                            <div class="form-group">

                                                <label for="exampleDropdownFormEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">

                                            </div>

                                            <div class="form-group">

                                                <label for="exampleDropdownFormPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">

                                            </div>

                                            <div class="form-group">

                                                <div class="form-check">

                                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                    <label class="form-check-label" for="dropdownCheck"> Remember me </label>

                                                </div>

                                            </div>

                                            <button type="submit" value="Sign in" name="sign_In_Drop" class="btn btn-primary">Sign in</button>

                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">New around here? <span class="text-primary">Sign up</span></a>
                                            <a class="dropdown-item" href="#"><span class="text-secondary">Forgot password?</span></a>

                                        </form> <!-- /.form -->

                                </div> <!-- /.flex -->   

                            </div> <!-- /.nav-bar -->

                        </div> <!-- /.col -->
                        
                    </div> <!-- /. row -->
                                        
                </div> <!-- /. container-fluid -->
                <!-- /. ROW: 1 --> 
                
                  
                <!-- ROW 2 -->   
                <div class="container-fluid">
                    
                    <div class="row">
                        
                        <div class="col-12 col-md-6">

                            <ul class="navbar-nav mr-auto pt-3 py-md-2 text-center">

                            <?php

                                // 
                                if($page_Title == "Home"){

                                    // Display WITH `active` && `disabled`

                                    ?>
                                    <!-- /. php -->

                                    <a class='nav-item nav-link active font-weight-bold disabled text-light' href='#'>

                                    Latest

                                    </a> <!-- /. a -->
                                    <span class='vertical_Line'></span>
                                    <!-- Divider -->
                                    <div class='dropdown-divider'></div>



                     <!-- START OF: php -->           
                     <?php      }else{

                                    // Display WITHOUT `active` && `disabled`
                                    ?> 
                                    <!-- /. php -->

                                    <a class='nav-item nav-link font-weight-bolder text-light' href='#'>

                                    Latest

                                    </a> <!-- /. a -->
                                    <span class='vertical_Line'></span>
                                    <!-- Divider -->
                                    <div class='dropdown-divider'></div>

                     <!-- START OF: php -->           
                     <?php      }


                                // Displays `categories`
                                $query = " SELECT * FROM `categories`s ";
                                $results = mysqli_query($link, $query);


                                    while ($row = mysqli_fetch_assoc($results)) {

                                        $cat_Title = $row['cat_title'];

                                        // echo navlinks    
                                        ?> 
                                    <!-- /. php --> 

                                            <a class='nav-item nav-link text-light' href='#'>

                                            <?php echo $cat_Title; ?>

                                            </a> <!-- /. a -->

                                            <span class='vertical_Line'></span>
                                            <span > <hr class='m-auto border-light'></span>;

                     <!-- START OF: php -->           
                     <?php      }




                        ?> <!-- /. nav categories -->
                            </ul> <!-- /. ul -->

                        </div> <!-- /.col -->
                        
                        <div class="col-12 col-md-3 py-4 py-md-0 mx-auto m-md-0 ml-md-auto form-group">

                            <form class="my-2 my-md-0 form-inline py-md-2" >

                                <input class="form-control my-2 mx-auto mx-md-1 my-md-0" type="search" name="nav_Search_Query" placeholder="Search" aria-label="Search">
                                <button class="btn custom_Btn text-light my-2 mx-auto mx-md-1 my-md-0" type="submit">Search</button>

                            </form> <!-- END OF: search form -->

                        </div> <!-- /.col -->
                        
                    </div> <!-- /. row -->
                                        
                </div> <!-- /. container-fluid -->
                <!-- /. ROW: 2 -->

            </div> <!-- /. First-Nav -->
            
        </div><!-- /. -->

    </nav><!-- /.NAV 01 -->

</div> <!-- /#nav -->