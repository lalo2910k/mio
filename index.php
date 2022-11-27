<?php
function randomText($length){
    $key="";
    $pattern= "1234567890ashdbdsdhjfjrhrotire";
    for($i=0; $i<$length; $i++){
        $key.=$pattern[rand(0,35)];

    }
    return $key;
}

$captcha = randomText(6);
?>
<head>
    <style>
        span{
            font-size: 20px;
            color:blue;
            font-weight:bold;
        }
        </style>
        </heade>
        <form action="page1.php" method="post" style="border: 2px dotted blue; text-aling:center; width: 400px;">
        <p>
            username:
            <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username "];} ?>">
    </p>
    <p>
            password:
            <input name="password" type="text" value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password "];} ?>">
    </p>
    <p>ingrese el texto: <span> <?php $captcaht?> </span> <br>
    <input name="respuesta" type="text" size="6">
    <input type="hidden" name="captcha" value="<?php echo $captcha?>">      
    </p>
    <p>
        <input type="checkbox" name="remember" /> recordar usuario y password
    </p>
    <p>
        <input type="submit" value="login"> </p>
    </form>
