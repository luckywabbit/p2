// JavaScript Document

$(document).ready(function () {
     //called when key is pressed in textbox
	$(".pwCount").keypress(function (e) {
		//if the key pressed is not a digit (or enter) then display error and don't type anything
		if (e.which !== 8 && e.which !== 0 && e.which !== 13 && (e.which < 48 || e.which > 57) ) {
			//display error message
			$(".errMsg > span").show().fadeOut(900);
			return false;
		}
	});
	
	//copy to clipboard prototype functionality - Gets Dynamic password and calls alert message.
	var pw = $(".passwordFinal").html();
	$(".copy").click(function(){
		var pw = $(".pw").html();
		alert("Out of project scope.\n\nPrototype functionality.\n\nThe dynamic password is:\n" + pw + "\n\nDoes not currently copy to clipboard.\n\n\n");
	});

	
});


