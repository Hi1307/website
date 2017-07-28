<!doctype html>
<html>
<head>
<style>
p {
    font-family: 'Product Sans', Arial, sans-serif;
    font-size: 20px;
}
</style>
<title>Welcome Page</title>
<body>
<SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password','Wrong Password');
while (testV < 3) {
if (!pass1) 
history.go(-1);
if (pass1.toLowerCase() == "restricted") {
alert('This is sensitive. Please exercise discretion when sharing.');
window.open('http://hi1307.netai.net/welcome/aoejfnsioafhbh');
break;
} 
testV+=1;
var pass1 = 
prompt('WRONG PASSWORD','Password');
}
if (pass1.toLowerCase()!="password" & testV ==3) 
history.go(-1);
return " ";
} 
</SCRIPT>
<CENTER>
<FORM>
<input type="button" value="Click here if you know the password" onClick="passWord()">
</FORM>
</CENTER>
</body></html>