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
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    
    
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

                                <img class="text-light" src="/images/Capture_Modified_Transparent_New_2.png" height="50" alt="Archon CMS logo">

                            </a> <!-- -->

                        </div> <!-- --> 
                        
                    </div> <!-- /.col-8 -->
                    
                    
                    <div class="col">
                        
                        <div class="navbar-nav justify-content-end">
                    
                    
                            <button type="submit" class="btn text-light"><img src="images/mail-outline-white.png" alt="White Mail Icon" style="width: 16px; height: 16px;"><span class="pl-2">Subscribe</span></button>

                            <div class="d-flex">

                                    <button type="button" class="btn text-light dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="/images/person-solid-white.png" alt="Defaut Profile Icon" style="width: 16px; height: 16px;"></button>

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
                           
                            <a class="nav-item nav-link active font-weight-bold disabled text-light" href="#">Latest</a>
                                <span class="vertical_Line"></span>
                                <span > <hr class="m-auto border-dark"></span>
                                
                            <a class="nav-item nav-link nav_My_Color text-light" href="#">Tech</a>
                                <span class="vertical_Line"></span>
                                <span > <hr class="m-auto border-dark"></span>
                                
                            <a class="nav-item nav-link nav_My_Color text-light" href="#">Coding</a>
                                <span class="vertical_Line"></span>
                                <span > <hr class="m-auto border-dark"></span>
                                
                            <a class="nav-item nav-link text-light" href="#">Life Advice</a>
                            <span > <hr class="m-auto border-dark"></span>
                            
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
    
    <!-- START OF: Page Content -->
    <div class="container pt-3"> <!-- START OF: .container -->
        
        <div class="row">
            
            
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Search</h5>
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </span> <!-- /. -->
                    </div> <!-- /. -->
                  </div> <!-- /. -->
                </div> <!-- /. -->

                <!-- Categories Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Categories</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                       
                        <ul class="list-unstyled mb-0">
                         
                          <li>
                            <a href="#">Web Design</a>
                          </li> <!-- /. -->
                          
                          <li>
                            <a href="#">HTML</a>
                          </li> <!-- /. -->
                          
                          <li>
                            <a href="#">Freebies</a>
                          </li> <!-- /. -->
                          
                        </ul> <!-- /. -->
                        
                      </div> <!-- /. -->
                      <div class="col-lg-6">
                       
                        <ul class="list-unstyled mb-0">
                         
                          <li>
                            <a href="#">JavaScript</a>
                          </li> <!-- /. -->
                          
                          <li>
                            <a href="#">CSS</a>
                          </li> <!-- /. -->
                          
                          <li>
                            <a href="#">Tutorials</a>
                          </li> <!-- /. -->
                          
                        </ul> <!-- /. -->
                        
                      </div> <!-- /. -->
                    </div> <!-- /. -->
                  </div> <!-- /. -->
                </div> <!-- /. -->

                <!-- Side Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Side Widget</h5>
                  <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                  </div> <!-- /. -->
                </div> <!-- /. card -->

            </div> <!-- /.col sidebar_Widget_Area -->
            
          <!-- Post Content Column -->
          <div class="col-lg-8">
            
            <!-- Post Title -->
            <h1 class="mt-4">Post Title</h1>

            <!-- Post Author -->
            <p class="lead">
              by
              <a href="#">Start Bootstrap</a>
            </p> <!-- -->

            <hr>

            <!-- Date/Time -->
            <p>Posted on January 1, 2019 at 12:00 PM</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
              </footer> <!-- -->
            </blockquote> <!-- -->

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form> <!-- -->
              </div> <!-- -->
            </div> <!-- -->

            <!-- Single Comment -->
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div> <!-- -->
            </div> <!-- -->

            <!-- Comment with nested comments -->
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div> <!-- -->
                </div> <!-- -->

                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div> <!-- -->
                </div> <!-- -->

              </div> <!-- -->
            </div> <!-- -->

          </div> <!-- -->

        </div>
        <!-- /.row --> 
        
        
    </div> <!-- END OF: .container -->
    
    <!-- START OF: Footer container -->
    <footer id="main_Desktop_Footer" class="container-fluid pt-lg-5 d-md-block mb-0">
           
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
    </script> <!-- END OF: Link to own JavaScript sheets -->
    
    
    
    <!-- Optional In-File JavaScript -->
    <script type="text/javascript">
      
      
      
      
    </script> <!-- END OF: Optional In-File JavaScript -->
    
    
  </body> <!-- END OF: <body> -->
  
</html> <!-- END OF: <html> -->