<?php
$password=$_POST["password"];
$username=$_POST["username"];
$conn= new mysqli("localhost","root","","database");

if($conn->connect_error){
echo "Database failed";
}

$sql= "INSERT INTO login(username,password) values('$username','$password')";

if(strlen($password)>6){
if($conn->query($sql)=== TRUE){
    echo "DATA INSERTED SUCCESSFULLY";
}

else{
    echo "Connection failed";
}

}
else{
    echo "Password is less than 6";
}

?>