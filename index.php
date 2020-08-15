<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
            <h4 class="sent-notification"></h4>
            <?php echo $alert; ?>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
            </form>
</body>
</html>