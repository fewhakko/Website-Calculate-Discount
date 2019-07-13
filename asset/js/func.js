function pexxrcent() {  //name,img,lore,price
	$.post( "_fewza.php?percent",{money: 	$('#money').val(),percent: $('#percent').val()},  function(data) {

			var obj = jQuery.parseJSON(data);

			if (obj.status == 'success') {
				swalalert('Success!',obj.message,'success')
			} else if (obj.status == 'error') {
				swalalert('Error!',obj.message,'error')
			}
		}
	);
}

function swalalert(title,message,type) {
	if (type == "success"){
		Swal.fire({
			title: title,
			text: message,
			type: type,
			confirmButtonColor: '#32CD32',
			confirmButtonText: '<i class="fa fa-check"></i> OK'
		   }).then((result) => {
		   if (result) {
		   }
		   })
		return;
	} else if (type == "error") {
		Swal.fire({
			title: title,
			text: message,
			type: type,
			confirmButtonColor: '#E54D40',
			confirmButtonText: '<i class="fa fa-times"></i> OK'
		   }).then((result) => {
		   if (result) {
		   }
		   })
		return;
	}
}
