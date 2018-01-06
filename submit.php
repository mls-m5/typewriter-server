<?php


if (isset($_POST["file"])) {
	#print("file specified");
	print($_POST["file"]);
	$filename = $_POST["file"];
}
else {
	print ("no filename specified");
	# https://sv.wikipedia.org/wiki/Lista_%C3%B6ver_HTTP-statuskoder
	#http_response_code(400); #bad request 
	exit;
}

$myfile = fopen("text/" . $filename, "w");

$title = $_POST["title"] . "\n";


//fwrite($myfile, $title);

$content = $_POST["content"];

print("writing to file " . $filename);

$file_data = array(
	"title" => $title,
	"content" => $content
);
//fwrite($myfile, $content);

fwrite($myfile, json_encode($file_data));


?>
