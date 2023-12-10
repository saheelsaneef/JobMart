<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Job Mart</title>
</head>
<body>
<div class="form">
       <h3 class="text"><b>Message US</b></h3>
            <form method="post" action="connect.php">
                <div class="fill">
                    <div class="fill name">
                        <input type="text" name="name" placeholder="Name"  required>
                    </div>
                    <div class="fill email">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="fill subject">
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                <div class="fill textarea">
                    <textarea cols="30" name="message" rows="10" placeholder="Message.." required></textarea>
                </div>
                <div class="button-area">
                    <button type="submit" value="send" >Send message</button>
                </div>
            </form>
        </div>
</body>
</html>