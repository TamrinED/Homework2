<?php require_once("header.php"); ?>


  <h1>Post Response</h1>
<h2><?php require_once("ThankYouMessage.php"); ?></h2>
  Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>


  
  <a class"btn btn-primary" href="page2.html" role="button">Page 2</a>
<?php require_once("footer.php"); ?>
  

