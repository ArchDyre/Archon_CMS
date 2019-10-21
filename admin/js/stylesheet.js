// Closes accordion style drop-down menu's when you click on another one
function nav_Clear(){
    
    $("#dash_Btn").click(function(){

        $("#accordion_Menu_01").removeClass("show");
        $("#accordion_Menu_04").removeClass("show");

    });
    
    $("#posts_Btn").click(function(){

        $("#accordion_Menu_04").removeClass("show");

    });
    
    $("#cat_Btn").click(function(){

        $("#accordion_Menu_01").removeClass("show");
        $("#accordion_Menu_04").removeClass("show");

    });
    
    $("#comments_Btn").click(function(){

        $("#accordion_Menu_01").removeClass("show");
        $("#accordion_Menu_04").removeClass("show");

    });
    
    $("#users_Btn").click(function(){

        $("#accordion_Menu_01").removeClass("show");

    });$
    
    ("#profile_Btn").click(function(){

        $("#accordion_Menu_01").removeClass("show");
        $("#accordion_Menu_04").removeClass("show");

    });

    /*$("#stats_Btn").click(function(){

        // insert code here

    });*/

    

    // Mobile optomise Sidebar nav
    if (window.matchMedia("(max-width: 750px)").matches) {

        $('.dropright').removeAttr('hidden');
        $('.accordion').prop('hidden',true);
        /*$('#dropdown_Header_01').prop('hidden',true);
        $('#dropdown_Header_03').prop('hidden',true);*/

    }
    
}
