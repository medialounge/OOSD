// JavaScript Document
function checkLogin()
	{
		var wuserId = document.loginProject.userId;
		var wpassId = document.loginProject.passId;

		// val_userId(wuserId);
		// val_passId(wpassId);
		
		if (val_userId(wuserId))
			{
				if (val_passId(wpassId))
					{
						return true;
					}
				else {return false;}	
			}
		else{return false;}
	}
function checkForm()
	{
		var wuserId = document.registrationForm.userId;
		var wpassId = document.registrationForm.passId;
		var wname = document.registrationForm.name;
		var wemailf = document.registrationForm.emailf;

		// val_userId(wuserId);
		// val_passId(wpassId);
		// allLetters(wname);
		// val_email(wemailf);
		
		if (val_userId(wuserId))
			{
				if (val_passId(wpassId))
					{
						if(allLetters(wname))
							{
								if(val_email(wemailf))
									{
										return true;
									}
								else { return false;}	
							}
						else {return false;}	
					}
				else {return false;}	
			}
		else{return false;}
	}
function val_userId(wuserId)
	{
		var length_wuserId = wuserId.value.length;
		if (length_wuserId == 0)
			{
				alert('User Id should not be empty');
				wuserId.focus();
				return false;
			}
		else {
				return true;
			 }	
	}
function val_passId(wpassId)
	{
		var length_passId = wpassId.value.length;
		if(length_passId == 0)
			{
				alert('Password should not be empty');
				wpassId.focus();
				return false;
			}
		else{
				return true;
			}
	}
function allLetters(wname)
	{
	var letters = /^[A-Za-z]+$/;
	if(wname.value.match(letters))
		{
			return true;
		}
	else{
			alert('Name must have alphabet characters');
			wname.focus();
			return false;
		}
	}
function val_email(wemailf)
	{
		var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (wemailf.value.match(emailpattern))
			{
				return true;
			}
		else{
				alert('You have entered an invalid email address');
				wemailf.focus();
				return false;
			}	
	}