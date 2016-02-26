// JavaScript Document
$(document).ready(function(e) {
    $('.test').submit(function(e) {
        var n=document.forms['test-form']['name'].value;
		var e=document.forms['test-form']['email'].value;
		var p=document.forms['test-form']['password'].value;
		var cp=document.forms['test-form']['confirm_password'].value;
		if(n==""||n==null ||e==""||e==null||p==""||p==null ||cp==""||cp==null){
			if(n==""||n==null){
				alert("Please enter the name");
			}
			if(e==""||e==null){
				alert("Please enter email id");
			}
			if(p==""||p==null){
				alert("Enter password");
			}
			if(cp==""||cp==null){
			 alert("Please confirm password");	
			}
			return false;
		}
		if(p!=cp){
		alert("Password and confirm password is not equal");
		//return false;
		}
		
    });
});