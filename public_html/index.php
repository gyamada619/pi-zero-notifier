<?php

    require_once '../resources/library/recaptcha/src/autoload.php'; //Load the captcha
    require_once '../resources/config/MysqliDb.php'; //Allow us to connect to the database

    $siteKey = '****'; //Captcha codes
    $secret = '****'; //Captcha codes


    $mysqli = new mysqli ('localhost', '****', '****', '****'); 
    $db = new MysqliDb ($mysqli);
    $cols = Array ("stock");
    $db->orderBy("time","desc");
    $adafruit_stock = $db->get("adafruitstock",1,$cols)[0]['stock']; //This is where we get the stock itself

    session_start(); //Starting session to preserve error code in case of error. Handler is error.php

?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="refresh" content="300">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#a30000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#a30000">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Made with <3 by gyamada619 and starbuck93.">
	<link rel="icon" type="image/gif" href="img/favicon.gif" />	
    <link rel="icon" sizes="200x200" href="img/ico.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
	<link rel="apple-touch-startup-image" href="img/ico.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href="css/milligram.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <title>Pi Zero Stock Notification</title>

    <!-- Begin Google Analytics script -->

	<script>

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-892952-18', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- End script -->

</head>

<body>

    <div id="wrap"> <!-- This is here to provide sticky footer support, see footer.css -->

        <div class="container">

            <h1><a href="/" style="color: #606c76"><img src="img/ico.png" height="40px">&nbsp; Raspberry Pi Zero Notifier</a></h1>

            	<?php if ($adafruitstock == 0): ?>

				<p>None in stock today. Subscribe to our emails to know when you can get one!</p>

				<?php else: ?>

				<a href="https://www.adafruit.com/products/2885">They're in stock; go buy one now!</a><p>You should also subscribe to our emails.</p>

				<?php endif ?>

            <form action="/" id="contact_form" method="post" name="contact_form">

                <label for="nameField">Name</label> <input name="nameField"
                placeholder="John Smith" type="text"> <label for=
                "nameField">Email</label> <input name="emailField" placeholder=
                "me@example.com" type="text"><br>
                <br>
                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>" data-size="compact normal">
                </div>
                <script src="https://www.google.com/recaptcha/api.js?hl=%3C?php%20echo%20$lang;%20?%3E" type="text/javascript"></script>
                <br>
                <input class="button" type="submit" value="Notify me">

            </form>  

        </div> <!-- End container -->

    </div> <!-- End wrapper -->

    <!-- Begin footer -->
        
    <p id="footer">&copy; 2016 <a href="https://github.com/starbuck93">@starbuck93</a> &amp; <a href="https://github.com/gyamada619">@gyamada619</a> | See our <a href="privacy.html">privacy policy.</a> | Unsubscribe <a href="views/unsubscribe.php">here.</a></p>

    <!-- End footer -->

</body>

</html>

<?php if ($siteKey === '' || $secret === ''): ?>

    <!-- Really, you should never see this, the keys should always match up -->
    <h3 style="color: red;">Fatal error! This text should never show up on the site. Like, literally never!</h3>

<?php
    
    elseif (isset($_POST['g-recaptcha-response'])):

        $mysqli = new mysqli ('localhost', '****', '****', '****');
        $db = new MysqliDb ($mysqli);
        $name = mysqli_real_escape_string($mysqli, $_POST['nameField']); //Sanitize the input
        $email = mysqli_real_escape_string($mysqli, $_POST['emailField']); //Sanitize the input
 
    // The POST data here is unfiltered because this is an example.
    // In production, *always* sanitise and validate your input'

    // If the form submission includes the "g-captcha-response" field
    // Create an instance of the service using your secret

    $recaptcha = new \ReCaptcha\ReCaptcha($secret);

    // Make the call to verify the response and also pass the user's IP address

    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    endif; 

    if ($resp->isSuccess()):

    // If the response is a success, that's it!

        $data = Array ( //Create an array for the new data
        	"email" => $email,
            "name" => $name,
            "ipaddr" => $_SERVER['REMOTE_ADDR']
        );

        $email = $db->insert ('users', $data); //Stick that fresh data in there
        header('Location: views/success.php'); //Now tell the user we're done
        else:

        // If it's not successful, then throw an error. Custom handler located at error.php

?>

<?php 

    foreach ($resp->getErrorCodes() as $code) {
         $_SESSION['error'] = $code; //Store the error code in the session
         header("Location: views/error.php"); //Kick the user to the handler page
    }

?>

<?php
        
    endif; //PHP execution end

?>

<!-- Now we're done. Isn't this code pretty? -->
