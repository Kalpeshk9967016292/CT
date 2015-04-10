$(document).ready(function()
{	

$(".mcq").hide();
$(".tfq").hide();
$(".bfq").hide();
$(".cp").hide();
//$(".ucp").hide();

$(".alert").fadeOut(3000);

//$(".assdiv").hide();
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

$("#cpbtn").click(function(){
        $(".ucp").slideUp(500);
        $(".cp").slideToggle(500);
    });

$("#ucpbtn").click(function(){
        $(".cp").slideUp(500);
        $(".ucp").slideToggle(500);
    });

//sanswersheet
$(".mcqq div").each(function(e)
{
    if (e!=0)
        $(this).hide();
});

$("#next").click(function(){
    if ($(".mcqq div:visible").next().length!=0)
        $(".mcqq div:visible").next().slideDown(500).prev().slideUp(200);

    return false;
});

$("#prev").click(function(){
    if ($(".mcqq div:visible").prev().length!=0)
        $(".mcqq div:visible").prev().slideDown(500).next().slideUp(200);
    
    return false;
});

});