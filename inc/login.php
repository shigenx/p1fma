<?php
//login function, asks for username and password. redisplays form if entries are incorrect
$self = htmlentities($_SERVER['PHP_SELF']);
?>

<form action="<?php echo "$self" ?>" method="post">
    <div>
        <label for="user">User Name</label>
        <input type="text" name="username" id="user"/>
    </div>
    <div>
        <label for="pass">Password</label>
        <input type="password" name="password" id="pass"/>
    </div>
    <div>            
        <input type="submit" name="submitstatus" value="Submit" />
    </div>
</form>    