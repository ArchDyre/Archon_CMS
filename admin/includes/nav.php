<!-- Inserts the `navbar` -->
<div class="container-fluid mx-0 px-0 mb-0 desktop_Nav_Display" id="nav"> <!-- START OF: .container-fluid -->

    <!-- START OF: NAV 01 -->
    <nav class="navbar navbar-expand-md navbar-dark my-auto bg-dark">


        <button class="navbar-toggler nav-brand mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> <!-- /button -->



        <div class="navbar-nav collapse navbar-collapse" id="navbarSupportedContent">

            <div class="row w-100 align-items-center ml-0">

                <div class="col">

                    <div class="navbar-nav justify-content-start" id="Center_Nav">

                        <a class="navbar-brand text-light mx-2" id="brand_Logo" href="../index.php">

                            <img class="text-light" src="../images/logo/Capture_Modified_Transparent_New.png" height="50" alt="Archon CMS logo">

                        </a> <!-- -->

                    </div> <!-- -->

                </div> <!-- /.col -->


                <div class="col"></div> <!-- /.col-8 -->


                <div class="col-md-8">

                    <div class="navbar-nav justify-content-end">

                        <div class="d-flex">

                                <form class="form-inline my-2 my-lg-0 mx-2">

                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

                                </form> <!-- END OF: search form -->

                                <!-- <button type="button" class="btn text-light mx-2"><img src="images/icons/chat-alt-solid-light.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button> -->

                                <button type="button" class="btn text-light mx-2"><img src="images/icons/notification-outline-light.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button> <!-- / -->
                                
                                
                                <!-- Drop Down Login/Register -->
                                <button type="button" class="btn text-light dropdown-toggle mx-2" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="images/icons/person-outline-light.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button> <!-- /.Account -->

                                <form class="dropdown-menu dropdown-menu-right mr-1 p-4 px-4 py-3 p-4 mt-2 mr-2" method="post">

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

</div> <!-- /#nav -->


<!-- Mobile Menu -->
<div class="container-fluid w-100 px-0 mx-0 mobile_Nav_Display">

    <!-- START OF: NAV Mobile -->
    <nav class="navbar navbar-expand-md navbar-light bg-light my-auto bg-dark">
        
        <!-- Archon CMS - Logo -->
        <a class="navbar-brand" href="#"><img src="../images/logo/Capture_Modified_Transparent_New.png" alt="Archon CMS Logo" height="50"></a>
        
        <!--  Toggler btn && Icon Image -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;">

        <img src="images/icons/list-round-solid-light.png" height="20">

        </button> <!-- /. button -->

        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto pt-3">

                <div class="row">

                    <div class="col-6">

                        <!-- Mobile - Login -->
                        <li class="nav-item">

                            <p class="p-0 m-0"><img src="images/icons/shield-outline-light.png" class="" alt="" style="width: 15px;"></p>
                            <a class="nav-link pt-0 text-light" href="dashboard.php">Login</a>

                        </li> <!-- /. Mobile - Login -->

                        <!-- Mobile - Register -->
                        <li class="nav-item" hidden>

                            <p class="p-0 m-0"><img src="images/icons/home-outline-light.png" class="" alt="" style="width: 15px;"></p>
                            <a class="nav-link pt-0 text-light" href="dashboard.php">Register</a>

                        </li> <!-- /. Mobile - Register -->

                        <!-- Mobile - Log Out -->
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

            <!-- Divider -->
            <div class="dropdown-divider" style="border-width: thick;"></div>

            <ul class="navbar-nav mr-auto py-3">

                <!-- Mobile - Dashboard -->
                <li class="nav-item ">

                    <p class="p-0 m-0"><img src="images/icons/home-outline-light.png" class="" alt="" style="width: 15px;"></p>
                    <a class="nav-link pt-0 text-light" href="dashboard.php">Dashboard</a>

                </li> <!-- /. Mobile - Dashboard -->


                <!-- Divider -->
                <div class="dropdown-divider"></div>


                <!-- Mobile - Posts -->
                <li class="nav-item dropdown">

                    <p class="p-0 m-0"><img src="images/icons/paper-rocket-outline-light.png" class="" alt="" style="width: 15px;"></p>
                    <a class="nav-link dropdown-toggle text-light pt-0" href="posts.php?source=edit-post" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        Posts

                    </a> <!-- /. Mobile - Posts -->

                    <div class="dropdown-menu text-center py-2" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="#">View all</a>
                            <div class="dropdown-divider w-25 mx-auto border-dark"></div>
                        <a class="dropdown-item" href="#">New post</a>
                            <div class="dropdown-divider w-25 mx-auto border-dark"></div>
                        <a class="dropdown-item" href="#">Categories</a>
                            <div class="dropdown-divider w-25 mx-auto border-dark"></div>
                        <a class="dropdown-item" href="#">Comments</a>

                    </div> <!-- /. -->

                </li> <!-- /. Mobile - Posts -->


                <!-- Divider -->
                <div class="dropdown-divider"></div>


                <!-- Mobile - Categories -->
                <li class="nav-item">

                    <p class="p-0 m-0"><img src="images/icons/book-open-outline-light.png" class="mx-2" alt="" style="width: 15px;"></p>
                    <a class="nav-link text-light pt-0" href="categories.php">Categories</a>

                </li> <!-- /. Mobile - Categories -->


                 <!-- Divider -->
                <div class="dropdown-divider"></div>


                <!-- Mobile - Comments -->
                <li class="nav-item">

                    <p class="p-0 m-0"><img src="images/icons/chat-alt-double-outline-light.png" class="mx-2" alt="" style="width: 15px;"></p>
                    <a class="nav-link text-light pt-0" href="#">Comments</a>

                </li> <!-- /. Mobile - Comments -->

                <!-- Divider -->
                <div class="dropdown-divider"></div>


                <!-- Mobile - Users -->


                <li class="nav-item dropdown">

                    <p class="p-0 m-0"><img src="images/icons/many-people-outline-light.png" class="mx-2" alt="" style="width: 15px;"></p>
                    <a class="nav-link dropdown-toggle text-light pt-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        Users

                    </a> <!-- /. -->

                    <div class="dropdown-menu text-center py-2" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="#">View all</a>
                            <div class="dropdown-divider w-25 mx-auto border-dark"></div>
                        <a class="dropdown-item" href="#">Add new user</a>
                            <div class="dropdown-divider w-25 mx-auto border-dark"></div>
                        <a class="dropdown-item" href="#">Recent activity</a>

                    </div> <!-- /. -->

                </li> <!-- /. Mobile - Users -->


                <!-- Divider -->
                <div class="dropdown-divider"></div>


                <!-- Mobile - Profile -->


                <li class="nav-item">

                    <p class="p-0 m-0"><img src="images/icons/settings-outline-light.png" class="mx-2" alt="" style="width: 15px;"></p>
                    <a class="nav-link text-light pt-0" href="#">Profile</a>

                </li> <!-- /. Mobile - Profile -->

                <!-- Divider -->
                <div class="dropdown-divider"></div>


            </ul> <!-- /. ul -->

            <!-- Search Form - Mobile Nav -->
            <div class="row ">

                <form class="form-group text-center mx-auto py-3 m-0">
                    <input class="form-control my-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn custom_Btn my-3 my-sm-0 text-light" type="submit">Search</button>
                </form>

            </div> <!-- /.row -->

        </div> <!-- /. -->

    </nav><!-- /.NAV Mobile -->

</div> <!-- /. Mobile Menu -->