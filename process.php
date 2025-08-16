<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="expo";
$conn =new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error() .')'
    . mysqli_connect_error());
}
else{
    $sql= "INSERT INTO user('name','email','mobile','password') values ('$username','$email','$mobile','$password')";
}
if(isset($_POST['Register']))
{
$name=$_POST('name');
$email=$_POST('email');
$number=$_POST('number');
$password=$_POST('password');
if(mysqli_num_rows(mysqli_query($conn,"select *from 'user' where 'number'='$number' and 'password'='$password' "))>0)
{
    echo "<script>alert('already you are already registered');</script>";
}
else{
    $Register=$conn->prepare("INSERT INTO form ('name','email','mobile','password') values (?,?,?,?)");
    $Register->bind_param("ssis",$name,$email,$mobile,$password);
}
if($conn->query($sql))
{
    echo '<h1> Registered </h1>';
}
else{
    echo '<h2> not registered</h2>';}
}
?>
