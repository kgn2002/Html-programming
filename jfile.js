function validate()
{
	const uname=document.getElementById("unameid").value;
	const email=document.getElementById("emailid").value;
	const mob=document.getElementById("mobid").value;
	const pass=document.getElementById("passid").value;
	const cpass=document.getElementById("cpassid").value;
	const emailexp=/[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{3,3}$/;
	const mobexp=/^\d{10}$/;
	if(uname==="" || pass==="" || email==="" || cpass==="" || mob==="")
	{
		alert("All fields are mandatory");
		return false;
	}
	
	else if(!emailexp.test(email))
	{
		alert("Email format is incorrect");
		return false;
	}
	else if(pass.length<8)
	{
		alert("Password be atleast 8  characters");
		return false;
	}
	
	else if(pass!==cpass)
	{
		alert("Password does not matches");
		return false;
	}
	else if(!mobexp.test(mob))
	{
		alert("Phone number format is incorrect");
		return false;
	}
	
	else{
		alert("Registration successful");
		return true;
	}

	
	
	
	
}