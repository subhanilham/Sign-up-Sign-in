<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SIGN IN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="login-form-wrap">
  <h2>Log In</h2>
  <form autocomplete="off" method="POST" id="login-form">

    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="email" id="email" name="mail" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="pass" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Log in" name="submit">
    </p>
        <?php
            $numOfTrue = 0;
            $accessAccepted = false;
            if(isset($_POST['submit'])){
                $userName = $_POST['username'];
                $mail = $_POST['mail'];
                $password = $_POST['pass'];
                $info = $userName . ' ' . $mail . ' ' . $password;
                $num = strlen($info);
                $file = file('mailpass.txt');
                $wCount = count($file);
                for($a = 0; $a < $wCount; $a++){
                    $infoFromFile = file('mailpass.txt')[$a];
                    for($x=0;$x<$num;$x++){
                        if(substr($info,$x,1) == substr($infoFromFile,$x,1)){
                            $numOfTrue++;
                        }
                    }
                    if($num == $numOfTrue){
                    $accessAccepted = true;
                    $a = $wCount;
                    }
                    else{
                        $numOfTrue = 0;
                    }
                }

                if($accessAccepted){
                }
                else{
                    echo 'YOUR INFOS ARE WRONG';
                }
            }


        ?>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="signUp.php">Create Account</a><p>
  </div>
</div>
<script>
    if('<?php echo $accessAccepted ?>' == true){
        window.open("final.php", "_self");
        
    }
</script>
</body>
</html>
