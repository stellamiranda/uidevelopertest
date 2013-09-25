<?php
// Setting  encoding to utf-8
header('Content-Type: text/html; charset=utf-8');



// get Actor
$actor_name = $_POST['name'];
if ($actor_name =="") {
	$actor_name=$_GET['name'];

}
//Replace the space for an %20 to get a valid URL for the request
$actor_name_query = str_replace(" ", "%20", $actor_name);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/search/person?query=".$actor_name_query."&api_key=c49ee1c4a4d925055489cad655cf3ea2&append_to_response=getInfo"); //production
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($ch);
curl_close($ch);

$obj = json_decode($response);
$actors =  $obj->{'results'};
$actors_size = $actors.length;

$actor_id = $obj->{'results'}[0]->{'id'};
$actor_name = $obj->{'results'}[0]->{'name'};

// get Movies
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/person/".$actor_id."/credits?api_key=c49ee1c4a4d925055489cad655cf3ea2&sort_by=created_at&sort_order=desc"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response2 = curl_exec($ch);
curl_close($ch);
$obj2 = json_decode($response2);
$movies = $obj2->{'cast'};

// Pagination code , yes, I had to do it manually 
$movies_size = count($movies);
if ($_GET["page"]==""){
	$_GET["page"]=1;
}
$current_page= intval($_GET["page"]);
$current_page = $current_page -1;
$index = (int)(4* $current_page)+1;
$number_of_pages = intval($movies_size /4);
$last =  (int) $movies_size - ($number_of_pages*4) ;

// Refactor release date to only year
foreach ($movies as $movie) {
	$arr = explode("-", $movie->{'release_date'}, 2);
	$movie->{'release_date'} = $arr[0];
}

//Sort Movies by release date

function cmp($a, $b)
{
    return strcmp($a->{'release_date'}, $b->{'release_date'});
}

$array = usort($movies, "cmp");


?>