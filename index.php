

<html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<style type="text/css">

	* {
  margin: 0;
  border:0;
}


html, body {
  height: 100%;
}
	body
{
	margin: 0 auto;
}

html { 
  background: url(images/background.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

header{
	background-color: #215671;
	height: 50px;
}

.wrapper{
	width: 960px;
	color: #FFF;
}

.search_content{
width: 962px;
   margin-left: auto;
   margin-right: auto;
   height: 75px;
   background-image: url(images/field_background.png);
}

.page-wrap {
  min-height: 100%;
  /* equal to footer height */
  margin-bottom: -100px; 
}
.page-wrap:after {
  content: "";
  display: block;
}
.site-footer, .page-wrap:after {
  /* .push must be the same height as footer */
  height: 100px; 
}
.site-footer {
  background: #215671;
  margin: 0 auto;
}

.wrapper, .search_content{
	margin: 0 auto;
}

.site-footer div{
		margin: 0 auto;
		width: 610px;

}

.floater	{
   position: absolute;
   top: 50%;
   margin-top: -40px;/* half of #content height*/
   left: 0;
   width: 100%;
}

.button{
	background-image: url(images/search_btn.png);
	width: 164px;
	height: 56px;
	float: right;
	margin-top: 10px;
	margin-right: 10px;
}

.search_textfield{
	border: 0;
    outline: 0;
    background: #FFF;
    border: 1px solid #215671;
    width: 770px;
    height: 55px;
    margin-top: 10px;
    margin-left: 10px;
    -webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	color: #215671;
	font-family: "HelveticaNeue", "Helvetica Neue", "Helvetica", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300;
   font-size: 18px;
   padding-left: 10px;
}

footer{
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300;
   font-size: 16px;
}

footer p{
	position: relative;
   top: 20px;
   margin-top: -0px;/* half of #content height*/
   left: 0;
}

	</style>
	</head>
	<body>


		<header>
			<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/png" href="images/favicon.png">
			<div class="wrapper">
				<h1>UI DeveloperTest</h1>
			</div>
		</header>
		<div class = "page-wrap">
			<div class="floater">

				<div class="search_content">
					<input type="text" class="search_textfield">
					<input type="Submit" class="button" value="" >
				</div>
			</div>
		</div>
		<footer class="site-footer">
			<div class="wrapper">
  			<p>Stella Miranda, 2013 - Built using the API from themoviedb.org, using HTML5 and CSS3.</p>
  		</div>
		</footer>
	</body>
</html>