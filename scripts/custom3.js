$(document).ready(function(){

	var warningText = $("#Warning");
	var names = $("#name");
	var email = $("#email");
	var answer = $("#human");
	warningText.css({ 'color': 'red', 'font-size': '110%' });

	$('#submit').click(function (event) {

			if(names.val().length < 4){
				warningText.html("Ange för och efternamn");
				event.preventDefault();
				return;
			}

			if((email.val().indexOf('@') > -1) == false)
			{
				warningText.html("Du måste ange en mejladress");
				event.preventDefault();
				return;
			}

			if(answer.val() != 5){
				warningText.html("Du har svarat fel på säkerhetsfrågan");
				event.preventDefault();
				return;
			}

			if ($("#myTextArea").val().length < 1) {
    			warningText.html("Du måste ange ett meddelande");
				event.preventDefault();
				return;
			}
			    swal("", "", "success");
	});
});