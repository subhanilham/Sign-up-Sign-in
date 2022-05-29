<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SIGN UP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="login-form-wrap">
  <h2>Sign Up</h2>
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
    <input type="submit" id="login" value="Sign Up" name="submit">
    </p>
        <?php
            if(isset($_POST['submit'])){
                $file = 'mailpass.txt';
                $userName = $_POST['username'];
                $mail = $_POST['mail'];
                $password = $_POST['pass'];
                $sum = $userName . ' ' . $mail . ' ' . $password .PHP_EOL;
                if($mail != '' && $password != ''){
                    file_put_contents($file , $sum , FILE_APPEND);
                }
            }
        ?>
    </form>
  <div id="create-account-wrap">
    <p>Already have an account? <a href="signIn.php">Log in</a><p>
  </div>
</div>

</body>
</html>
