<?php require_once("ThankYouMessage.php"); ?>
<?php require_once("header.php"); ?>


  <h1>Get Response</h1>

  Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<h2> <?php ThankYouMessage(); ?> </h2>

  <a class"btn btn-primary" href="page2.html" role="button">Page 2</a>
<?php require_once("footer.php"); ?>
  
