var form_being_submitted = false; // global variable

  function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Please enter your name!");
      form.name.focus();
      return false;
    }
    if(form.contacts.value == "") {
      alert("Please enter your contact number!");
      form.contacts.focus();
      return false;
    }
    var email=document.form1.email.value;
		if(email=='')
	{
		alert('Please enter email id');
		document.form1.email.focus();
		return false;
	}
	else if(email.indexOf('@')==-1)
	{
		alert('Invalid email id check (@ or .\'s)');
		var len=document.form1.email.length;
		document.form1.email.select(0,len-1)
		document.form1.email.focus();
		return false;
	}
	else if(email.indexOf('.')==-1)
	{
		alert('Invalid email id check (@ or .\'s)');
		var len=document.form1.email.length;
		document.form1.email.select(0,len-1)
		document.form1.email.focus();
		return false;
	}
    if(form.city.value == "") {
      alert("Please enter your city!");
      form.city.focus();
      return false;
    }
    if(form.message.value == "") {
      alert("Please enter your query!");
      form.message.focus();
      return false;
    }
		var a = document.form1.contacts.value;
		if(a=="")
		{
		alert("please Enter the Contact Number");
		document.form1.contacts.focus();
		return false;
		}
		if(isNaN(a))
		{
		alert("Enter the valid Mobile Number(Like : 9566137117)");
		document.form1.contacts.focus();
		return false;
		}
    return true;
  }

