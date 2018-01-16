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
            <form action="sendapp.php" method="post">
                <div class="form-group">
                    <p>Email address</p>
                    <input type="email" class="form-control" id="email" name="email" style="width: 50%;" required>
                </div>
                <br>
                <div class="form-group">
                    <p>Link to your steam profile</p>
                    <input type="url" class="form-control" id="steam" name="steam" style="width: 50%;" required>
                </div>
                <br>
                <div class="form-group">
                    <p>Age</p>
                    <input type="number" class="form-control" id="age" name="age" min="1" max="99" style="width: 10%;" required>
                </div>
                <br>
                <div class="form-group">
                    <p>Do you have a mic and can you use discord?</p>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="Yes" required><p>Yes</p>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="No"><p>No</p>
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <p>How many hours do you have played on steam?</p>
                    <input type="number" class="form-control" id="hours" name="hours" min="1" style="width: 15%;" required>
                </div>
                <br>
                <div class="form-group">
                    <p>What do you like to do in Ark?</p>
                    <textarea class="form-control" rows="5" id="likes" name="likes" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <p>Describe you history in Ark, including previous tribes you have been with</p>
                    <textarea class="form-control" rows="5" id="history" name="history" required></textarea>
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