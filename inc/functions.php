<?php

//admin login function
function adminlog(){
if (isset($_POST['submitstatus'])) {

    if (($_POST['username']) === 'admin' &&  (($_POST['password']) === 'DCSadmin01')){
        header("location: registration.php");
    }else{
        echo 'Username or password incorrect';

        }
    }     
}


//check the user registration input against the requirements and all the errors go into errors array
function userregister(){

    if (!isset($_POST['title'])){
        $error['title'] = 'Title is incorrect';
    }else{
        $clean['title'] =   $_POST['title'];  
    }
    if (isset($_POST['firstname'])){
        $trimmed = trim($_POST['firstname']);
        if (ctype_alpha($trimmed) && strlen($trimmed) <= 35){
            $html = htmlentities($trimmed);
            $clean['firstname'] = $html;
        }else{
            $errors['firstname'] = 'First name is incorrect (Only letters, max 35 characters)';
        }
    }    
    if (isset($_POST['surname'])){
        $trimmed = trim($_POST['surname']);
        if (preg_match("/^[a-zA-Z '-]*$/", $trimmed) && (strlen($trimmed) <= 90 && strlen($trimmed) >= 2)){
            $html = htmlentities($trimmed);
            $clean['surname'] = $html;
        }else{
            $errors['surname'] = 'Surname is incorrect(Only letters, spaces or \' and - allowed, between 2 and 90 characters)';
        }
    }
    if (isset($_POST['email'])){
        $trimmed = trim($_POST['email']);
        if (filter_var($trimmed, FILTER_VALIDATE_EMAIL)){
            $html = htmlentities($trimmed);
            $clean['email'] = $html;
        }else{
            $errors['email'] = 'Email is incorrect';
        }
    }
    if (isset($_POST['user'])){
        $trimmed = trim($_POST['user']);
        if (strlen($trimmed) >= 4 && strlen($trimmed) <= 90){
            $html = htmlentities($trimmed);
            $clean['user'] = $html;
        }else{
            $errors['user'] = 'Username is incorrect (between 4 and 50 characters)';
        }
    } 
    if (isset($_POST['password'])){
        $trimmed = trim($_POST['password']);
        if (strlen($trimmed) >= 8){
            $html = htmlentities($trimmed);
            $clean['password'] = $html;
        }else{
            $errors['password'] = 'Password is incorrect (Minimum 8 characters long)';
        }
    } 
   

    
     
}



?>