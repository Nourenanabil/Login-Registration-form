function validateform() {
  var x = document.forms["form"]["name"].value;
var x1 = document.forms["form"]["email"].value;
var x2 = document.forms["form"]["password"].value;
var x3 = document.forms["form"]["confirm_password"].value;


  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (x1 == "") {
    alert("EMAIL must be filled out");
    return false;
  }
  if (x2 == "") {
    alert("password must be filled out");
    return false;
  }
  if (x3 == "") {
    alert("confirm password must be filled out");
    return false;
  }
  if(x2!==x3)
  {
    alert("password should equal confirm password");
    return false;
  }



}
function validatelogin(){
 var x=document.forms["form2"]["email"].value;
 var x1=document.forms["form2"]["password"].value;

 if(x=="")
{
  alert("email must be filled out");
  return false;
}
if(x1=="")
{
  alert("password must be filled out");
  return false;
}
}
