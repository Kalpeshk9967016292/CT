$(document).ready(function()
{

var id=1;
var pid=0;

$("#prv").click(function(){
        $("#id"+pid).slideDown(500);
        id--;
        pid--;
        
    });

$("#nxt").click(function(){
        $("#id"+id).slideUp(500);
        id++;
        pid++;
    });

});