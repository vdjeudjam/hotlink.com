// in charge of the language option in form   

	/*function change_lang(){
		len = document.form1.lang.length;
		for (i = 0; i < len; i++){
			if (document.form1.lang[i].selected)
				lang = document.form1.lang[i].text;
			}
		window.location="form.php?cont=change_lang&lang=" + lang;
						}
    
//ceci doit gerer les deconnections du site par les utilisateurs
	
    function openLogout() {
    	if (window.name != 'hotspot_status') return true;
            open('http://HotLink.com/logout.php', 'hotspot_logout', 'toolbar=0,location=0,directories=0,status=0,menubars=0,resizable=1,width=280,height=250');
    	window.close();
    	return false;
        }

//celui ci quand a lui gere les reconnections et connections

	function openLogin() {
    	if (window.name != 'hotspot_logout') return true;
    	open('http://HotLink.com/login.php', '_blank', '');
    	window.close();
    	return false;
        }

// pour le registration form
		
focusField("username");
function focusField(name) {
  for(var i = 0; i < document.forms.length; ++i) {
    var obj = document.forms[i].elements[name];
    if (obj) {
      if (obj.length) { obj = obj[0]; }
      if (obj.focus) { obj.focus(); }
    }
  }
} */

	// Verify username - 6–10 chars, uc, lc, and underscore only.
	function verify_username (strng) {
		var error = "";
		if (strng == "") {
			error = "You didn't enter a username.\n";
			}
			
		var illegalChars = /\W/; 			// allow letters, numbers, and underscores
		if ((strng.length >= 6) || (strng.length < 15)) {
			error = "The username is the wrong length. It must be 6-10 characters.\n";
			}
		else if (illegalChars.test(strng)) {
			error = "The username contains illegal characters.\n";
			}
		return error;
	}

// Verify password - between 6–8 chars, uppercase, lowercase, and numeral
	/*function verify_password (strng, strng) {
		var error1 = "";
		
		if (strng == "") {
			error = "You didn't enter a password.\n";
			}
		var illegalChars = /[\W_]/; // allow only letters and numbers

		if ((strng.length <= 6) || (strng.length >= 20)) {
			error = "The password is the wrong length. It must be 6–8 characters.\n";
			}
		else if (illegalChars.test(strng)) {
			error = "The password contains illegal characters.\n";
			}
		else if{
			if( && strng.match(password2)) )
				error = ""			//rediredct to field
			}	
		return error;
		}*/
		
	function verifyPassword (strng, strng){
		var x = document.forms["myform"]["password1"].value;
		var y = document.forms["myform"]["password2"].value;
		
		if (x==null || x=="" || y==null || y=="")
				alert("enter a password please");
		else if ( x != y)
				alert("retype your password");
		return false;
	}

	// Verify email
	function verify_email (strng) {
	var error="";
	if (strng == "") {
		error = "You didn't enter an email address.\n";
		}
	var emailFilter=/^.+@.+\..{2,3}$/;
	if (!(emailFilter.test(strng))) {
		error = "Please enter a valid email address.\n";
		}
	else {

	//test email for illegal characters
	var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/;
	if (strng.match(illegalChars)) {
		error = "The email address contains illegal characters.\n";
		}
	}
	return error;
	}	
	
	//checking passwords
	/*function verify_password(strng) {
		var password = "";
		var password2 = "";
		var error = "";
	}*/
	
	// Verify phone number - strip out delimiters and verify for 10 digits
	function verify_phone (strng) {
		var error = "";
		
		if (strng == "") {
			error = "You didn't enter a phone number.\n";
			}
		
		//strip out acceptable non-numeric characters
		var stripped = strng.replace(/[\(\)\.\-\ ]/g, '');
		
		if (isNaN(parseInt(stripped))) {
			error = "The phone number contains illegal characters.";
			}
		if (!(stripped.length == 8)) {
			error = "The phone number is the wrong length. Make sure you included an area code.\n";
			}
		return error;
	}