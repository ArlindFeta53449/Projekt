<?php
session_start();

include("connection.php");
include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $name =$_POST['name'];
    $surname =$_POST['surname'];
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    
        $user_id=random_num(20);
        $query = "insert into user (user_id,name,surname,username,email,password) values('$user_id','$name','$surname','$username','$email','$password')";
        mysqli_query($con,$query);
        header("Location:LogIn.php");
        die;
    
}

?>

<!DOCTYPE HTML>
<html style="display: flex;
flex-direction: column;
align-items: center;">
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            .signUpField{
                border: 2px solid #01449f ;
                border-radius: 25px;
                display: flex;
                width: 810px;
                height: 700px;
            }
            .img{
                width: 250px;
                height: auto;
                border-radius: 25px;
            }
            .signUp{
                display: flex;
                flex-direction: column;
            }
            .signUpBorder{
            display: flex;
            flex-direction: column;
            align-content: center;
            margin-left: 80px;
            }
            .borders{
            border-radius: 25px;
            border: 2px solid #2b81ff;
            padding: 20px; 
            width: 175px;
            height: 7px;
            }
            .first_row{
                display: flex;
            }
            #signUpButton{
            border-radius: 25px;
            border: 2px solid #2b81ff;
            padding: 20px; 
            height: 7px;
            background-color: #2b81ff;
            color: white;
            text-size-adjust: bold;
            }
            #username{
                width: 350px;
            }
            #email{
                width: 350px;
            }
            .imgL{
            width: 100px;
            display: flex;
            align-self: center;
            margin-top: 85px;
            margin-bottom: 20px;
            margin-right: 50px;
            }
            .imgL img{
            max-width: 100%;
        }
        h2{
            align-self: baseline;
            color:#2b81ff;
        }
        input{
            color: gray;
        }
            
        </style>
    </head>
   
    <body>
        <div class="signUpField">
            <img src="images/download.jpg" alt="Library" class="img">
         <div class="signUpBorder">
        <img src="images/Logoupdated1.png" alt="logo"  class="imgL" >
        <form class="signUp" id="form" method="POST" action="">
            <h2>SignUp</h2><br>
            <div class="first_row">
                <div class = "form-control">
            <input type="text" placeholder="Name" name = "name"id="name" class="borders">
            <label style="color: red;" for="name" id="nameMsg"></label>
            <small>Error message</small>
            </div>
            <div class = "form-control">
            <input type="text"  placeholder="Surname" name="surname"id="surname" class="borders">
            <label style="color: red;" for="surname" id="snameMsg"></label>
            <small>Error message</small>
        </div>
        </div><br>
        <div class = "form-control">
            <input type="text"  placeholder="Username" name="username"id="username" class="borders">
            <label style="color: red;" for="username" id="unameMsg"></label>
            <small>Error message</small>
        </div>
            <br>
            <div class = "form-control">
            <input type="text"  placeholder="E-mail" name="email"id="email" class="borders">
            <label style="color: red;" for="email" id="emailMsg"></label>
            <small>Error message</small>
        </div>
            <br>

            <div class="first_row">
                <div class = "form-control">
            <input type="password" placeholder="Password" name="password"id="password" class="borders">
            <label style="color: red;" for="password" id="passMsg"></label>
            <small>Error message</small>
        </div>
            <div class = "form-control">
            <input type="password" placeholder="Password" name="password2" id="password2" class="borders">
            <label style="color: red;" for="vPassword" id="pass1Msg"></label>
            <small>Error message</small>
        </div>
        </div>
            <br>
            <input type="submit" name="buttoni" placeholder="SignUp" id = "signUpButton">
            <br>
            <a href="LogIn.php" style="text-emphasis: none;"><p style="color:#2b81ff;">Have an account? Log In</p></a>
        </form>
    </div>
    </div>


    </body>
    <script src="Validimi.js">
    </script>
</html>