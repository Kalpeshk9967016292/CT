$(document).ready(function()
{	

$(".mcq").hide();
$(".tfq").hide();
$(".bfq").hide();

$("#mcqbtn").click(function(){
        $(".tfq").slideUp(500);
        $(".bfq").slideUp(500);
        $(".mcq").slideToggle(500);
    });

$("#tfbtn").click(function(){
        $(".bfq").slideUp(500);
        $(".mcq").slideUp(500);
        $(".tfq").slideToggle(500);
    });

$("#brfbtn").click(function(){
        $(".mcq").slideUp(500);
        $(".tfq").slideUp(500);
        $(".bfq").slideToggle(500);
    });


});