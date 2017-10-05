<?php
//echo "_POST =(" . $_POST . ")\n";
$visitor = htmlspecialchars($_POST["firstname"]) . ' ' . htmlspecialchars($_POST["lastname"]) . ' ';
//echo "visitor =(" . $visitor . ") size=" . strlen($visitor) . "\n";
$file = 'data/people.txt';
// Open the file to get existing content
$visitors = file_get_contents($file);
// Append a new person to the file
//echo "visitors =(" . $visitors . ") size=" . strlen($visitors) . "\n";

if( strlen($visitors) != 0 ) {
	$pieces = explode(' ', $visitors);
	$firstname = $pieces[sizeof($pieces) -3];
	$secname = $pieces[sizeof($pieces) -2];
	$last_visitor = $secname . ' ' . $firstname;
}
else
	$last_visitor = "none";

if ( sizeof($_POST) != 0 and strlen($visitor) > 2 ) {
	$visitors .= $visitor . "\n";
	// Write the contents back to the file
	file_put_contents($file, $visitors);
//	echo "thanx for submission";
}
//else
//	echo "hello";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>

<style>

/*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */

.logo a {
  display: block;
  width: 100%;
  height: 100%;
}
*, *:before, *:after {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
aside,
footer,
header,
hgroup,
section{
  display: block;
}
body {
  color: #404040;
  font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
  font-size: 14px;
  line-height: 1.4;
}

html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
ul {
    margin-top: 0;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.container:before,
.container:after {
  content: " ";
  /* 1 */

  display: table;
  /* 2 */

}
.container:after {
  clear: both;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.row:before,
.row:after {
  content: " ";
  /* 1 */

  display: table;
  /* 2 */

}
.row:after {
  clear: both;
}


@media (min-width: 768px) {
  .container {
    width: 750px;
  }
  .col-sm-6 {
    float: left;
  }
  .col-sm-6 {
    width: 50%;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
  }
  .col-md-6 {
    float: left;
  }
  .col-md-6 {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

a {
  color: #069;
  text-decoration: none;
}
a:hover {
  color: #EA0011;
  text-decoration: underline;
}
hgroup {
  margin-top: 50px;
}
footer {
    margin: 50px 0 25px;
}
h1, h2, h3 {
  color: #000;
  line-height: 1.38em;
  margin: 1.5em 0 .3em;
}
h1 {
  font-size: 25px;
  font-weight: 300;
  border-bottom: 1px solid #fff;
  margin-bottom: .5em;
}
h1:after {
  content: "";
  display: block;
  width: 100%;
  height: 1px;
  background-color: #ddd;
}
h2 {
  font-size: 19px;
  font-weight: 400;
}
h3 {
  font-size: 15px;
  font-weight: 400;
  margin: 0 0 .3em;
}
p {
  margin: 0 0 2em;
}
p + h2 {
  margin-top: 2em;
}
html {
  background: #f0f0f0;
  height: 100%;
}
code {
  background-color: white;
  border: 1px solid #ccc;
  padding: 1px 5px;
  color: #888;
}
pre {
  display: block;
  padding: 13.333px 20px;
  margin: 0 0 20px;
  font-size: 13px;
line-height: 1.4;
  background-color: #fff;
  border-left: 2px solid rgba(120,120,120,0.35);
  white-space: pre;
  white-space: pre-wrap;
  word-break: normal;
  word-wrap: break-word;
  overflow: auto;
  font-family: Menlo,Monaco,"Liberation Mono",Consolas,monospace !important;
}

#country {
    overflow:hidden;
    -moz-appearance: none;    
    width: 150px;
    -moz-border-radius: 8px 8px 8px 8px;
    -webkit-border-radius: 8px 8px 8px 8px;
    border-radius: 8px 8px 8px 8px;
    box-shadow: 1px 1px 11px -5px #330033;
}

#country:hover {
    overflow:hidden;
    -moz-appearance: none;    
    width: 150px;
    -moz-border-radius: 8px 8px 8px 8px;
    -webkit-border-radius: 8px 8px 8px 8px;
    border-radius: 8px 8px 8px 8px;
    box-shadow: 1px 1px 11px 0px #330033;
}

input[type=text] {
    padding: 12px 20px;
    width: 100%;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    box-shadow: 2px 2px 10px -3px;
}
input[type=text]:hover {
    box-shadow: 2px 2px 20px -3px;
}
input[type=text]:focus {
    background: #f0faff;
    box-shadow: 2px 2px 10px -3px;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 14px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #f5a009;
}

div {
		width: 81%;
    border-radius: 15px;
    background-color: #f2f2f2;
    padding: 40px;
    box-shadow: 0px 0px 20px -3px #000000;
	  background: linear-gradient(#a2a2a2, #f2f2f2);
}

</style>

</head>
<body>

<section class='container'>
        <hgroup>
          <h1>hi kat'ka</h1>
        </hgroup>

				<hgroup>
					<div class="input">
						<form action="index.php" method="post">
							<h2>Last visitor: <?php echo $last_visitor ?></h2>
							First name:<br>
							<input type="text" name="firstname"><br>
							Last name:<br>
							<input type="text" name="lastname"><br><br>
							<input type="submit" value="submit">
						</form>
					</div>
				</hgroup>

        <footer>
          <img src="pic/o_O.gif"></img>
	<br>
	  <a href="roof/roof.htm"> roof </a>
        </footer>
</section>

</body>
</html>
