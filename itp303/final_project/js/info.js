$(document).ready(function(){
    $(".resource-info").css("display", "none");
    $(".resource-title").on("click", function() {
        $(this).next().slideToggle(750);
    });
});