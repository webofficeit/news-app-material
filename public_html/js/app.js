$(document).ready(function () {

	$(".btn-select").click(function () {
	    $(".input-file").click();
	})
	$(".img-selector").change(function(){
	    readURL(this,"#img-preview");
	});
});
function readURL(input,pr) {
    if (input.files && input.files[0]) {
    var countFiles = input.files.length;
     var imgPath = input.value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

     if (extn == "png" || extn == "jpg" || extn == "jpeg") {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(pr).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }else{
          alert("the image file is not valid please select a valid image file : png,jpg or jpeg");
      }
    }
}