<?php

    // Includes:
    // EXAMPLE: ` include "file.php"; `

    session_start();





?>




<!doctype html>
<html lang="en"> <!-- START OF: <html> -->
  <head> <!-- START OF: <head> -->
    
    <!-- CSS Links -->
    
        <!-- Link to css normalising sheet. -->
        <link rel="stylesheet" type="text/css" href="css/normalise.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Link to css sheet -->
        <link rel="stylesheet" type="text/css" href="css/dash.css">
    
    
    <!-- IE 8 and below compatibility with HTML5 -->
    
        <!--[if IE]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
            </script>
        <![endif]-->     
    
    <!-- Declare <meta> variables -->
    
        <!-- Declare description of website -->
        <meta name="description" content="">
        <!-- Declare author of website. -->
        <meta name="author" content="Rohan Dyre">
        <!-- Declare keywords relating to SEO of website content -->
        <meta name="keywords" content="">
        <!-- Required meta tags -->
        <!-- Defines the character encoding used -->
        <meta charset="utf-8">
        <!-- Ensure resizing based on device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    
    <!-- Change the title of the website -->
    <title>Title of my website</title>
    
    
  </head> <!-- END OF: <head> -->
  
  
  <body> <!-- START OF: <body> -->
    
    <!-- Inserts the `navbar` -->
    <div class="container-fluid mx-0 px-0 mb-0" id="nav"> <!-- START OF: .container-fluid -->
        
        <!-- START OF: NAV 01 -->
        <nav class="navbar navbar-expand-md navbar-dark my-auto bg-dark">


            <button class="navbar-toggler nav-brand mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> <!-- /button -->



            <div class="navbar-nav collapse navbar-collapse" id="navbarSupportedContent">
                
                <div class="row w-100 align-items-center ml-0">
                    
                    <div class="col">
                        
                        <div class="navbar-nav justify-content-start" id="Center_Nav">
                   
                            <a class="navbar-brand text-light mx-2" id="brand_Logo" href="#">

                                <img class="text-light" src="../images/Capture_Modified_Transparent_New_2.png" height="50" alt="Archon CMS logo">

                            </a> <!-- -->

                        </div> <!-- -->
                        
                    </div> <!-- /.col -->
                    
                    
                    <div class="col "></div> <!-- /.col-8 -->
                    
                    
                    <div class="col">
                        
                        <div class="navbar-nav justify-content-end">

                            <div class="d-flex">
                                    
                                    <form class="form-inline my-2 my-lg-0 mx-2">

                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

                                    </form> <!-- END OF: search form -->
                                    
                                    <button type="button" class="btn text-light mx-2"><img src="images/chat-alt-solid-white.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button> <!-- / -->
                                    
                                    <button type="button" class="btn text-light mx-2"><img src="images/notification-solid-white.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button> <!-- / -->
                                    
                                    <button type="button" class="btn text-light dropdown-toggle mx-2" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="/images/person-solid-white.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button> <!-- /Account -->

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
    
    <div class="container-fluid h-100 m-0"> <!-- START OF: .container -->
        
        <div class="row">
            
            <div class="col-6 col-sm-4 col-lg-2 " id="dash_Sidebar">
               
                <nav class="nav flex-column p-3">   
                   
                    
                <!-- Dashboard -->
                    <div id="dropdown_Header_1">
                      <h2 class="mb-0 ">                                 
                        <button class="btn text-light" id="dash_Btn" type="button">
                          <a class="nav-link active text-light py-auto" href="#"><img src="images/home-outline-light.png" class="mx-2" alt="" style="width: 15px;">Dashboard</a>
                        </button> <!-- /. -->
                      </h2> <!-- /. -->
                    </div> <!-- /. -->    
                    
                    <!-- Mobile - Dashboard -->
                    <div class="dropdown dropright text-right" hidden>
                        <button class="btn text-light p-3" type="button" id="dropdownMenu0"><img src="images/home-outline-light.png" class="mx-2" alt="" style="width: 15px;">Dashboard</button>                   
                    </div> <!-- /. -->    
                           
                        
                <!-- Users -->       
                    <div class="accordion m-0" id="accordion_Users">

                            <div id="dropdown_Header_1">
                              <h2 class="mb-0">                                 
                                <button class="btn text-light" id="users_Btn" type="button" data-toggle="collapse" data-target="#accordion_Menu_1" aria-expanded="true" aria-controls="accordion_Menu_1">
                                  <a class="nav-link dropdown-toggle active text-light py-auto" href="#"><img src="images/person-outline-light.png" class="mx-2" alt="" style="width: 15px;">Users</a>
                                </button> <!-- /. -->
                              </h2> <!-- /. -->
                            </div> <!-- /. -->

                            <div id="accordion_Menu_1" class="collapse" aria-labelledby="dropdown_Header_1" data-parent="#accordion_Users">
                              <div class="bg-light">
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark active" href="#"><img src="" alt="">View all</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Add new user</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Recent activity</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Edit users (remove)</a></button>
                                <button class="dropdown-item py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Delete Users (Remove)</a></button>
                              </div> <!-- /. -->
                            </div> <!-- /. -->

                    </div> <!-- /. accordion_Users -->
                    
                    <!-- Mobile - Users -->
                    <div class="dropdown dropright text-right" hidden>
                        <button class="btn text-light dropdown-toggle p-3" type="button" id="dropdownMenu1" data-toggle="dropdown" aria haspopup="true" aria-expanded="false"><img src="images/person-outline-light.png" class="mx-2" alt="" style="width: 15px;">Posts</button>
                        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenu1">
                            <button class="dropdown-item border-bottom" type="button">View all</button>
                            <button class="dropdown-item" type="button">Add new user</button>
                            <button class="dropdown-item" type="button">Recent activity</button>
                        </div> <!-- /. -->                        
                    </div> <!-- /. -->
                    
                <!-- Posts -->
                    <div class="accordion m-0" id="accordion_Posts">

                            <div id="dropdown_Header_2">
                              <h2 class="mb-0">                                 
                                <button class="btn text-light" id="posts_Btn" type="button" data-toggle="collapse" data-target="#accordion_Menu_2" aria-expanded="true" aria-controls="accordion_Menu_2">
                                  <a class="nav-link dropdown-toggle active text-light py-auto" href="#"><img src="images/paper-rocket-outline-light.png" class="mx-2" alt="" style="width: 15px;">Posts</a>
                                </button> <!-- /. -->
                              </h2> <!-- /. -->
                            </div> <!-- /. -->

                            <div id="accordion_Menu_2" class="collapse" aria-labelledby="dropdown_Header_2" data-parent="#accordion_Posts">
                              <div class="bg-light">
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link active p-0 text-dark" href="#"><img src="" alt="">View all</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">New post</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Categories</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Comments</a></button>
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Edit post (Remove)</a></button>
                              </div> <!-- /. -->
                            </div> <!-- /. -->

                    </div> <!-- /. accordion_Posts -->
                    
                    <!-- Mobile - Posts -->
                    <div class="dropdown dropright text-right" hidden>
                        <button class="btn text-light dropdown-toggle p-3" type="button" id="dropdownMenu2" data-toggle="dropdown" aria haspopup="true" aria-expanded="false"><img src="images/paper-rocket-outline-light.png" class="mx-2" alt="" style="width: 15px;">Posts</button>
                        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item border-bottom" type="button">View all</button>
                            <button class="dropdown-item" type="button">New post</button>
                            <button class="dropdown-item" type="button">Categories</button>
                            <button class="dropdown-item" type="button">Comments</button>
                        </div> <!-- /. -->                        
                    </div> <!-- /. -->
                    
                <!-- Statistics -->
                    <div class="accordion m-0" id="accordion_Stats">

                            <div id="dropdown_Header_3">
                              <h2 class="mb-0">                                 
                                <button class="btn text-light" id="stats_Btn" type="button" data-toggle="collapse" data-target="#accordion_Menu_3" aria-expanded="true" aria-controls="accordion_Menu_3">
                                  <a class="nav-link dropdown-toggle active text-light py-auto" href="#"><img src="images/upward-trend-outline-light.png" class="mx-2" alt="" style="width: 15px;">Statistics</a>
                                </button> <!-- /. -->
                              </h2> <!-- /. -->
                            </div> <!-- /. -->

                            <div id="accordion_Menu_3" class="collapse" aria-labelledby="dropdown_Header_3" data-parent="#accordion_Stats">
                              <div class="bg-light">
                                <button class="dropdown-item border-bottom py-2" type="button"><a class="nav-link p-0 text-dark active" href="#"><img src="" alt="">General statistics</a></button>
                                <button class="dropdown-item py-2" type="button"><a class="nav-link p-0 text-dark" href="#"><img src="" alt="">Charts</a></button>
                              </div> <!-- /. -->
                            </div> <!-- /. -->

                    </div> <!-- /. accordion_Stats -->

                    <!-- Mobile - Stats -->
                    <div class="dropdown dropright text-right" hidden>
                        <button class="btn text-light dropdown-toggle p-3" type="button" id="dropdownMenu3" data-toggle="dropdown" aria haspopup="true" aria-expanded="false"><img src="images/upward-trend-outline-light.png" class="mx-2" alt="" style="width: 15px;">Statistics</button>
                        <div class="dropdown-menu w-100 p-2" aria-labelledby="dropdownMenu3">
                            <button class="dropdown-item border-bottom" type="button">General statistics</button>
                            <button class="dropdown-item" type="button">Charts</button>
                        </div> <!-- /. -->                        
                    </div> <!-- /. -->

                </nav> <!-- /. -->    
                
            </div> <!-- /.col -->
            
            
            
            
            <div class="col overflow-auto p-0">
                
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Overview</li>
                </ol> <!-- /. breadcrumbs -->
                
                
                <div class="container-fluid">

                        

                        <!-- Icon Cards -->
                        <div class="row">

                            <div class="col mt-0 mb-3">

                                <div class="card bg-primary">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">New Comments</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                            <div class="col mt-0 mb-3">

                                <div class="card bg-success">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">Categories</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                            <div class="col mt-0 mb-3">

                                <div class="card bg-info">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">New Users</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                            <div class="col mt-0 mb-3">

                                <div class="card bg-danger">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">New Alerts</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                        </div>

                        <!-- Table -->
                        <table class="table table-striped table-hover" id="dash_Table" cellspacing="0" width="100%">
  
                            <thead class="thead-dark table-responsive{-sm|-md|-lg|-xl}">
                                <tr>
                                    <th scope="col" class="th-sm">Date</th>
                                    <th scope="col" class="th-sm">New Users</th>
                                    <th scope="col" class="th-sm">Total Users</th>
                                    <th scope="col" class="th-sm">Total Posts</th>
                                    <th scope="col" class="th-sm">Total Views</th>
                                </tr> <!-- /tr -->
                            </thead> <!-- /thead -->
                            
                            <tbody>
                                <tr>
                                    <td scope="row">Current_Date</td>
                                    <td>17</td>
                                    <td>25</td>
                                    <td>10</td>
                                    <td>250</td>
                                </tr> <!-- /tr -->
                                
                                <tr>
                                    <td scope="row">Current_Date</td>
                                    <td>5</td>
                                    <td>8</td>
                                    <td>6</td>
                                    <td>50</td>
                                </tr> <!-- /tr -->
                                   
                                <tr>
                                    <td scope="row">Current_Date</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>15</td>
                                </tr> <!-- /tr -->
                                
                                
                                
                            </tbody> <!-- /tbody -->
                            
                            
                        </table> <!-- /.table -->
                        
                        

                </div>
                <!-- /.container-fluid -->
                
                
                
                <!-- START OF: Footer container -->
                <footer id="dash_Footer" class="container-fluid pt-lg-5 d-md-block mb-0">

                        <div class="row bg-light align-items-center py-sm-3 py-md-0">
                            <div class="col-sm col-md py-2 py-sm-3 py-md-3 align-self-center justify-content-center text-center">

                                <p class="d-md-inline m-0 m-sm-2 m-0 m-md-auto"><a class="text-body mx-4 custom_Links ft_titles text-decoration-none" >Terms &amp; Conditions</a></p>
                                <p class="d-md-inline m-0 m-sm-2 m-md-auto"><a class="text-body mx-4 custom_Links ft_titles text-decoration-none" >FAQ</a></p>

                            </div><!-- -->

                            <div class="col-sm col-md py-3 py-md-3 align-self-center justify-content-center">

                                <p class="text-wrap m-auto text-center ft_titles">Copyright &copy; 2019 - <a class="text-decoration-none text-body custom_Links" href="https://www.rohandyre.co.za">Rohan Bezuidenhout</a></p>

                            </div><!-- -->

                            <div class="col"> </div> <!-- -->
                        </div><!-- END OF: .row -->


                </footer><!-- END OF: Footer -->
                
            </div> <!-- /.col -->
            
        </div> <!-- /.row -->
        
        
    </div> <!-- /.container -->
    
    
    
    <!-- jQuery Link -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
   <!-- Popper.js Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Link -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Link to own JavaScript sheets -->
    
    <script type="text/javascript" src="js/javascript.js">
    </script> <!-- /.Link to own JavaScript sheets -->
    
    
    
    <!-- Optional In-File JavaScript -->
    <script type="text/javascript">
      
        
        // Closes accordion style drop-down menu's when you click on another one
        $("#users_Btn").click(function(){

          $("#accordion_Menu_2").removeClass("show");
          $("#accordion_Menu_3").removeClass("show");

        });
        
        $("#posts_Btn").click(function(){
          
          $("#accordion_Menu_1").removeClass("show");
          $("#accordion_Menu_3").removeClass("show");
          
        });
        
        $("#stats_Btn").click(function(){
          
          $("#accordion_Menu_1").removeClass("show");
          $("#accordion_Menu_2").removeClass("show");
          
        });
        
        $("#dash_Btn").click(function(){
          
          $("#accordion_Menu_1").removeClass("show");
          $("#accordion_Menu_2").removeClass("show");
          $("#accordion_Menu_3").removeClass("show");
          
        });
        
        // Mobile optomise Sidebar nav
        if (window.matchMedia("(max-width: 750px)").matches) {

            $('.dropright').removeAttr('hidden');
            $('.accordion').prop('hidden',true);
            $('#dropdown_Header_1').prop('hidden',true);

        }

        // Fancy Searchable tables - Enabler
        
            $('#dash_Table').DataTable();
            $('.dataTables_length').addClass('bs-select');
        
      
      
    </script> <!-- END OF: Optional In-File JavaScript -->
    
    
  </body> <!-- END OF: <body> -->
  
</html> <!-- END OF: <html> -->