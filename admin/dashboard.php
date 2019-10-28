<?php

    // Includes:
    // EXAMPLE: ` include "file.php"; `

    session_start();





?>
   
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

                        

                        <!-- Icon Cards -->
                        <div class="row">

                            <div class="col-12 col-md mt-0 mb-3">

                                <div class="card bg-primary">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">New Comments</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                            <div class="col-12 col-md mt-0 mb-3">

                                <div class="card bg-success">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">Categories</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                            <div class="col-12 col-md mt-0 mb-3">

                                <div class="card bg-info">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">New Users</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                            <div class="col-12 col-md mt-0 mb-3">

                                <div class="card bg-danger">

                                    <div class="card-body text-light">
                                        <h5 class="card-title">New Alerts</h5>
                                        <hr>
                                        <a href="#" class="card-link text-light">View details</a>
                                    </div> 

                                </div>

                            </div> <!-- /.col -->

                        </div> <!-- /. row -->
                        
                        <div class="table-responsive">
                            <!-- Table -->
                            <table class="table table-striped table-hover mt-3" cellspacing="0" width="100%">

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
                        </div> <!-- /. table-responsive -->
                        

                
                
                
                
                <!-- Footer - include -->
                <?php include "includes/footer.php"; ?>
                