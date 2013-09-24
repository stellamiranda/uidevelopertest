<!DOCTYPE html>
<html>
	<head>
		<title>UI Developer Test</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css">
		<script type="text/javascript" href="javascripts/main.js"></script>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" type="image/png" href="images/favicon.png">
	</head>

	<body>
		<header>
			<div class="wrapper">
				<h1><a href="test.php"><img src="images/logo.png"></a></h1>
			</div>
		</header>

		<?php
    //include('libraries/TMDb.php');

    // Inicialize a TMDb Wrapper class with the api key as param
    //$tmdb = new TMDb('c49ee1c4a4d925055489cad655cf3ea2');

    // First request a token from API
    //$token = $tmdb->getAuthToken();

     // Request valid session for that particular user from API
    //$session = $tmdb->getAuthSession();

    //Retrieve config when the class is already initialised from TMDb (always new request)
    //  $config = $tmdb->getConfiguration();


$variable="MI VARIABLE";
echo $variable;

// $tmdb.searchPerson("vin diesel");
      //$tmdb.searchPerson($name)

      // $tmdb->getPerson($person_id);
?>

<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/search/person?apy_key=c49ee1c4a4d925055489cad655cf3ea2");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);


?>

		<div class = "page-wrap">
			<div class="floater">
				<div class="search_content">
					<input type="text" class="search_textfield">
					<input type="Submit" class="button" value="" id="search" onclick="location.href='results.php';" >
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