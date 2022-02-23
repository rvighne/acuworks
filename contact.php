<?php
/*
if (isset($_POST['contact'])) {
$conn = mysql_connect("localhost", "ayuyog5_saritav", "------------") or die("ERROR! Could not connect to database!");
mysql_select_db("ayuyog5_acuworks", $conn) or die("ERROR! Could not select database!");
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];
$message   = $_POST['message'];
mysql_query("INSERT INTO contact VALUES ('$firstname', '$lastname', '$email', '$message')") or die("ERROR! Could not record entries!");
mail("svighne@acuworks-ca.com", "AcuWorks: New Contact Entry", "<h1>New Contact Entry</h1><p>New contact form entry from $firstname $lastname (<a href='$email'>$email</a>):</p><p>$message</p>", "From:<a href='$email'>$email</a>\r\n");
mysql_close($conn);
header("Location: contact.php?status=Sent!");
}
else {
*/
$_REQUEST['page'] = "\"contact\"";
@require "template.php";
/*
}
*/
?>
