$(document).ready(function()
{	
$(".0newe").rotate({ 
   bind: 
     { 
        mouseover : function() { 
            $(this).rotate({animateTo:360})
        },
        mouseout : function() { 
            $(this).rotate({animateTo:0})
        }
     } 

    });

});