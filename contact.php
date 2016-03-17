<?php
if($_POST["submit"]) {
    $recipient="corcorankt1@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $telephone=$_POST["telephone"];
    $preferred=$_POST["preferred"];

    $mailBody="Name: $name\nEmail: $mail\nPhone: $telephone\nMethod: $preferred\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Katie Corcoran - Contact</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">
        <link href="css/main.css" type="text/css" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Arapey:400,400italic' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- Header -->
        <div class="header">
            <h1>Katie Corcoran</h1>
            <ul class="nav">
                <li><a href="CorcoranPortfolio.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html" class="selected">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Form -->
        <div class="contact-me">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <?=$thankYou ?>
                    <form action="contact.php" method="post">
                        <fieldset>
                            <legend>Contact Me!</legend>
                                <label class="left">
                                    Name:
                                    <br />
                                    <input type="text" name="name" placeholder="First &amp Last Name"size="40">
                                </label>
                                <br />
                                <label class="left">
                                    Phone Number:
                                    <br />
                                    <input type="tel" pattern="[\(]\d{3}[\)]\d{3}[\-]\d{4}" name="telephone" placeholder="(555)555-5555" size="40">
                                </label>
                                <br />
                                <label class="left">
                                    Email:
                                    <br />
                                    <input type="email" name="email" placeholder="email@whatever.com" size="40">
                                </label>
                                <br />
                                <p>What is your preferred method of communication?
                                    <br />
                                    <label>
                                        <input type="radio" name="preferred" value="email" checked="checked">
                                        Email
                                    </label>
                                    <label>
                                        <input type="radio" name="preferred" value="phone">
                                        Phone
                                    </label>
                                </p>
                                <p>
                                    <label for="add-info" class="add-info">
                                        Additional information:
                                    </label>
                                    <br />
                                    <textarea rows="3" cols="40" id="add-info" name="message">
                                    </textarea>
                                </p>
                                <input id="input-button" type="submit" name="submit" value="Contact Me!">
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <img src="images/detroit.jpeg" class="img-responsive center-block" alt="downtown detroit">
                            <h2 id="detroit">I'm from Metro Detroit...</h2>
                            <button class="btn btn-primary" onclick="yourLocation()">Where are you from?</button>
                            <p id="location"></p>
                        </div>
                        <div class="col-md-2">
                </div>
                    </div>
                </div>


        <div class="footer">
        <blockquote cite="https://www.goodreads.com/quotes">
            <p><i>Be yourself; everyone else is already taken.</i> &ndash; Oscar Wilde</p>
        </blockquote>
    </div>
    <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>