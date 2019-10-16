<!-- Inserts the `navbar` -->
<div class="container-fluid mx-0 px-0 mb-3" id="nav"> <!-- START OF: .container-fluid -->

    <!-- START OF: NAV 01 -->
    <nav class="navbar navbar-expand-md navbar-light bg-light my-auto bg-dark">


        <button class="navbar-toggler nav-brand mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> <!-- /button -->



        <div class="navbar-nav collapse navbar-collapse" id="navbarSupportedContent">

            <div class="row w-100 align-items-center ml-0">

                <div class="col"></div> <!-- /.col -->


                <div class="col-8 ">

                    <div class="navbar-nav justify-content-center" id="Center_Nav">

                        <a class="navbar-brand text-light" id="brand_Logo" href="#">

                            <img class="text-light" src="images/Capture_Modified_Transparent_New_2.png" height="50" alt="Archon CMS logo">

                        </a> <!-- -->

                    </div> <!-- --> 

                </div> <!-- /.col-8 -->


                <div class="col">

                    <div class="navbar-nav justify-content-end">


                        <button type="submit" class="btn text-light"><img src="images/mail-outline-white.png" alt="White Mail Icon" style="width: 16px; height: 16px;"><span class="pl-2">Subscribe</span></button>

                        <div class="d-flex">

                                <button type="button" class="btn text-light dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="images/person-solid-white.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button>

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

            </div> <!-- /. -->

        </div><!-- /. -->

    </nav><!-- /.NAV 01 -->

    <hr class="p-0 m-0 bg-secondary">

    <!-- START OF: NAV 02 -->
    <nav class="navbar navbar-expand-md navbar-light bg-light my-auto bg-dark">

        <div class="navbar-nav collapse navbar-collapse m-1" id="navbarSupportedContent">

            <div class="row w-100 align-items-center ml-0">

                <div class="col"></div> <!-- /.col -->

                <div class="col-6">

                    <div class="navbar-nav justify-content-center">

                    <?php
                        
                        // 
                        if($page_Title == "Home"){
                            
                            // Echo WITH `active` && `disabled`
                            echo 
                                "<a class='nav-item nav-link active font-weight-bold disabled text-light' href='#'>
                                
                                Latest
                                
                                </a> <!-- /. a -->
                                <span class='vertical_Line'></span>
                                <span > <hr class='m-auto border-dark'></span>";
                            
                        }else{
                            
                            // Echo WITHOUT `active` && `disabled`
                            echo 
                                "<a class='nav-item nav-link font-weight-bolder text-light' href='#'>
                                
                                Latest
                                
                                </a> <!-- /. a -->
                                <span class='vertical_Line'></span>
                                <span > <hr class='m-auto border-dark'></span>";
                            
                        }
                        
                        
                        
                        // Displays `categories`
                        $query = " SELECT * FROM `categories`s ";
                        $results = mysqli_query($link, $query);
                        

                            while ($row = mysqli_fetch_assoc($results)) {
                            
                                $cat_Title = $row['cat_title'];

                                // echo navlinks    
                                echo 
                                    
                                    "<a class='nav-item nav-link text-light' href='#'>

                                    ".$cat_Title."

                                    </a> <!-- /. a -->

                                    <span class='vertical_Line'></span>
                                    <span > <hr class='m-auto border-light'></span>";

                            }
                            
                        
                

                    ?>

<!-- Replacing nav-items with PHP -->

<!--<a class="nav-item nav-link active font-weight-bold disabled text-light" href="#">Latest</a>
    <span class="vertical_Line"></span>
    <span > <hr class="m-auto border-dark"></span>

<a class="nav-item nav-link nav_My_Color text-light" href="#">Tech</a>
    <span class="vertical_Line"></span>
    <span > <hr class="m-auto border-dark"></span>

<a class="nav-item nav-link nav_My_Color text-light" href="#">Coding</a>
    <span class="vertical_Line"></span>
    <span > <hr class="m-auto border-dark"></span>

<a class="nav-item nav-link text-light" href="#">Life Advice</a>
<span > <hr class="m-auto border-dark"></span>-->

                    </div> <!-- -->

                </div> <!-- /.col -->

                <div class="col">

                    <div class="navbar-nav ml-auto justify-content-end" id="right_Nav">

                        <form class="form-inline my-2 my-lg-0">

                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

                        </form> <!-- END OF: search form -->

                    </div> <!-- END OF: Search form container -->

                </div> <!-- /.col -->

            </div> <!-- /.row -->

        </div><!-- /Toggler Nav 2 -->

    </nav><!-- /NAV 02 -->

</div> <!-- /#nav -->