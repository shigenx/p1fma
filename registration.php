<?php
//registration page accessed by admin only, to register a new user
$self = htmlentities($_SERVER['PHP_SELF']);
$errors = array();
$clean = array(); 
include_once 'inc/functions.php';

if (isset($_POST['submitstatus'])){   
    userregister();
    
    if (!empty($errors)){   
        if (isset($clean['firstname'])) { 
            $firstname = htmlentities($clean['firstname']);
        } else { 
            $firstname = '';
        }
        if (isset($clean['surname'])) { 
            $surname = htmlentities($clean['surname']);
        } else { 
            $surname = '';
        }
        if (isset($clean['email'])) { 
            $email = htmlentities($clean['email']);
        } else { 
            $email = '';
        }
        if (isset($clean['user'])) { 
            $username = htmlentities($clean['user']);
        } else { 
            $username = '';
        }
        if (isset($clean['password'])) { 
            $password = htmlentities($clean['password']);
        } else { 
            $password = '';
        }
    
    if (!empty($errors)){
        echo "Your errors are:"."<br>";
        foreach ($errors as $error){
            echo $error."<br>";
    
        }    
    if(isset($_POST['submitstatus']) && empty($errors)){
        $newuser = implode(", ", $clean)."\r\n";  
        file_put_contents("registered_users.txt", $newuser, FILE_APPEND);
        echo 'User registered successfully';
    }    
    
    }
    }    
?>        
        <form action="<?php echo "$self" ?>" method="post">
            <div>
                <label for="title">First Name</label>
                <select name="title" id="title">
                <option value="no title">Choose gender</option>
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                </select>
            </div>
            <div>
                <label for="fname">First Name</label>
                <input type="text" name="firstname" value = "<?php echo  $firstname  ?>" 
                id="fname"/>
            </div>
            <div>
                <label for="sname">Surname</label>
                <input type="text" name="surname" value = "<?php if (isset($surname)){
                                                                    echo  "$surname"; 
                                                                    }?>"  
                id="sname"/>
            </div>
            <div>
                <label for="useremail">Email</label>
                <input type="text" name="email"value = "<?php if (isset($email)){
                                                                    echo  '$email'; 
                                                                    }?>"  
                id="useremail"/>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" name="user" value = "<?php if (isset($username)){
                                                                    echo  '$username'; 
                                                                    }?>"  
                id="username"/>
            </div>
            <div>
                <label for="pass">Password</label>
                <input type="text" name="password" value = "<?php if (isset($password)){
                                                                    echo  '$password'; 
                                                                    }?>" 
                id="pass"/>
            </div>
            <div>            
                <input type="submit" name="submitstatus" value="Submit" />
            </div>
        </form>

        

<?php

}
?>

