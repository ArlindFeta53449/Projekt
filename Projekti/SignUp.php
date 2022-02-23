<!DOCTYPE HTML>
<html style="display: flex;
flex-direction: column;
align-items: center;">>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            .signUpField{
                border: 2px solid #01449f ;
                border-radius: 25px;
                display: flex;
                width: 800px;
                height: 650px;
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
            <a href="index.html" class="imgL"><img src="images/Logoupdated1.png" alt="logo"   ></a>
        <form class="signUp">
            <h2>SignUp</h2><br>
            <div class="first_row">
            <input type="text" onfocus="this.value=''" value="Name" id="name" class="borders">
            <label style="color: red;" for="name" id="nameMsg"></label>
            <input type="text" onfocus="this.value=''" value="Surname" id="surname" class="borders">
            <label style="color: red;" for="surname" id="snameMsg"></label>
        </div><br>
            <input type="text" onfocus="this.value=''" value="Username" id="username" class="borders">
            <label style="color: red;" for="name" id="unameMsg"></label>
            <br>
            <input type="text" onfocus="this.value=''" value="E-mail" id="email" class="borders">
            <label style="color: red;" for="name" id="emailMsg"></label>
            <br>
            <div class="first_row">
            <input type="password" onfocus="this.value=''" value="Password"id="password" class="borders">
            <label style="color: red;" for="name" id="passMsg"></label>
            <input type="password" onfocus="this.value=''" value="Password"id="password2" class="borders">
            <label style="color: red;" for="name" id="pass1Msg"></label>
        </div>
            <br>
            <input type="submit" onclick="event" value="SignUp" id = "signUpButton">
            <br>
            <a href="LogIn.html" style="text-emphasis: none;"><p style="color:#2b81ff;">Have an account? Log In</p></a>
        </form>
    </div>
    </div>


    </body>
    <script src="Validimi.js">
    </script>
</html>