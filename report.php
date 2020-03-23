<!DOCTYPE HTML>
<html>

<head>
  <title>REPORT</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">FOREST SURVEILLANCE--<span class="logo_colour">PANDORA</span></a></h1>
          <h2>LIVE ACOUSTIC SURVEILLANCE REPORT</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="report.html">Report</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="#">REPORT</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <h1>LIVE REPORT</h1>
        <p>
      		<?php
$dbhost = 'localhost';
 
$dbuser = 'test';
  
$dbpass = 'test';
  
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
  
 if(! $conn )

 {
      die('Could not connect: ' . mysqli_error());
	

   }

mysqli_select_db($conn,'new');


$sql="select * from livelog;";

$result=mysqli_query($conn,$sql);
echo "<table>";
while($row = mysqli_fetch_assoc($result))
{  
echo "<tr><td>".$row['date']."</td><td>".$row['time']."</td><td>".$row['event']."</td></tr>";  
}

echo "</table>";
		
		?>
	 </p>
      </div>
    </div>
    <div id="footer">
     <p>Copyright &copy; FOREST DEPARTMENT</p>
    </div>
  </div>
</body>
</html>
