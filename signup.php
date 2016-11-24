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
           // header('location:signup.php');
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

<!DOCTYPE html>
<html>
<head>
    <title>signUp </title>
    <style>
        .main{
            position:absolute;
            height:728px;
            width:100%;
            background-color: white;
        }

        .second{
            position:absolute;
            top:150px;
            left:35%;
            right:35%;
            height:400px;
            width:30%;
            border-radius: 5px;
            background-color: white;
            padding: 20px;
            box-shadow: 2px 2px 10px pink;

        }
        .third{
            position:absolute;
            height:250px;
            width:70%;
            top:50px;
            left:15%;
            right:15%;


        }

        .main h2 { text-align: center;
            position:absolute;
            top:5px;
            left:37%;
            color: #f4809f;
            font-family: "Times New Roman", Times, serif  ;
            font-weight:bold;
            font-size: 60px;


        }

        input[type=text], select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=email], select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password], select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit], select {
            width: 60%;
            background-color: lightpink;
            color: white;
            padding: 20px 30px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
    .btn{
        position:absolute;
        left:80%;
        top:10%;
        background-color: lightpink;
        color: white;
        padding: 20px 30px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;

    }

        a:link{
            color:white;
            text-decoration:none;
        }
        /* visited link */
        a:visited {

            text-decoration:none;
            color:white;
        }

    </style>
</head>
<body>
<div class="main">
    <h2> Signup. Html </h2>

    <div class="btn"><a href="login.php"> login </a> </div>
    <div class="second">
        <div class="third">
        <form method="post" action="signup.php">
            <table>
            <tr>
                <td><h3 style="color: lightskyblue" font-family="serif "> UserName:</h3> </td>
                <td><input type="email" name="username" class="textInput" > </td>
                <?php
                if (filter_input_array([type!= email]))
                {
                    echo('this is not a correct format');
                }
                ?>
            </tr>

            <tr>

                <td><h3 style="color: lightskyblue" font-family="serif "> Password:</h3> </td>
                <td><input type="password" name="password" class="textInput" > </td>
            </tr>

            <tr>
                <td><h3 style="color: lightskyblue" font-family="serif "> password-C:</h3> </td>
                <td><input type="password" name="password2" class="textInput" >
                    <p style="color:red ">
                        <?php
                       // echo $password;
                        //echo $password2;
                        if($password != $password2)
                        {
                            echo('try again later: password is wrong');
                        }
                        else{
                            echo "/*sucessfully registered->>";
                        }
                        ?>   </p>
                </td>

            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="register_btn" value="click..Me">  </td>

            </tr>
            </table>
        </form>

        </div>
    </div>


</div>

</body>
</html>