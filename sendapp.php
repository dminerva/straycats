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
        $steam = filter_var($_POST["steam"], FILTER_SANITIZE_URL);
        $age = intval($_POST["age"]);
        $comms = filter_var($_POST["optradio"], FILTER_SANITIZE_STRING);
        $hours = intval($_POST["hours"]);
        $likes = filter_var($_POST["likes"], FILTER_SANITIZE_STRING);
        $history = filter_var($_POST["history"], FILTER_SANITIZE_STRING);

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
            $mail->Subject = 'application';
            $mail->Body = '<b>Email address</b><br>'.$email.'<br><br>'.
            '<b>Link to your steam profile</b><br>'.$steam.'<br><br>'.
            '<b>Age</b><br>'.$age.'<br><br>'.
            '<b>Do you have a mic and can you use discord?</b><br>'.$comms.'<br><br>'.
            '<b>How many hours do you have played on steam?</b><br>'.$hours.'<br><br>'.
            '<b>What do you like to do in Ark?</b><br>'.$likes.'<br><br>'.
            '<b>Describe you history in Ark, including previous tribes you have been with</b><br>'.$history;

            $mail->send();
            echo '<h1>Application sent<h1>';
        } catch(Exception $e) {
            echo '<h1>Application not sent. Mailer Error: ', $mail->ErrorInfo . '<h1>';
        }
        ?>
        <a href="index.php">Go back</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>