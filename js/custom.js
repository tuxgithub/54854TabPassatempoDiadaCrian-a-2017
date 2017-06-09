$(document).ready( function(){

	/*$('textarea').click( function(){
		$(this).val('');
	});
	*/
	$(".regulamento").colorbox({iframe:true, innerWidth:680, innerHeight:480});
});

function getFileCV(){
			   $('.validationText > p').remove();
			   document.getElementById("upfile").click();
			 }


function subCV(obj){
	var file = obj.value;
	var fileName = file.split("\\");
	//document.getElementById("yourBtnCV").innerHTML = fileName[fileName.length-1];
	// document.myForm.submit();
	$(".ast").html('<p>upload: ' + fileName[fileName.length-1] +'</p>');
	event.preventDefault();
}

function validateForm(){
	var name=$('#nome').val();
	var email=$('#email').val();
	//var part=$('#part').val();
	//alert(nome);
	var nameSplit= name.split(" ");
	var sizeName=nameSplit.length;

	//alert(part);

	if(sizeName < 2 || name == "" ){
		//alert('pow');
		$('.errorMessageZone').html("Por favor, preencha o nome completo.");
		$('#name').focus();
		return false
	}  else {
		
		if (email =="" || !validaEmail(email)) {
			$('.errorMessageZone').html("Por favor, preencha o e-mail corretamente.");
			$('#email').focus();
			return false;

		} else {
			if( ((document.getElementById('upfile').value=='')) ) {
				        $('.errorMessageZone').html('Por favor faça o upload da foto.');
				        return false;

			} else {
				
				if( !($('#accept').is(':checked') ) ) {
					$('.errorMessageZone').html("Por favor, aceite os termos e condições.");
					$('#accept').focus();
					return false;
				} else {
					return true;
					//corre tudo bem
				}	
			}

		} 

	}
}




function validaEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}