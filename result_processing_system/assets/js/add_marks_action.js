// JavaScript Document
$(document).ready(function () {
    var i=0;
    $(".add_mark_btn").one("click",function () {
	i=i+1;
	console.log("haha");
	    $(this).attr("Disabled","disabled");

        $(".dialog_box").css("display","block");

        $(".submi").click(function(){
            
          
            alert(onclick);
			$(".add_mark_btn").off('click')
			// $(".submi").css("display","none");
			
        });


    });

});
