$(document).ready(function()
{	

$(".mcq").hide();
$(".tfq").hide();
$(".bfq").hide();

$(".alert").fadeOut(3000);

$(".assdiv").hide();
$(".deldiv").hide();

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

$("#assbtn").click(function(){
        $(".deldiv").slideUp(500);
        $(".assdiv").slideToggle(500);
    });

$("#dsbtn").click(function(){
        $(".assdiv").slideUp(500);
        $(".deldiv").slideToggle(500);
    });

$("#delicon").click(function(){
        $(".deldiv").slideUp(500);
        $(".assdiv").slideToggle(500);
    });


});