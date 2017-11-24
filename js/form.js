$( document ).ready(function() {
    console.log( "ready!" );


    $("#newAccount").on("click", function(){

            console.log("clicked");
            $(".visible").slideToggle();
    });




});