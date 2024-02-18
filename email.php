<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo  $_SERVER['PHP_SELF'];  ?>" method="post">
        Email <input type="email" name="email"> <br> <br>
        Subject <input type="text" name="subject"><br> <br>
        Message <br>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" name="submit">
    </form>
    
</body>

</html>

<?php
// email
if(isset($_POST['submit'])){
    $to ="sithub@gmail.com"; //sender
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From : $from";

    // method
    mail($to , $subject , $message , $headers);
    echo "Mail Sent .";
}
// If the web application is built with PHP, the mail() function is used to send email from the script using PHP. But the PHP mail() function will not work in localhost

?>