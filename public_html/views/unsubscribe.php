<?php

    require_once '../../resources/config/MysqliDb.php'; //Allow us to connect to the database

    $success = false; /*Set variables to false to begin*/
    $error = false; /*Set variables to false to begin*/

    if(isset($_REQUEST['email'])){
        $mysqli = new mysqli ('localhost', '****', '****', '****');
        $db = new MysqliDb ($mysqli);
        $email = mysqli_real_escape_string($mysqli, $_REQUEST['email']); //Sanitize input
        $db->where('email', $email);
        if($db->delete('****')){
            $success = true; //Set success to true if we did it
        }
        else $error = true; //If delete did not succeed, throw an error
    }

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
    <link rel="icon" type="image/gif" href="../img/favicon.gif" />    
    <link rel="icon" sizes="200x200" href="../img/ico.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-startup-image" href="../img/ico.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href="../css/milligram.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
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

        <?php if (isset($_REQUEST['email']) && $success) {
            //Successfully off the list, show verification page
        ?>

		<h2 style="color: #31B404;">You've unsubscribed successfully.</h2>
        <p>No more emails headed your way!</p>

        <?php } elseif($error && !$success) {
            //User not removed from list, show error
        ?>

        <h3 style="color: red;">Something went wrong, perhaps try a different email address?</h3>

        <?php } if(!isset($_REQUEST['email'])) {
            //This is what user sees when they first click the link to unsubscribe
        ?>

        <h3>We're sorry to see you go!</h3>

        <?php } if($error || !isset($_REQUEST['email'])) {
            //The form is below, show it again if there's an error
        ?>

        <form action="unsubscribe.php" id="contact_form" method="post" name="unsub_form">
            <label for="nameField">Email</label>
            <input name="email" placeholder="me@example.com" type="email"><br>
            <br>
            <input class="button" type="submit" value="Unsubscribe">
        </form>

        <?php } ?> <!-- PHP done executing -->

        <!-- Now we've covered all the scenarios -->
        
    </div> <!-- End container -->

</div> <!-- End wrapper -->

<!-- Begin footer -->

<p id="footer">&copy; 2016<a href="https://github.com/starbuck93">@starbuck93</a> &amp; <a href="https://github.com/gyamada619">@gyamada619</a>.   |   See our <a href="../privacy.html">privacy policy.</a>   |   <a href="../">Home</a></p>

<!-- End footer -->

</body>

</html>

<!-- Now we're done. Isn't this code pretty? -->