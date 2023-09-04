<?php
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];



// DataBase Connection:


$connection = new mysqli('localhost','root','Satya@8096','aavi_projects');

if($connection->connect_error){
    die('Connection Failed : ' $connection->connect_error);
}
else{
    $submit = $connection->prepare("insert into custmer_details(name,number,email,textarea) 
    values(?,?,?,?)");
    $submit->bind_param("siss",$name,$number,$email,$textarea);
    $submit->execute();
    $submit->close();
    $connection->close();
}

?>