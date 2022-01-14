<?php 

//mysql_connect("localhost", "root", "") or die (mysql_error());
//mysql_select_db("nameofdb") or die (mysql_error());

    

    $uc = 0; $lc = 0; $num = 0; $other = 0;

    for ($i = 0, $j = strlen($pass); $i < $j; $i++) {
        $c = substr($pass, $i,1);
        if(preg_match('/^[[:upper:]]$/',$c)) {
            $uc++;
            } 
        elseif (preg_match('/^[[:lower:]]$/',$c)) {
            $lc++;
            } 
        elseif (preg_match('/^[[:digit:]]$/',$c)) {
            $num++;
            } 
        else {
            $other++;
            }
    }
    if($other > 0){
        echo 'Password can only contain uppercase letters, lowercase letters or numbers.';
    }


    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $register = $_POST['register'];

    $usernamelen = strlen($username);
    $passwordlen = strlen($password);

    if(isset($register)){
        if ($passwordlen < 8)
        {
            echo '<script type="text/javascript">';
            echo 'alert(Invalid Password. Password must be at least 8 characters)';
            echo '</script>';
        }
        if ($passwordlen > 30)
        {
            echo '<script type="text/javascript">';
            echo 'alert(Invalid Password. Password cannot be greater than 30 characters)';
            echo '</script>';
        }


    }

    

    $password = new Password();
    $password->setMaxLength(3);
    $password->validatePassword('password');

    $password = new Password(array(
        'minLength'      => 8,
        'maxLength'      => 30,
        'minNumbers'     => 0,       
        'minLetters'     => 0,
        'minLowerCase'   => 0,
        'minUpperCase'   => 0,
        'minSymbols'     => 0,
        'maxSymbols'     => 0,

    ));


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify($password, $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }

    if (($failed_login_count >= $bad_login_limit) and (time() - $first_failed_login < $lockout_time)) {
        echo "you are locked out."; exit;
    } else {
        echo "logged in"; exit;
    }


    


?>


