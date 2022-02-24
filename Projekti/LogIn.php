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
        #username{
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
         
           <a href="index.php" class="imgL"><img src="images/Logoupdated1.png" alt="logo"   ></a>
           
        <form>
            
                <div class = "formulari">
                    <h2>LogIn</h2><br>
                Username:<br><input type="text" id="username">
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