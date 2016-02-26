<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirm_password'];
if(!empty($name)&&!empty($email)&&!empty($password)&&!empty($confirmPassword)){
	if($password==$confirmPassword){
		
		}else{
			//var_dump(file_exists("C:\Users\hp user\Desktop\hello\hello.bat", $output));
			exec("java -jar hello.jar",$output);
			//exec(stat(string C:\Users\hp user\Desktop\hello\hello.bat)[,array(&$output)]);
			 //var_dump(file_exists("C:\Users\hp user\Desktop\hello\hello.jar",$output));
			// shell_exec("java -jar C:\Users\hp user\Desktop\hello\hello.jar");
			//echo exec("java -jar C:\Users\hp user\Desktop\hello\hello.jar", $output);
			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
			echo '<p style="color:red;" >Password missmatch</p>';
			}
}else{
	echo 'fill all fields';
	}
?>
