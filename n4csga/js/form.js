// JavaScript Document for contact page only

$(document).ready(function(){


/*setup form submit process with Ajax*/
var getFormValues = function() {
  var formData = $("#myForm").serialize();
  return formData;
};

var doAjax = function(){

	$.ajax({
		type: "POST",
		url: "../process.php",
		data: getFormValues(),
		dataType: "JSON",
		success: function(response){
			display(response)}
	});
};

var display = function(response) {
	console.log(response);
	$("#article").html("<h2>Thanks for your inquiery. Below is the information we have received. Someone will contact you shortly with answers to any questions you may have.</h2>");
	$.each(response, function(FormField, FormFieldValue){
		$("#article").append("<p>" + FormField + ": " + FormFieldValue + "</p>");
	})
};/*end doAjax*/

$("#myForm").validate({
		
  		 rules: {
     		firstName: "required",
	 		lastName: "required",
     		email: {
       			required: true,
       			email: true
     			}

   	},
   		messages: {
     		firstName: "Please specify your first name",
	 		lastName: "Please specify your last name",
     		email: {
       			required: "Please enter your email address.",
       			email: "Your email address must be in the format of name@domain.com"
     		}
		
  	},
		
	submitHandler: function() {
     doAjax();
  
   }
		
});/*end Validate*/
});/*end ready()*/