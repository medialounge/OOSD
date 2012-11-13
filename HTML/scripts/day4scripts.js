var uschar = "_";
var linelength = 100;
function validateName ()
{
	if ( document.forms1.fname.value == "")
	{
		alert("First Name must be filled in");
		document.form1.fname.focus();
		return;
	}
};
	//Example of formal way of creating new string
var myString =  new String("Hello World");
//Example of shortcut way of creating new string
var myString = "hello World";
//Example of creating new Date
var today = new Date();



function validatePostal ()
{
	if ( document.forms1.postal.value == "")
	{
		alert("Postal Code must be filled in");
		document.form1.postal.focus();
		return;
	}
	else 
	{
		if (document.form1.postal.value.length > 7)
		{
			alert("Postal Code is too long.");
			document.form1.postal.focus();
			return;
		}
		else 
		{
			document.form1.postal.value = document.form1.postal.value.toUpperCase();
			return;
		}
	}
};