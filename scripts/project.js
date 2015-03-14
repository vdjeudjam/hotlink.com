//in charge of the language option in form   

	/*function change_lang(){
		len = window.document.form1.lang.length;
		for (i = 0; i < len; i++){
			if (window.document.form1.lang[i].selected)
				lang = window.document.form1.lang[i].text;
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
  for(var i = 0; i < window.document.forms.length; ++i) {
    var obj = window.document.forms[i].elements[name];
    if (obj) {
      if (obj.length) { obj = obj[0]; }
      if (obj.focus) { obj.focus(); }
    }
  }
} */

	// Verify username - 6–10 chars, uc, lc, and underscore only.
	function verify_username() {
		var error = "";
		var name= window.document.getElementById("account").value;
		if (error) {
			alert("You didn't enter a username.\n");
			}
			
		var illegalChars = /\W/; 			// allow letters, numbers, and underscores
		if ((name.length >= 5) || (name.length < 20)) {
			alert("The username is the wrong length. It must be 6-10 characters.\n");
			}
		else if (illegalChars.test(name)) {
			alert("The username contains illegal characters.\n");
			}
		return error;
	}

// verify password
	
		var a = window.document.getElementById("password1");
		var b = window.document.getElementById("password2");
				
		var verifyPassword = function (){
		
		if (a==null || a=="" || b==null || b=="")
			alert("enter a password please");
		else 
		if ( a.value != b.value){
				alert("retype your password");
				a.focus();
				return false;
		}
		else return true;
	}
	function verifyPassword(){		
		var a = window.document.getElementById("password1");
		var b = window.document.getElementById("password2");

	/*	if (a.value==null || a.value=="") {
			alert("enter a password please");
			a.foucs();
			return false;
			}
			
		else
			if (b.value==null || b.value==""){
			alert("enter a password please");
			a.foucs();
			return false;
			}*/
			
		//else 
		if ( a.value != b.value){
				alert("retype your password");
				a.focus();
				return false;
			}
		else 
			return true;
	}


	// Verify email
	function verify_email() {
	var add= window.document.getElementById("email").value;
	var error="";
	if (error) {
		alert("You didn't enter an email address.\n");
		}
		
	var emailFilter=/^.+@.+\..{2,3}$/;
	if (!(emailFilter.test(add))) {
		alert("Please enter a valid email address.\n");
		}
		
	else {
		//test email for illegal characters
		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/;
		if (add.match(illegalChars)) {
			alert("The email address contains illegal characters.\n");
			}
		}
	return error;
	}	
	
	// Verify phone number - strip out delimiters and verify for 10 digits
	function verify_phone() {
		var error = "";
		var tel = doucment.getElementById("mobile").value;
		if (tel == error) {
			alert("You didn't enter a phone number.\n");
			}
		
		//strip out acceptable non-numeric characters
		var stripped = tel.replace(/[\(\)\.\-\ ]/g, '');
		
		if (isNaN(parseInt(stripped))) {
			alert("The phone number contains illegal characters.");
			}
		if (!(stripped.length == 8)) {
			alert("The phone number is the wrong length. Make sure you included an area code.\n");
			}
		return error;
	}
	
	function alertFunction(){
			alert("Welcome!, your were correctly registered");
			}