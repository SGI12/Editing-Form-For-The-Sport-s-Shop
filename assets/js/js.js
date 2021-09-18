

$(document).ready(function(){
	let validateEmptyMessage = 'Поле не должно быть пустым';
	$('#main_form').validate({
		rules:{
			landing_name: {
				required: true
			},
			landing_phone:{
				required: true
			},
			landing_email:{
				required: true,
				email: true
			},
			landing_city:{
				required: true
			},
			landing_address:{
				required: false
			}
		},
		messages:{
			landing_name: {
				required: validateEmptyMessage
			},
			landing_phone:{
				required: validateEmptyMessage
			},
			landing_email:{
				required: validateEmptyMessage
			},
			landing_city:{
				required: validateEmptyMessage
			},
		},
		errorElement: 'small',
		errorPlacement(error, element){
			error.insertAfter( element );
			error.addClass('help-block');
		},
		success(label, element){
		},
		highlight( element, errorClass, validClass ){
			$(element).closest('.form-group').addClass('has-error');
			$(element).next('small.error').addClass('help-block');
		},
		unhighlight( element, errorClass, validClass ){
			$(element).closest('.form-group').removeClass('has-error');
			$(element).next('small.error').removeClass('help-block');
		},
		submitHandler(form){
			let data = $(form).serializeArray();
			$.ajax({
				type: 'post',
				data,
				dataType: 'json',
				success(r){
					let popupWindowHead = document.querySelector(`.modal-title`);
					let popupWindowBody = document.querySelector(`.modal-body`);
					if(r.success){
						$('.modal-title').show(popupWindowHead);
						$('.modal-body').show(popupWindowHead);
						form.reset();
					}else{
						$('.modal-title').text('Ошибка');
						$('.modal-body').text('Форма не отправлена');
					}
					$('#popup_messages').modal();
				},
				error(e,b,c){
				}
			});
		}
	});
});