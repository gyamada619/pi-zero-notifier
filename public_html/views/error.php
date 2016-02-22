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

    <div class="container">

	    <h2 style="color: red; padding-top: 6%">Something went wrong</h2> <!-- Alert user something is wrong -->

	    <p>The following error was returned: 
	    	<?php session_start(); echo '<code>'.$_SESSION['error'].'</code>'; unset($_SESSION['error']); ?>
	    </p> <!-- Show them the exact error -->

	    <p><strong>Note:</strong> Error code <code>missing-input-response</code> likely means you just didn't check the reCAPTCHA box. Give it another shot!</p> <!-- Hints -->

	    <p><a href="../index.php" class="button">Okay, one more shot</a></p> <!-- Back home -->  

    </div>

</body>

</html>