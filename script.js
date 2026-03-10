function validateForm()
{

let name=document.getElementById("name").value;
let phone=document.getElementById("phone").value;

if(name=="")
{
alert("Name is required");
return false;
}

if(phone=="")
{
alert("Phone number required");
return false;
}

return true;

}