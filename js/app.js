$(document).ready(function(){


    $(".nav-link").click(function(){
       $(".nav-link.active").removeClass("active")
       $(this).addClass("active");
       pageToDisplay=$(this).attr("data-link");
      
       $(".dynamicArea").load(pageToDisplay)
    })
    // defaulthomepagw
    $(".dynamicArea").load("home.php")
    // defaulthomepagw
})