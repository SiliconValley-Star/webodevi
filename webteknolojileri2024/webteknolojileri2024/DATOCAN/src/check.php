<?php

$email = $_POST['email'];
$password = $_POST['password'];
if($email == 'b211210385@sakarya.edu.tr' && $password == 'b211210385'){
echo "Hoşgeldin b211210385";
}else{
echo "Parola yanlış geri yönlendiriliyorsunuz...";
	
	header( "Refresh:5; url=https://platinsoft.net/B201210306/src/login.html");

}

?>
