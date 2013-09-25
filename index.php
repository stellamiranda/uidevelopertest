<!DOCTYPE html>
<html>
	<head>
		<title>UI Developer Test</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css">
		<script type="text/javascript" href="javascripts/main.js"></script>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <!--[if (gte IE 6)&(lte IE 8)]>
      <script type="text/javascript" src="javascripts/selectivizr.js"></script>
      <script type="text/javascript" src="javascripts/Modernizr.js"></script>
      <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
	</head>

	<body>
		<header>
			<div class="wrapper">
				<h1><a href="index.php"><img src="images/logo.png"></a></h1>
			</div>
		</header>
		<div class = "page-wrap">
			<div class="floater">
				<div class="search_content">
					<form action="results.php" method="post" id="form">
						<input id="search_textfield"type="text" class="search_textfield" name="name" value='Enter a name' onfocus="if (this.value=='Enter a name') this.value = ''" onblur="if(this.value.length==0){this.value='Enter a name';}">
						<input type="Submit" class="button" value="" id="search" />
					</form>
				</div>
			</div>
		</div>
		<footer class="site-footer">
			<div class="wrapper">
  			<p>Stella Miranda, 2013 - Built using the API from <a href="http://www.themoviedb.org" target="_blank">themoviedb.org</a>, using HTML5 and CSS3.</p>
  			</div>
		</footer>
	</body>
</html>
<!-- Basic Validation form-->
    <script type="text/javascript">
    $(function() {
   $('#form').submit(function() {
        if ($("#search_textfield").get(0).value === "Enter a name" || $("#search_textfield").get(0).value === ""  ) {
          
          return false;
        }
      });
  });
    </script>