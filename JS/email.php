<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
        <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>GET IN TOUCH</h3>
            <input type="text" id="name" placeholder="your name" required>
            <input type="email" id="email" placeholder="email id" required>
            <input type="num" id="phone" placeholder="phone no." required>
            <input type="text" name="subject" id="subject" placeholder="subject" required>
            Message: <br/>
            <textarea name="message" id="message" placeholder="how can we help you"required></textarea>
            <button name="esubmit" type="submit">Send</button>
        </form>
    </div>
</body>
</html>



<?php

if(isset($_POST['esubmit'])){

$to = "belimadnan111@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];
$headers =[ "MIME-Version: 1.0",
    "Content-type: text/plain;  charset=utf-8",
        "From : mohammedsohail3043@gmail.com",
        "Cc : belimadnan488@gmail.com"
        
];

$headers = implode("\r\n", $headers);

if(mail($to, $subject, $message, $headers)){

    echo "mail sent";
}
else{
    echo "mail not sent";  
}

}

?>

