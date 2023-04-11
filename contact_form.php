<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
<title> Contact </title>
<div id="nav-placeholder">
</div>
<h2> Leave Me a Message </h2>
<div class="contact_form">
<form method="post" action="subscriberform.php">
<textarea name="message"></textarea>
<input type="submit">
</form>
<?php


if($_POST["message"]) {
  
  
  mail("apr65@cornell.edu", "Here is the subject line",
  
  
  $_POST["insert your message here"]. "From: an@email.address");
  
  
}


?>
</div>


<script>
$(function () {
  $("#nav-placeholder").load("nav.html");
});
</script>

</body>
<link href="professional.css" rel="stylesheet">