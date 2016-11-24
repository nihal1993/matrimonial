<?php


//create connection
$db = mysqli_connect("localhost","root","nihalj12","connection");
//var_dump($_POST);
if (isset($_POST['login_btn'])) {

    $email= $_POST['email'];
 $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo("Invalid email format");
                    }
    $password= $_POST['password'];

        $sql = "select * from users where username = $username and password =$password) ";
   $_result  = mysqli_query($db,$sql);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>login </title>
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
            height:300px;
            width:30%;
            border-radius: 5px;
            background-color: white;
            padding: 20px;
            box-shadow: 2px 2px 10px #c6e6e8;

        }
        .third{
            position:absolute;
            height:290px;
            width:70%;
            top:80px;
            left:10%;
            right:10%;


        }

        .main h2 { text-align: center;
            position:absolute;
            top:5px;
            left:37%;
            color: powderblue;
            font-family: "Times New Roman", Times, serif  ;
            font-weight:bold;
            font-size: 60px;


        }

        input[type=email], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit], select {
            width: 80%;
            background-color: powderblue;
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
            background-color: powderblue;
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
    <h2> login </h2>

    <div class="btn"><a href="signup.php"> register </a> </div>
    <div class="second">
        <div class="third">
            <form method="post" action="login.php">
                <table>
                    <tr>
                        <td><h3 style="color: lightpink" font-family="serif "> UserName:</h3> </td>
                        <td><input type="email" name="email" class="textInput" > </td>
                    </tr>



                    <tr>
                        <td><h3 style="color: lightpink" font-family="serif "> password:</h3> </td>
                        <td><input type="password" name="password2" class="textInput" >
                            <p style="color:red ">
                                <?php
                                // echo $password;
                                //echo $password2;
                                if($_result = true )
                                {
                                    echo('you are logged in');
                                }
                                else{
                                    echo('password and username are not correct');
                                }
                                ?>   </p>
                        </td>

                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="login_btn" value="login"></td>
                    </tr>
                </table>
            </form>

        </div>
    </div>


</div>

</body>
</html>