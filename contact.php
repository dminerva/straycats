<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Racing Sans One' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="content">
            <form action="sendcontact.php" method="post">
                <div class="form-group">
                    <p>Email address</p>
                    <input type="email" class="form-control" id="email" name="email" style="width: 25%;" required>
                </div>
                <br>
                <div class="form-group">
                    <p>Message</p>
                    <textarea class="form-control" rows="20" id="message" name="message" style="width: 800px;" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>