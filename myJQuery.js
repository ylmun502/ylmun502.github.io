$(document).ready(function() {
	$("#homeAccordion").accordion();
	$("#datePicker").datepicker();
	$("input[type='text'][name='addAge']").change(function() {
		if(isNaN($(this).val()))
			alert("Error! Not a number!");
		else if($(this).val() == "")
			alert("Error! Empty string!")
		else if(parseInt($(this).val()) < 1)
			alert("Error! The input field must be at least 1.");
		else {
			var sum = Math.ceil(16 * Math.log(parseInt($(this).val()))) + 31;
			alert("In human years, your dog is " + sum + " years old.");
		}
	});
	$("#numDays").keyup(function() {
		var total = parseInt($("#numMeals").val()) * parseInt($("#numCalories").val()) * parseInt($("#numDays").val());
		$("input[type='text'][name='total']").val(total);
	});
});	