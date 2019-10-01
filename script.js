// Javascript simple form validation
// function to validate
function Validate() {
	var x=document.forms["search_bar"]["source"].value;
	if(x==""){
		alert("Please enter the source city");
		return false;
	}
	var y=document.forms["search_bar"]["destination"].value;
	if(y==""){
		alert("Please enter the destination city");
		return false;
	}
	var z=document.forms["search_bar"]["dated"].value;
	if(z==""|| z>Date())
		{
			alert("Please enter valid Date of travel");
		}
}
function Check_Form()
{
	var x=document.forms["dbdata"]["name"].value;
	if(x==""){
		alert("Name is Mandatory");
	}
	var y=document.forms["dbdata"]["enroll_no"].value;
	if(y=="" || y<130000 || y>180000)
	{
		alert("enter proper enroll_no");
	}
	var z==document.forms["dbdata"]["phone_no"].value{
		if(z==""||z>999999999||z<555555555){
			alert("enter proper phone no.");
		}
	var a=document.forms["dbdata"]["source"].value;
	if(a==""){
		alert("Please enter the source city");
		return false;
	}
	var b=document.forms["dbdata"]["destination"].value;
	if(b==""){
		alert("Please enter the destination city");
		return false;
	}
	var c=document.forms["dbdata"]["dated"].value;
	if(c=="")
		{
			alert("Please enter valid Date of travel");
		}
}
