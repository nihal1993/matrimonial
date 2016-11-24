<?php

    $page='Home';
    $site= 'learning';

?>



<?php
// session_start();

/* $servername = "localhost";
 $username = "root";
 $password = "nihalj12";
 $dbname = "connection";


 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully</br>";
*/

//create connection
$db = mysqli_connect("localhost","root","nihalj12","connection");
//var_dump($_POST);
if (isset($_POST['register_btn'])) {
    //session_start();
    $username= $_POST['username'];
    $name= $_POST['name'];
    $password= $_POST['password'];
    //$password2= mysql_real_escape_string($_POST['password2']);
    $password2= $_POST['password2'];


    //   $abcd = "1234";

//        echo "password: ", $password, " ", "password2: ",  $password2;

    if ($password  == $password2 )
    {
        //echo('correct password ');
        $sql = "insert into users (username,name,password) value ('$username','$name','$password') ";
        mysqli_query($db,$sql);
         header('location:sign.php');
        // echo("password is correct");
        //$password = md5($password);
        //$sql = "insert into users(username,name,password) value('$username','$name','$password') ";
        //mysqli_query($db,$sql);
        // $_SESSION['message']='you are welcome';
        //$_SESSION['username']=$username;
        //header('location:signup.php');
    }
    else   {
        //echo('sorry password is wrong');
        //$_SESSION['message']='SORRY TRY AGAIN : PASSWORD INCORRECT';
        // header('location:signup.php');

    }
}

?>



