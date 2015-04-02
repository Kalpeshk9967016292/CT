$(document).ready(function()
{	

$(".mcq").hide();
$(".tfq").hide();

$("#mcqbtn").click(function(){
        $(".tfq").slideUp(500);
        $(".mcq").slideToggle(500);
    });

$("#tfbtn").click(function(){
        $(".mcq").slideUp(500);
        $(".tfq").slideToggle(500);
    });


});