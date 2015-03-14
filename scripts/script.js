	// for the image slide show
	
	$(function() {
            // create the image rotator
    setInterval("rotateImages()", 2000);
        });

    function rotateImages() {
        var oCurPhoto = $('#photoShow div.current');
        var oNxtPhoto = oCurPhoto.next();
        if (oNxtPhoto.length == 0)
            oNxtPhoto = $('#photoShow div:first');

			oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000, 
				function() {
                    oCurPhoto.removeClass('previous');
                });
	

		
// validation de l'address email

	function validateMail(){
		var x=document.getElementById('email');
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos < 1 || dotpos < atpos+2 || dotpos+2 >= x.length){
		  alert("Not a valid e-mail address");
		  x.focus();
		  return false;
		  }
	}