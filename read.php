<?php

$files = scandir("text");

foreach ($files as $value) {
	if ($value == "index.php" || $value == ".." || $value == ".") {
		continue;
	}
	//echo $value;
	
	$files = array();
	
	$file = json_decode(file_get_contents("text/" . $value));
	
	$files[$value] = $file;
}

echo json_encode($files);

?>
