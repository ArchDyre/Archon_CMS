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

</nav> <!-- /.nav -->