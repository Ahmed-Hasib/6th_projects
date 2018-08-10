// JavaScript Document
$(document).ready(function() {
	$(".submit").on("click",function(event){
	
		event.preventDefault();
		var semester=$(".semester").val();
		if(semester!=0)
		{
		
		
		$.ajax({
			  url:"assets/support_files/show_result.php",
			  method:"POST",
			  data:{semester:semester},
			  success: function(data){
				 $('.result_show').html(data);
				  }
			  
			
			});//ajax ends here
		
		}//if ends here
		else
		{
		  alert("Please chose a semester");	
			}
		
		});//submit ends here0/
	
    
});