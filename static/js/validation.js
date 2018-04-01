function loginValidation(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var regexName = /^[A-Za-z ]{5,20}$/;
var regexPassword = /^[A-Za-z0-9!#@$%& ]{5,20}$/;
var flag = true;
if(username==""){alert("Enter username");flag=false;}
else if(password==""){alert("Enter password");flag=false;}
else if(!regexName.test(username)){alert("Invalid username");flag=false;}
else if(!regexPassword.test(password)){alert("Invalid password length");flag=false;}
if(flag){alert ("Validation successfully");
	window.location = "./home.html";
	return flag;}
else{return false;}
}

function ccValidation(){
var ccNumber = document.getElementById("ccnumber").value;
var name = document.getElementById("name").value;
var expirydate = document.getElementById("expirydate").value;
var dob = document.getElementById("dob").value;
var regexCCNumber = /^[0-9]{16}$/;
var regexName = /^[A-Za-z ]{5,20}$/;
var flag = true;
if(ccnumber==""){alert("Enter Credit Card Number");flag=false;}
else if(expirydate==""){alert("Enter Expiry Date");flag=false;}
else if(dob==""){alert("Enter Date of Birth");flag=false;}
else if(name==""){alert("Enter Name");flag=false;}
else if(!regexCCNumber.test(ccNumber)){alert("Invalid Credit Card Number");flag=false;}
else if(!regexName.test(name)){alert("Invalid Name");flag=false;}
if(flag){alert ("Payment Validation successfully");window.location = "./home.html"; return flag;}
else{return false;}
}

function registerValidation(){
var name = document.getElementById("name").value;
var dob = document.getElementById("dob").value;
var phone = document.getElementById("phone").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var confirmPassword = document.getElementById("confirmPassword").value;
var nameRegex = /^[A-Za-z ]{5,20}$/;
var phoneRegex = /^[0-9]{10}$/;
var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var flag = true;
if(name==""){alert("Enter name");flag=false;}
else if(dob==""){alert("Enter Date of Birth");flag=false;}
else if(phone==""){alert("Enter Phone Number");flag=false;}
else if(email==""){alert("Enter email");flag=false;}
else if(password==""){alert("Enter password");flag=false;}
else if(confirmPassword==""){alert("Enter Confirm Password Field");flag=false;}
else if(!nameRegex.test(name)){alert("Invalid Name");flag=false;}
else if(!phoneRegex.test(phone)){alert("Invalid Phone Number");flag=false;}
else if(!emailRegex.test(email)){alert("Invalid email");flag=false;}
else if(password != confirmPassword){alert("Passwords donot match");flag=false;}
if(flag){alert ("Validation successfully");window.location = "./home.html"; return flag;}
else{return false;}
}
