<?php include 'search.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>UI Developer Test</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css">
		<script type="text/javascript" href="javascripts/main.js"></script>
	</head>
	<body>
		<header class="results">
			<div class="wrapper">
				<h1><a href="index.php"><img src="images/logo.png"></a></h1>
			</div>
		</header>
		<div class = "page-wrap">		
			<div class="content">
				<div class="wrapper">
					<h2> 
						<?php "Search Results for ".$actor_name; ?> 
					</h2>

					<div id="search_results">

						 <?php
						  	$i = 0;
							while ($i < 4) { 
								$movie = $movies[(int)($index+$i)];
  						?>									
								<div class="item">
									<img src=<?php echo "http://d3gtl9l2a4fn1j.cloudfront.net/t/p/w185".$movie->{'poster_path'}?>  height="130" width="92" >
									<ul>
										<li><?php echo $movie->{'title'} ?></li>												
										<li><?php  echo $movie->{'release_date'} ?></li>
									</ul>
								</div>
						<?php
							$i = $i +1;
							}
						?>


						<div class="pagination">
							<?php 
								$n = 1;
								while ( $n <= $number_of_pages) {
									$url_link  = "results.php?page=".$n."&name=".$actor_name;
							?>
									<a href=<?php echo $url_link  ?> ><?php echo $n ?></a>
							<?php
								$n = $n +1;
							}?>
						</div><!--End pagination -->
					</div><!--End Search results -->
				</div><!--End wrapper -->
			</div><!--End Content -->
		</div><!--End page wrap -->
		<footer class="site-footer">
			<div class="wrapper">
  				<p>Stella Miranda, 2013 - Built using the API from <a href="http://www.themoviedb.org" target="_blank">themoviedb.org</a>, using HTML5 and CSS3.</p>  		
  			</div>
		</footer>
	</body>
</html>