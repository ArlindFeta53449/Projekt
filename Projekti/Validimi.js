var name= document.getElementById("name").value;
var surname = document.getElementById("surname").value;
var username = document.getElementById("username").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var vPassword = document.getElementById("password2").value;
var button = document.getElementById("signUpButton");

var nameRegex = /^[A-Z][a-z]{2,15}/;
var surnameRegex = /^[A-Z][a-z]{2,15}/;
var usernameRegex = /^\w+[_.]?\w{2,10}/;
var email = /^\w[._-]?\w@[A-Za-z][-]?[A-Za-z]\.[A-Za-z]{2,3}/ ;
var password = /^[A-Z][a-z]+\d{3}[!_-]?{1}/;
button.addEventListener("click" ,function(event){
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var username = document.getElementsById("username").value;
    var email= document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if(name == ""){
        nameMsg.innerText='Fill name!';
        event.preventDefault();
    }
    else{
        alert("Name: " + name);
    }
    

    if(surname == ""){
        snameMsg.innerText='Fill surname!';
        event.preventDefault();
    }
    else{
        alert("Surname: " + surname);
    }
   


    if(username == ""){
        unameMsg.innerText='Fill username!';
        event.preventDefault();
    }
    else{
        alert("Username: " + username);
    }
    

    if(email == ""){
        emailMsg.innerText='Fill e-mail!';
        event.preventDefault();
    }
    else{
        alert("E-mail: " + email);
    }
    

    if(password == ""){
        passMsg.innerText='Fill password!';
        event.preventDefault();
    }
    else{
        alert("Password: " + password);
    }
    
} );
if(nameRegex.test(name) == true){
        alert("Name: " + name);
    }
    else{
        nameMsg.innerText='The name does not fit the citeria!';
        event.preventDefault();
    }
    if(snameRegex.test(surname) == true){
        alert("Surname: " + surname);
    }
    else{
        snameMsg.innerText='Surname does not fit the criteia!';
        event.preventDefault();
    }
    if(unameRegex.test(username) == true){
        alert("Username: " + username);
    }
    else{
        unameMsg.innerText='Username does not fit the criteia!';
        event.preventDefault();
    }
    if(emailRegex.test(email) == true){
        alert("E-mail: " + email);
    }
    else{
        emailMsg.innerText='E-mail does not fit the criteia!';
        event.preventDefault();
    }
    if(passRegex.test(password) == true){
        alert("Password: " + password);
    }
    else{
        passMsg.innerText='Password does not fit the criteia!';
        event.preventDefault();
    }
    if(password2 == ""){
        pass1Msg.innerText='Fill password!';
        event.preventDefault();
    }
    else{
        alter("Password: " + password)
    }
    if(password2==password){
        alter("Password" + password)
    }
    else{
        pass1Msg.innerText='Passwords do not match!';
        event.preventDefault();
    }