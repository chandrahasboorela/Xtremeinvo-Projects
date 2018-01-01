$(document).ready(function(){
    $(".passwordbox").focusin(function(){
        $(".passwordbox").css({"opacity":"1"});
        event.preventDefault();
    });
    $(".passwordbox").blur(function(){
        $(".passwordbox").css({"opacity":"0"});
        event.preventDefault();
    });
});
function error(){
    $("body").css("background-blend-mode","differnece");
}