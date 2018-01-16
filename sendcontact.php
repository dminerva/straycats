<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apply</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="content">
        <?php
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

        //PHPMailer
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = 2;  
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;  
            $mail->Username = 'straycatstribe@gmail.com'; 
            $mail->Password = 'Straycats1';  
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //Recipients
            $mail->setFrom('send@send.com');
            $mail->addAddress('straycatstribe@gmail.com');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Message';
            $mail->Body = '<b>Email address</b><br>'.$email.'<br><br>'.
                            '<b>Message</b><br>'.$message;

            $mail->send();
            echo '<h1>Message sent<h1>';
        } catch(Exception $e) {
            echo '<h1>Message not sent. Mailer Error: ', $mail->ErrorInfo . '<h1>';
        }
        ?>
        <p><a href="index.php">Go back</a></p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>