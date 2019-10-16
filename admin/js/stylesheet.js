// Closes accordion style drop-down menu's when you click on another one
function nav_Clear(){
    
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
    
}
