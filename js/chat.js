// JavaScript Document
$(document).ready(function(){



setInterval(function(){get_chat_messages();},1000);
	
	
	
	
	$("#contact_submit").click(function(){
		
	var name=$("#name").val();
	var email=$("#email").val();
	var comment=$("#comment").val();
	
	  
	if(name=="" || email=="" || comment=="" || adv_id==""){
		return false;
		}
		
	$.post(base_url+"comments/add_comment" ,{ adv_id : adv_id , name : name , email : email , comment : comment }, function(data){



			},"json");
			$("#name").val("");
		    $("#email").val("");
		    $("#comment").val("");
		return false;
			
		
		});
		
			
		////////////////////////////////////////
		
		function get_chat_messages(){
		
        
		$.post(base_url +"comments/get_comment_ajax",{adv_id : adv_id }, function(data){
			
				$("#comment_info").html(data);
				
			});
			
			
	
	
		}
		
		/////////////////////////////////////////////
		
		///////////////////////////////////////////////
		
		
		
		///////////////////////////////////////////
	
	
		
		
		
	
		});
	
		