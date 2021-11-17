$(document).ready(()=>{
	$('main').on('change','.imgload',function(e){
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('.imgshow').attr('src', e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}
	});
	$("main").on('click','a.myAjax',function(e){
		e.preventDefault();//ngan chan link href default chay 
		// $.ajaxSetup({
		//   headers: {
		//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		//   }
		// });
		$.ajax({
			url:'/posts/myAjax',
			type: 'post',
			dataType: 'json',
			data: {a:{asa:1},b:2}
		}).done(function(res) {
			console.log(res);
			alert('ket qua tra ve');
			return ;
			
		}).fail(function( xhr, status, errorThrown ) {
			alert( "Sorry, there was a problem!" );
			console.log( "Error: " + errorThrown );
			console.log( "Status: " + status );
			console.dir( xhr );
		});
	})
	
})