<?
$conn = mysql_connect("localhost", "ayuyog5_saritav", "------------") or die("ERROR! Could not connect to database!");
mysql_select_db("ayuyog5_acuworks", $conn) or die("ERROR! Could not select database!");
$page = $_REQUEST['page'];
$pages = mysql_query("SELECT * FROM pages WHERE page=$page") or die("ERROR! No such page!");
$data = mysql_fetch_array($pages);
$title =   $data['title'];
$content = $data['content'];
//require "statistics.php";
mysql_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>AcuWorks Therapeutics - <?php echo $title ?></title>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="styles/style.css" />
</head>
<body>
<header>
<a href="index.php" title="Home"><img src="images/logo.png" id="logo" /></a>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="testimonials.php">Testimonials</a></li>
<li><a href="acupuncture.php">Acupuncture</a></li>
<li><a href="ayurveda.php">Ayurveda</a></li>
<li><a href="articles.php">Media</a></li>
<li><a href="resources.php">Resources</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>

<select onchange="window.location = this.options[this.selectedIndex].value;" >
<option value="index.php">Home</option>
<option value="about.php">About</option>
<option value="testimonials.php">Testimonials</option>
<option value="acupuncture.php">Acupuncture</option>
<option value="ayurveda.php">Ayurveda</option>
<option value="articles.php">Media</option>
<option value="resources.php">Resources</option>
<option value="contact.php">Contact</option>
</select>
</nav>
</header>
<br clear="all" />
<br clear="all" />
<br clear="all" />
<br clear="all" />
<br clear="all" />
<br clear="all" />
<section id="content">
<?php /*if (isset($_GET['status'])) { echo "<section id='status'>" . $_GET['status'] . "</section>"; }*/ ?>
<?php echo $content; ?>
</section>
<br clear="all" />
<br clear="all" />
<br clear="all" />
<br clear="all" />
<br clear="all" />
<footer>
858.381.0ACU (858.381.0228) <a href="mailto:svighne@acuworks-ca.com">svighne@acuworks-ca.com</a>
<table id="addresses">
<tr>
<td align="center" style="border-right: thin solid lightgray;"><address onclick="window.open('https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=2045+San+Elijo+Ave,+Cardiff,+CA&aq=0&oq=2045&sll=37.269174,-119.306607&sspn=10.920926,21.643066&t=m&ie=UTF8&hq=&hnear=2045+San+Elijo+Ave,+Cardiff,+California+92007&ll=33.022554,-117.282658&spn=0.034543,0.054932&z=14&iwloc=A&output=embed', 'map', 'width=640,height=480')">2045 San Elijo Avenue<br />Cardiff Town Center (upstairs)<br />Cardiff-by-the-Sea, CA 92007</address></td>
</tr>
</table>
</footer>
</body>
</html>