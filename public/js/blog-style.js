$(document).ready(()=>{
	$('.mainContent').on('change','.imgload',function(e){
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('.imgshow').attr('src', e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}
	});
})