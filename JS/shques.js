$(document).ready(function()
{	

$(".mcq").hide();
$(".tfq").hide();
$(".bfq").hide();
$(".cp").hide();
$(".buttons").hide();
//$(".ucp").hide();

$(".alert").fadeOut(3000);

//$(".assdiv").hide();
$(".deldiv").hide();

$("#mcqbtn").click(function(){
        $(".tfq").slideUp(500);
        $(".bfq").slideUp(500);
        $(".mcq").slideToggle(500);
        $(".buttons").show();
    });

$("#tfbtn").click(function(){
        $(".bfq").slideUp(500);
        $(".mcq").slideUp(500);
        $(".tfq").slideToggle(500);
        $(".buttons").show();
    });

$("#brfbtn").click(function(){
        $(".mcq").slideUp(500);
        $(".tfq").slideUp(500);
        $(".bfq").slideToggle(500);
        $(".buttons").show();
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

//sanswersheet MCQ
$(".mcq1").each(function(e)
{
    if (e!=0)
        $(this).hide();
});

$("#next").click(function(){
    if ($(".mcq1:visible").next().length!=0)
        $(".mcq1:visible").next().slideDown(500).prev().slideUp(200);

    return false;
});

$("#prev").click(function(){
    if ($(".mcq1:visible").prev().length!=0)
        $(".mcq1:visible").prev().slideDown(500).next().slideUp(200);
    
    return false;
});
//MCQ End

//sanswersheet TF
$(".tfq1").each(function(e)
{
    if (e!=0)
        $(this).hide();
});

$("#next").click(function(){
    if ($(".tfq1:visible").next().length!=0)
        $(".tfq1:visible").next().slideDown(500).prev().slideUp(200);

    return false;
});

$("#prev").click(function(){
    if ($(".tfq1:visible").prev().length!=0)
        $(".tfq1:visible").prev().slideDown(500).next().slideUp(200);
    
    return false;
});
//TF End

//sanswersheet BF
$(".bfq1").each(function(e)
{
    if (e!=0)
        $(this).hide();
});

$("#next").click(function(){
    if ($(".bfq1:visible").next().length!=0)
        $(".bfq1:visible").next().slideDown(500).prev().slideUp(200);

    return false;
});

$("#prev").click(function(){
    if ($(".bfq1:visible").prev().length!=0)
        $(".bfq1:visible").prev().slideDown(500).next().slideUp(200);
    
    return false;
});
//TF End

});