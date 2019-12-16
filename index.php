<?php
session_start();
if(!empty($_POST)){
    array_push($_SESSION['data'],$_POST['name'].' - '.$_POST['phone'].' - '.$_POST['email']);  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LINE LIFF</title>
</head>
<body>
    <h1>Your Profile</h1>
    <ul>
        <li>Your OS is <p id="deviceOS"></p></li>
    </ul>

    <h1>Please enter your profil to Pre Order</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter your name"><br />
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number"><br />
        <input type="text" name="email" id="email" placeholder="Enter your email address"><br /><br />
        <input type="submit" value="Pre-Order" name="btn-po" />
    </form>

    <ul>
        <?php
        $i = 1;
            foreach($_SESSION['data'] as $dt){
            echo($i.'. '.$dt ."<br />");
            $i++;
            }
        ?>
    </ul>

    
    <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
    <script src="liff-starter.js"></script>
</body>
</html>

<?php
    if(empty($_SESSION['data'])){
        $_SESSION['data'] = array(); 
    }
?>