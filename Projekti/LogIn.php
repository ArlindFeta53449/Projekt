<?php
session_start();
 include("connection.php");
include("function.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email =$_POST['email'];
    $password =$_POST['password'];
    
    if(!empty($email)&& !empty($password) ){
        $user_id=random_num(20);
        $query = "select * into users where email =' $user_name' limit 1";
        $result = mysqli_query($con,$query);
        if($result){ 
        if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $password)
        {
        $_SESSION['user_id'] = $user_data['user_id'];
       header ("Location: index.php");
        die;
}
    } }
    
        }
        else{
            echo "Email ose password eshte gabim";
        }
       }
?>

<!DOCTYPE html>
<html style="display: flex;
flex-direction: column;
align-items: center;">
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
    <style>
        .formulari{
            display: flex;
            flex-direction: column;
            width: 250px;
        }
        form{
            display: flex;
            justify-content: center;
            width: 500px;
            height: 450px;
        }
        
        .logIn{
            border-radius: 25px;
            border: 2px solid #2b81ff;
            width: 800px;
            height: 600px;
            margin: 100px;
            display: flex;
        }
        .imgA{
            width: 500px;
            border-radius: 25px;
        }
        #email{
        border-radius: 25px;
        border: 2px solid #2b81ff;
        padding: 20px; 
        width: 200px;
        height: 15px;  
        }
        #password{
        border-radius: 25px;
        border: 2px solid #2b81ff;
        padding: 20px; 
        width: 200px;
        height: 15px;
        }
        #logInButton{
        border-radius: 25px;
        border: 2px solid #2b81ff;
        background-color: #2b81ff;
        color: white;
        padding: 20px; 
        width: 200px;
        height: 15px;
        }
        .imgL{
        width: 100px;
        display: flex;
        align-self: center;
        margin-top: 85px;
        margin-bottom: 20px;
        margin-right: 50px;
        
        }
        .right-side{
        display: flex;
        justify-content: center;
        flex-direction: column;
        }
        .imgL img{
            max-width: 100%;
        }
        h2{
            align-self: baseline;
            color:#2b81ff;
        }


        
    </style>
    <body>
        <div class="logIn">
        <img src="images/download.jpg" alt="bookshelf" class="imgA">
        <div class="right-side">
         
           <img src="images/Logoupdated1.png" alt="logo" class="imgL">
           
        <form>
            
                <div class = "formulari">
                    <h2>LogIn</h2><br>
                Email:<br><input type="email" id="email">
                <br>
                Password:<br><input type = "password" id = "password"> 
                <br>
                <input type="submit" value="LogIn" id = "logInButton">
                <br>
                <a href="SignUp.php"><p style="color:#2b81ff;">I do not have an account/SignUp</p></a>
            </div> </form></div>
        </div>
    </body>


</html>